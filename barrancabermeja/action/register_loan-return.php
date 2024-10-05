<?php
require_once '../includes/class_libroqr.php';
require_once '../includes/class_usuario.php';
require_once '../includes/class_prestamo.php'; // Asume que tienes una clase para gestionar los préstamos

// Verificar que los campos requeridos estén presentes en el formulario
if (
    !empty($_POST['idLibro'])
) {
    // Asignar las variables de entrada

    $idlibro = intval($_POST['idLibro']); // Asegúrate de validar el ID del libro
    
    
    $prestamo = new Prestamo(); // Clase para manejar los préstamos
    $libro = new Libroqr(); // Clase para manejar los préstamos

    try {



        // Registrar el préstamo del libro
        $prestamo_exitoso = $prestamo->eliminarPrestamo($idlibro);

        // Actualizar el estado del libro a "Prestado"
        if ($prestamo_exitoso) {
            $libro->actualizarEstadolibro($idlibro, 'Disponible');
            echo "<script>
                    alert('Devolucion registrado correctamente.');
                    window.location.href = '../book_loan.php';
                  </script>";
            exit();
        } else {
            echo "<script>
                    alert('Error al registrar la devolucion.');
                    window.location.href = '../book_loan.php';
                  </script>";
            exit();
        }
    } catch (Exception $e) {
        
        echo "<script>
                alert('Error: " . $e->getMessage() . "');
                window.location.href = '../book_loan.php';
              </script>";
        exit();
    }
} else {
    // Si algún campo está vacío, mostrar una alerta y redirigir
    
    
    echo "<script>
            alert('No se registro ningun libro.');
            window.location.href = '../book_loan.php';
          </script>";
    exit();
}
?>
