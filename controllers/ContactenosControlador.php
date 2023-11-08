<?php
require_once 'UsuarioModelo.php';

          if(isset($_POST)){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            //esto es una estructura de operador ternario
            $apellido=isset($_POST['apellido']) ? $_POST['apellido'] :
            false;
            $correo=isset($_POST['correo']) ? $_POST['correo'] : false;
            $mensaje=isset($_POST['mensaje']) ? $_POST['mensaje'] :
            false;
            if($nombre && $correo && $mensaje){

                $usuario = new UsuarioModelo();
                $usuario->setNombre( $nombre );
                $usuario->setCorreo($correo);
                $usuario->setMensaje($mensaje);
                $guardar=$usuario->guardarContactenos();
                if($guardar){
                    -
                    echo $guardar=1;
                }else{
                    echo $guardar=0;
                }
            }
          } 

          
?>
