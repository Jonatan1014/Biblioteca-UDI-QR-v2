<?php    
require ('conn.php');

class Libroqr extends conectarDB {        

    public function __construct() {                
        parent::__construct();
    }

	 // Método para verificar si el código de estudiante o correo ya existen
	 public function verificarDuplicados($isbn) {
        $sql = "SELECT * FROM libros WHERE isbn = :isbn";
        $stmt = $this->conn_db->prepare($sql);
        $stmt->bindParam(':isbn', $isbn, PDO::PARAM_INT);
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultado;
    }

	public function obtenerImagenPorId($idLibro) {
		// Implementa aquí la lógica para conectarte a la base de datos y recuperar la imagen
		// Por ejemplo:
		$sql = "SELECT qr_code FROM libros WHERE idLibro = ?";
		$stmt = $this->db->prepare($sql);
		$stmt->execute([$idLibro]);
		return $stmt->fetchColumn(); // Asumiendo que "portada" es el campo de la imagen
	}
	

    // Método para listar todos los registros de la tabla 'libros'
    public function listarLibros() {
        $sql = "SELECT * FROM libros";                
        $stmt = $this->conn_db->prepare($sql);                        
        $stmt->execute();            
        $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);            
        $stmt->closeCursor();
        return $resultados;
    }    

    // Método para obtener detalles de un libro por ID
    public function detallarLibro($idLibro) {
        $sql = "SELECT * FROM libros WHERE idLibro = :idLibro";
        $stmt = $this->conn_db->prepare($sql);            
        $stmt->bindParam(':idLibro', $idLibro, PDO::PARAM_INT);        
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultado;
    }

     // Método para obtener detalles de un libro por SBN
     public function detallarLibro_ISBN($isbn) {
        $sql = "SELECT * FROM libros WHERE isbn = :isbn";
        $stmt = $this->conn_db->prepare($sql);            
        $stmt->bindParam(':isbn', $isbn, PDO::PARAM_STR);        
        $stmt->execute();
        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
        $stmt->closeCursor();
        return $resultado;
    }
   

    // Método para agregar un nuevo libro
    public function agregarLibro($titulo, $autor, $editorial, $ano, $isbn, $edicion, $idioma, $portada, $qr_code, $estado,$categoria, $resena) {
        $sql = "INSERT INTO libros (titulo, autor, editorial, año_publicacion, isbn, edicion, idioma, portada, qr_code, estado, categoria,resena)
                VALUES (:titulo, :autor, :editorial, :anio_publicacion, :isbn, :edicion, :idioma, :portada, :qr_code, :estado, :categoria, :resena)";
        $stmt = $this->conn_db->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':editorial', $editorial);
        $stmt->bindParam(':anio_publicacion', $ano, PDO::PARAM_INT);
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':edicion', $edicion, PDO::PARAM_INT);
        $stmt->bindParam(':idioma', $idioma);
        $stmt->bindParam(':portada', $portada, PDO::PARAM_LOB);
        $stmt->bindParam(':qr_code', $qr_code, PDO::PARAM_LOB);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':resena', $resena);
        $stmt->execute();
        $lastInsertId = $this->conn_db->lastInsertId();
        $stmt->closeCursor();
        return $lastInsertId;
    }

    // Método para actualizar detalles de un libro por ID
    public function modificarLibro($idLibro, $titulo, $autor, $editorial, $anio_publicacion, $isbn, $edicion, $idioma, $estado, $categoria) {
        $sql = "UPDATE libros 
                SET titulo = :titulo, autor = :autor, editorial = :editorial, año_publicacion = :anio_publicacion, 
                    isbn = :isbn, edicion = :edicion, idioma = :idioma, estado = :estado, categoria = :categoria 
                WHERE idLibro = :idLibro";
        $stmt = $this->conn_db->prepare($sql);    
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':autor', $autor);
        $stmt->bindParam(':editorial', $editorial);
        $stmt->bindParam(':anio_publicacion', $anio_publicacion, PDO::PARAM_INT);
        $stmt->bindParam(':isbn', $isbn);
        $stmt->bindParam(':edicion', $edicion, PDO::PARAM_INT);
        $stmt->bindParam(':idioma', $idioma);
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':categoria', $categoria);
        $stmt->bindParam(':idLibro', $idLibro, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
    // Método para actualizar detalles de un libro por ID
    public function actualizarEstadolibro($idLibro, $estado) {
        $sql = "UPDATE libros 
                SET  estado = :estado 
                WHERE idLibro = :idLibro";
        $stmt = $this->conn_db->prepare($sql);    
        $stmt->bindParam(':estado', $estado);
        $stmt->bindParam(':idLibro', $idLibro, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }

    // Método para eliminar un libro por ID
    public function eliminarLibro($idLibro) {
        $sql = "DELETE FROM libros WHERE idLibro = :idLibro";
        $stmt = $this->conn_db->prepare($sql);
        $stmt->bindParam(':idLibro', $idLibro, PDO::PARAM_INT);
        $stmt->execute();
        $stmt->closeCursor();
        return true;
    }
}
?>
