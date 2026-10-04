<?php 
require '../vendor/autoload.php'; // Asegúrate de incluir el autoload de composer
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

require_once '../includes/class_libroqr.php';
require_once '../includes/portada.php';

// Verificar que los campos requeridos estén presentes y no vacíos
function validarCamposRequeridos($campos) {
    foreach ($campos as $campo) {
        if (empty($campo)) {
            return false;
        }
    }
    return true;
}

if (validarCamposRequeridos([
    $_POST['titulo'], $_POST['autor'], $_POST['editorial'],
    $_POST['categoria'], $_POST['ano'], $_POST['idioma'],
    $_POST['isbn'], $_POST['edicion'], $_POST['descripcion'], $_POST['estanteria'], $_POST['fila']
])) {
    // Asignar las variables de entrada
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $categoria = $_POST['categoria'];
    $ano = $_POST['ano'];
    $idioma = $_POST['idioma'];
    $isbn = $_POST['isbn'];
    $edicion = $_POST['edicion'];
    $resena = $_POST['descripcion'];
    $ubicacion = $_POST['estanteria'].'-'.$_POST['fila'];
    $estado = 'Disponible'; // O el estado que desees
   

    // Función para generar código QR
    function generarCodigoQR($url) {
        $qrCode = new QrCode($url);
        $writer = new PngWriter();
        return $writer->write($qrCode)->getString();
    }
    
    // Instanciar la clase Libroqr
    $Libro_class = new Libroqr();

    try {
        // Portada como binario: archivo subido o URL (redimensionada)
        $portada = obtenerPortada($_FILES['portada'] ?? [], $_POST['portada_url'] ?? '');
        if ($portada === null) {
            echo "<script>alert('Debes subir una imagen o pegar la URL de la portada.'); window.location.href = '../form-elements.php';</script>";
            exit();
        }

        // Verificar si el ISBN ya está registrado
        $libro_existente = $Libro_class->verificarDuplicados($isbn);
        
        if ($libro_existente) {
            echo "<script>alert('Error: El libro ya está registrado.'); window.location.href = '../form-elements.php';</script>";
            exit();
        }

        // URL que deseas convertir en QR
        $url = "localhost/biblioteca-udi-qr-v2/barrancabermeja/view-qr.php?id=" . $isbn;

        // Llamar a la función para generar el código QR
        $codigoQR = generarCodigoQR($url);

        // Ejecutar la operación de agregar libro
        $operar = $Libro_class->agregarLibro(
            $titulo, $autor, $editorial, $ano, $isbn, 
            $edicion, $idioma, $portada, $codigoQR, 
            $estado, $categoria, $resena, $ubicacion
        );
        

        if ($operar) {
            echo "<script>alert('Libro registrado correctamente'); window.location.href = '../form-elements.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error al registrar el libro'); window.location.href = '../form-elements.php';</script>";
            exit();
        }
    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = '../form-elements.php';</script>";
        exit();
    }
} else {
    // Manejar el caso en que algún campo obligatorio esté vacío
    echo "<script>alert('Por favor, completa todos los campos.'); window.location.href = '../form-elements.php'; </script>";
    exit();
}
?>