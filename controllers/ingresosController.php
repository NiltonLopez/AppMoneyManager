<?php
    require_once '../models/ingresosModel.php';

    if (isset($_POST)) {
        $medio = isset($_post['medio']) ? $_post['medio'] : false;
        $monto = isset($_POST['monto']) ? $_POST['monto'] : false;
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
        $categoria = isset($_POST['categoria']) ? $_POST['categoria'] : false;
        $idUsuario = "1";
        //isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : 0;

        if ($medio && $monto && $fecha && $categoria) {
            $ingreso = new ingresosModel();
            $ingreso -> setMedio( $medio );
            $ingreso -> setMonto( $monto );
            $ingreso -> setFecha( $fecha );
            $ingreso -> setIdCategoria( $categoria );
            $ingreso -> setIdUsuario( $idUsuario );

            $guardar = $ingreso -> guardarIngreso();
            if ($guardar) {
                $guardar = 1;
            } else {
                $guardar = 0;
            }
        }
    }
?>