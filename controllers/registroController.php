<?php
    require_once '../models/registroModel.php';

    if (isset($_POST)) {
        $nombre = isset($_post['nombre']) ? $_post['nombre'] : false;
        $email = isset($_POST['email']) ? $_POST['email'] : false;
        $password = isset($_POST['password']) ? $_POST['password'] : false;
        $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : false;
        $idPersona = "1";
        //isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;

        if ($nombre && $email && $password && $telefono) {
            $registro = new registroModel();
            $registro -> setNombre( $nombre );
            $registro -> setEmail( $email );
            $registro -> setPassword( $password );
            $registro -> setTelefono( $telefono );

            $guardar = $registro -> guardarRegistro();
            if ($guardar) {
                $guardar = 1;
            } else {
                $guardar = 0;
            }
        }
    }
?>