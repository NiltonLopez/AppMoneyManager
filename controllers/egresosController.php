<?php
    require_once(__DIR__ . '/../models/egresosModel.php');

    $alert = " ";

    if (!empty($_POST['btnEnviarEgreso'])) {
        $concepto = isset($_POST['concepto']) ? $_POST['concepto'] : false;
        $monto = isset($_POST['monto']) ? $_POST['monto'] : false;
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
        $idUsuario = "1";

        if ($concepto && $monto && $fecha && $categoria) {
            $egreso = new egresosModel();
            $egreso->setConcepto($concepto);
            $egreso->setMonto($monto);
            $egreso->setFecha($fecha);
            $egreso->setIdCategoria($categoria);
            $egreso->setIdUsuario($idUsuario);
            
            $guardar = $egreso->guardarEgreso();
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