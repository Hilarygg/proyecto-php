<?php
    require_once '../config/config.php';

    class database {
        private $conn;

        public function __construct () {
            $this->conn = new mysql(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            if($this->conn->connect_error) {
                die('Error de Conexion' . $this->conn->connect_error);
            }
        }

        public function getConnection () {
        return this->conn;
        }
    }
?>