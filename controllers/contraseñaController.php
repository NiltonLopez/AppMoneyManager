<?php
    require_once(__DIR__ . '/../models/contraseñaModel.php');

    $alert = " ";

    if (!empty($_POST['btnCambiarContraseña'])) {
        $contraseña = isset($_POST['contraseña']) ? $_POST['contraseña'] : false;
        $nuevacontraseña = isset($_POST['nuevacontraseña']) ? $_POST['nuevacontraseña'] : false;
        $nuevacontraseña2 = isset($_POST['nuevacontraseña2']) ? $_POST['nuevacontraseña2'] : false;
        $idUsuario = "1";

        if ($contraseña && $nuevacontraseña && $nuevacontraseña2) {
            $contraseña = new contraseñaModel();
            $contraseña->setContraseña($contraseña);
            $contraseña->setNuevaContraseña($nuevaContraseña);
            $contraseña->setNuevaContraseña2($nuevaContraseña2);
            $egreso->setIdUsuario($idUsuario);
            
            $guardar = $contraseña->actualizarContraseña($idUsuario);
            if ($guardar) {
                $alert = "success";
            } else {
                $alert = "danger";
            }
        } else {
            $alert = "warning";
        }
    } 
?>