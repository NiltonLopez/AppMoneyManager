<?php
    class database {
        public static function connect() {
            $conexion = new mysqli("localhost","root","","dbMoneyManager");
            $conexion -> query("SET NAMES 'utf8'");
            return $conexion;
        }
    }
?>
