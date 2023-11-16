<?php
require_once(__DIR__ . '/../models/ingresosModel.php');
require_once(__DIR__ . '/../models/egresosModel.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $type = $_GET['type'];

    $ingresosModel = new ingresosModel();
    $egresoModel = new egresosModel();

    if ($type === 'ingreso') {
        // Eliminar ingreso
        if ($ingresosModel->eliminarIngreso($id)) {
            $result = true;
        } else {
            $result = false;
        }
    } elseif ($type === 'egreso') {
        // Eliminar egreso
        if ($egresoModel->eliminarEgreso($id)) {
            $result = true;
        } else {
            $result = false;
        }
    } else {
        $result = false;
    }

    // Sumar todos los ingresos
    $listaIngresos = $ingresosModel->obtenerIngresosPorUsuario($id); // Asume que existe un método para obtener todos los ingresos
    $totalIngresos = 0;

    foreach ($listaIngresos as $ingreso) {
        $totalIngresos += $ingreso['monto']; // Asume que el monto está en la columna 'monto'
    }

    // Ahora $totalIngresos contiene la suma de todos los ingresos
} else {
    $result = false;
}
?>
