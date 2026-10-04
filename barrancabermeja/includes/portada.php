<?php
// Manejo de la portada de un libro: archivo subido o URL de imagen.
// En ambos casos la imagen se guarda como binario en la columna "portada".

const PORTADA_MAX_BYTES = 10 * 1024 * 1024; // 10 MB
const PORTADA_MAX_LADO = 800;               // Lado máximo en píxeles

// Redimensiona la imagen (en binario) si supera el tamaño máximo; devuelve JPEG
function redimensionarImagen(string $binario, int $maxWidth, int $maxHeight): string {
    $info = getimagesizefromstring($binario);
    if ($info === false) {
        throw new Exception('El archivo no es una imagen válida.');
    }

    [$width, $height] = $info;
    if ($width <= $maxWidth && $height <= $maxHeight) {
        return $binario;
    }

    $ratio = $width / $height;
    if ($ratio > 1) {
        $newWidth = $maxWidth;
        $newHeight = (int) round($maxWidth / $ratio);
    } else {
        $newHeight = $maxHeight;
        $newWidth = (int) round($maxHeight * $ratio);
    }

    $src = imagecreatefromstring($binario);
    $dst = imagecreatetruecolor($newWidth, $newHeight);
    imagecopyresampled($dst, $src, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    ob_start();
    imagejpeg($dst);
    return ob_get_clean();
}

// Descarga una imagen desde una URL http(s) y devuelve su binario
function descargarImagenDesdeUrl(string $url): string {
    if (!filter_var($url, FILTER_VALIDATE_URL) || !preg_match('#^https?://#i', $url)) {
        throw new Exception('La URL de la portada debe empezar con http:// o https://');
    }

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_MAXREDIRS => 3,
        CURLOPT_PROTOCOLS => CURLPROTO_HTTP | CURLPROTO_HTTPS,
        CURLOPT_REDIR_PROTOCOLS => CURLPROTO_HTTP | CURLPROTO_HTTPS,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT => 15,
        CURLOPT_MAXFILESIZE_LARGE => PORTADA_MAX_BYTES,
        CURLOPT_USERAGENT => 'BibliotecaUDI/1.0',
    ]);
    $binario = curl_exec($ch);
    $codigoHttp = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    if ($binario === false || $codigoHttp !== 200) {
        throw new Exception('No se pudo descargar la imagen desde la URL indicada.');
    }

    return $binario;
}

// Devuelve el binario de la portada o null si no se envió ninguna.
// Si se sube un archivo, tiene prioridad sobre la URL.
function obtenerPortada(array $archivo, string $url): ?string {
    $error = $archivo['error'] ?? UPLOAD_ERR_NO_FILE;

    if ($error === UPLOAD_ERR_OK && is_uploaded_file($archivo['tmp_name'])) {
        $binario = file_get_contents($archivo['tmp_name']);
    } elseif ($error !== UPLOAD_ERR_NO_FILE) {
        throw new Exception('Error al subir la imagen (código ' . $error . ').');
    } elseif (trim($url) !== '') {
        $binario = descargarImagenDesdeUrl(trim($url));
    } else {
        return null;
    }

    return redimensionarImagen($binario, PORTADA_MAX_LADO, PORTADA_MAX_LADO);
}

// URL a guardar en "portada_url": solo cuando la portada viene de la URL (no hay archivo)
function urlPortada(array $archivo, string $url): ?string {
    $usaArchivo = ($archivo['error'] ?? UPLOAD_ERR_NO_FILE) === UPLOAD_ERR_OK;
    return (!$usaArchivo && trim($url) !== '') ? trim($url) : null;
}

// Fuente para <img src>: la imagen guardada en la base, o la URL si no hay binario
function srcPortada(array $libro): ?string {
    if (!empty($libro['portada'])) {
        return 'data:image/jpeg;base64,' . base64_encode($libro['portada']);
    }
    return !empty($libro['portada_url']) ? $libro['portada_url'] : null;
}
