<?php
// Códigos QR de los libros. Si el libro no tiene QR guardado, se genera al vuelo
// a partir de la URL de su página pública (view-qr.php?id=ISBN).

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/settings.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// URL que codifica el QR de un libro
function urlQR(string $isbn): string {
    return APP_URL . '/view-qr.php?id=' . urlencode($isbn);
}

// Devuelve el PNG del QR del libro (guardado o generado), o null si no hay ISBN
function qrLibro(array $libro): ?string {
    if (!empty($libro['qr_code'])) {
        return $libro['qr_code'];
    }
    if (empty($libro['isbn'])) {
        return null;
    }
    return (new PngWriter())->write(new QrCode(urlQR($libro['isbn'])))->getString();
}

// Fuente para <img src> con el QR del libro
function srcQR(array $libro): ?string {
    $png = qrLibro($libro);
    return $png === null ? null : 'data:image/png;base64,' . base64_encode($png);
}
