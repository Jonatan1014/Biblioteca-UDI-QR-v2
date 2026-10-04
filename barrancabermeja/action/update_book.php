<?php 
require_once __DIR__ . '/../includes/auth.php';
requerirAdmin();
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
    $_POST['idLibro'], $_POST['titulo'], $_POST['autor'], $_POST['editorial'], 
    $_POST['categoria'], $_POST['ano'], $_POST['idioma'], 
    $_POST['isbn'], $_POST['edicion'], $_POST['estado'], $_POST['descripcion'],$_POST['estanteria'],$_POST['fila']
])) {    
    // Asignar las variables de entrada
    $idLibro = $_POST['idLibro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $editorial = $_POST['editorial'];
    $categoria = $_POST['categoria'];
    $ano = $_POST['ano'];
    $idioma = $_POST['idioma'];
    $isbn = $_POST['isbn'];
    $edicion = $_POST['edicion'];
    $resena = $_POST['descripcion'];
    $estado = $_POST['estado']; // O el estado que desees
    $ubicacion = $_POST['estanteria'].'-'.$_POST['fila']; // O el estado que desees

    // Instanciar la clase Libroqr
    $Libro_class = new Libroqr();

    try {
        // Portada como binario: archivo subido o URL; null conserva la portada actual
        $portada = obtenerPortada($_FILES['portada'] ?? [], $_POST['portada_url'] ?? '');

        // Ejecutar la operación de modificar libro
        $operar = $Libro_class->modificarLibro(
            $idLibro, $titulo, $autor, $editorial, $ano, $isbn,
            $edicion, $idioma, $portada, // Puedes enviar null si no hay portada nueva
            $estado, $categoria, $resena, $ubicacion,
            urlPortada($_FILES['portada'] ?? [], $_POST['portada_url'] ?? '')
        );

        if ($operar) {
            echo "<script>alert('Libro actualizado correctamente'); window.location.href = '../editar_book.php';</script>";
            exit();
        } else {
            echo "<script>alert('Error al actualizar el libro'); window.location.href = '../editar_book.php';</script>";
            exit();
        }
    } catch (Exception $e) {
        echo "<script>alert('Error: " . $e->getMessage() . "'); window.location.href = '../editar_book.php';</script>";
        exit();
    }
} else {
    // Manejar el caso en que algún campo obligatorio esté vacío
    echo "<script>alert('Por favor, completa todos los campos.'); window.location.href = '../editar_book.php'; </script>";
    exit();
}
?>
