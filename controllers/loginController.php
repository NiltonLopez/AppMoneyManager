<?php
session_start(); // Inicia la sesión al comienzo del script

if (!empty($_POST["btningresar"])) {
    if (empty($_POST["email"]) and empty($_POST["password"])) {
        echo '<div class="alert alert-danger">LOS CAMPOS ESTÁN VACÍOS</div>';
    } else {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $sql = $conexion->query("SELECT * FROM tbl_persona WHERE Email='$email' AND Password='$password'");
        
        if ($datos = $sql->fetch_object()) {
            // Almacenar información en variables de sesión
            $_SESSION['usuario_id'] = $datos->id;
            $_SESSION['usuario_email'] = $datos->Email;

            

            // Redirigir a la página de inicio del usuario
            header("location:user/inicio.php");
        } else {
            echo '<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }    
        echo $_SESSION['usuario_email'];
    }
}

if (isset($_POST['cerrar_sesion'])) {
    session_destroy();
    
    header("location: ./index.php");
    exit();
}
?>
