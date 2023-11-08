<?php
    require_once 'db.php';

    class ingresosModel {
        private $id;
        private $medio;
        private $monto;
        private $fecha;
        private $categoria;
        private $usuario;
    
        // Conexión a la base de datos
        private $db;
        public function _construct() {
            $this -> db = Database::connect();
        }

        // Gets and sets
        public function getId(){
            return $this -> idIngreso;
        }
        public function setId(){
            $this -> idIngreso = $this -> db -> real_escape_string($id);
        }

        public function getMedio(){
            return $this -> Medio;
        }
        public function setMedio(){
            $this -> Medio = $this -> db -> real_escape_string($medio);
        }

        public function getMonto(){
            return $this -> Monto;
        }
        public function setMonto(){
            $this -> Monto = $this -> db -> real_escape_string($monto);
        }

        public function getFecha(){
            return $this -> Fecha;
        } 
        public function setFecha(){
            $this -> Fecha = $this -> db -> real_escape_string($fecha);
        }

        public function getIdCategoria(){
            return $this -> IdCategoria;
        }
        public function setIdCategoria(){
            $this -> IdCategoria = $this -> db -> real_escape_string($categoria);
        }

        public function getIdUsuario(){
            return $this -> IdUsuario;
        }
        public function setIdUsuario(){
            $this -> IdUsuario = $this -> db -> real_escape_string($usuario);
        }

        // Guardar Datos
        public function guardarIngreso(){
            $sql = "INSERT INTO tbl_ingresos VALUES 
                (NULL,
                '{$this -> getMedio()}',
                '{$this -> getMonto()}',
                '{$this -> getFecha()}',
                '{$this -> getIdCategoria()}',
                '{$this -> getIdUsuario()}');";
            $guardar = $this -> db -> query($sql);
            $result = false;
            if ($result) {
                $result = true;
            }
            return $result;
        }
    }
?>