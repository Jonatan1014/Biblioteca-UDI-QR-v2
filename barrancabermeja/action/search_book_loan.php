<?php
if (isset($_POST['loan'])) {
    $loan = $_POST['loan'];
    $conn = new mysqli('localhost', 'root', '', 'libroqr');

    if ($conn->connect_error) {
        echo 'Error de conexión';
        exit();
    }

    // Consulta SQL para buscar por título del libro, ISBN o nombre del usuario que realizó el préstamo
    $sql = "SELECT libros.titulo, libros.isbn, usuarios.name, usuarios.carrera, prestamos.fecha_vencimiento, prestamos.idLibro
            FROM prestamos
            INNER JOIN libros ON prestamos.idLibro = libros.idLibro
            INNER JOIN usuarios ON prestamos.idUser = usuarios.idUser
            WHERE libros.titulo LIKE ? 
            OR libros.isbn LIKE ? 
            OR usuarios.name LIKE ?";

    $stmt = $conn->prepare($sql);

    // Parámetros con los comodines para búsqueda parcial
    $likeTerm = '%' . $loan . '%';
    $stmt->bind_param('sss', $likeTerm, $likeTerm, $likeTerm);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-4">
                <div class="card border-primary border">
                    <div class="card-body">
                        <h5 class="card-title text-primary" style="text-align: center;">
                            <?php echo htmlspecialchars($row["titulo"]); ?>
                        </h5>
                        <h7 class="card-title text-body-emphasis">
                            ISBN: <?php echo htmlspecialchars($row["isbn"]); ?>
                        </h7>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="card-text mb-0"><?php echo htmlspecialchars($row["name"]); ?></p>
                            <p class="card-text mb-0"><?php echo htmlspecialchars($row["carrera"]); ?></p>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <form action="action/register_loan-return.php" method="post">
                                <input type="hidden" name="idLibro" value="<?php echo htmlspecialchars($row["idLibro"]); ?>">
                                <button class="btn btn-primary btn-sm">Regresar libro</button>
                            </form>
                            <div style="text-align: right;">
                                <?php echo htmlspecialchars($row["fecha_vencimiento"]); ?>
                            </div>
                        </div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
            <?php
        }
    } else {
        echo '<div class="alert alert-warning">No se encontraron resultados.</div>';
    }

    $stmt->close();
    $conn->close();
}
?>
