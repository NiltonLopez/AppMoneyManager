<?php
   require_once 'db.php';

class contraseñaModel{
    private $idUsuario;
    private $contraseña;
    private $nuevaContraseña;
    private $nuevaContraseña2;

    //conexion a la base de datos
    private $db;
    public function __construct(){
        $this -> db = Database::connect();      
    }

    public function getIdUsuario(){
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario){
        $this->idUsuario=$this->db->real_escape_string($idUsuario);
    }
    public function getContraseña(){
        return $this->contraseña;
    }
    public function setContraseña($contraseña){
        $this->contraseña=$this->db->real_escape_string($contraseña);
    }
    public function getNuevaContraseña(){
        return $this->nuevaContraseña;
    }
    public function setNuevaContraseña($nuevaContraseña){
        $this->nuevaContraseña=$this->db->real_escape_string($nuevaContraseña);
    }

    public function getNuevaContraseña2(){
        return $this->nuevaContraseña2;
    }
    public function setNuevaContraseña2($nuevaContraseña2){
        $this->nuevaContraseña2=$this->db->real_escape_string($nuevaContraseña2);
    }

    public function actualizarContraseña($idUsuario){
        // Verificar que la antigua contraseña es correcta antes de actualizar
        if ($this->getNuevaContraseña() == $this->getNuevaContraseña2()) {
            $sqlActualizarContraseña = "UPDATE persona SET contraseña = '{$this->getNuevaContraseña()}' WHERE id = '$idUsuario' AND contraseña = '{$this->getContraseña()}'";
            $guardar = $this->db->query($sqlActualizarContraseña);
            $result = $guardar ? true : false;  
        }else{
            $result = false;
        }
        return $result;
    }

}
        
?>