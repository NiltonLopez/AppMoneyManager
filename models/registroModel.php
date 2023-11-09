<?php
    require_once 'db.php';

    class registroModel {
        private $id;
        private $Nombre;
        private $Email;
        private $password;
        private $telefono;
    
        // Conexión a la base de datos
        private $db;
        public function _construct() {
            $this -> db = Database::connect();
        }

        // Gets and sets
        public function getId(){
            return $this -> idPersona;
        }
        public function setId(){
            $this -> idPersona = $this -> db -> real_escape_string($id);
        }

        public function getNombre(){
            return $this -> Nombre;
        }
        public function setNombre(){
            $this -> Nombre = $this -> db -> real_escape_string($nombre);
        }

        public function getEmail(){
            return $this -> Email;
        }
        public function setEmail(){
            $this -> Email = $this -> db -> real_escape_string($email);
        }

        public function getPassword(){
            return $this -> Password;
        } 
        public function setPassword(){
            $this -> Password = $this -> db -> real_escape_string($password);
        }

        public function getTelefono(){
            return $this -> Telefono;
        }
        public function setTelefono(){
            $this -> Telefono = $this -> db -> real_escape_string($telefono);
        }

        // Guardar Datos
        public function guardarRegistro(){
            $sql = "INSERT INTO tbl_persona VALUES 
                (NULL,
                '{$this -> getNombre()}',
                '{$this -> getEmail()}',
                '{$this -> getPassword()}',
                '{$this -> getTelefono()}');";
            $guardar = $this -> db -> query($sql);
            $result = false;
            if ($result) {
                $result = true;
            }
            return $result;
        }
    }
?>