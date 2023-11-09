<?php
    require_once(__DIR__ . '/../models/ingresosModel.php');

    $alert = " ";

    if (!empty($_POST['btnEnviarIngreso'])) {
        $medio = isset($_POST['medio']) ? $_POST['medio'] : false;
        $monto = isset($_POST['monto']) ? $_POST['monto'] : false;
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
        $idUsuario = "1";

        if ($medio && $monto && $fecha && $categoria) {
            $ingreso = new ingresosModel();
            $ingreso->setMedio($medio);
            $ingreso->setMonto($monto);
            $ingreso->setFecha($fecha);
            $ingreso->setIdCategoria($categoria);
            $ingreso->setIdUsuario($idUsuario);
            
            $guardar = $ingreso->guardarIngreso();
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