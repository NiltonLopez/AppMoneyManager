<?php
if (!empty($_POST["btningresar"])) {
    if (empty($_POST["email"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        $email=$_POST["email"];
        $password=$_POST["password"];
        $sql=$conexion->query(" select *from tbl_persona where Email='$email' and Password='$password' ");
        if ($datos=$sql->fetch_object()) {
            header("location:user/inicio.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>