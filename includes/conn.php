<?php
require_once('settings.php');

if (!class_exists('conectarDB')) {
    class conectarDB {    
        protected $conn_db;
        
        public function __construct() {
            try {
                $this->conn_db = new PDO(
                    DB_HOST, DB_USER, DB_PASS, 
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
                return $this->conn_db;
            } catch(PDOException $e) {
                die("Database error: " . $e->getMessage());
            }
        }
    }
}