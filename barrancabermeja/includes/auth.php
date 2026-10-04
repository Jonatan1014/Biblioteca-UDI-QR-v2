<?php
// Control de acceso para los endpoints de action/.
// requerirAdmin() corta la ejecución si no hay sesión o el rol no es Admin/Root.

require_once __DIR__ . '/class_usuario.php';

function requerirAdmin(): void {
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    $email = $_SESSION['usuario_email'] ?? null;
    if ($email === null) {
        header('Location: ../login.php');
        exit();
    }

    $usuario = (new Usuario())->datosUser_rol($email);
    if (
        !$usuario ||
        !in_array($usuario['rol'], ['Admin', 'Root'], true) ||
        $usuario['estado'] !== 'Activo'
    ) {
        http_response_code(403);
        echo 'Acceso denegado.';
        exit();
    }
}
