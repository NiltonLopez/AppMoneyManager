<?php
require_once 'ContactenosModelo.php';

          if(isset($_POST)){
            $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
            $correo=isset($_POST['correo']) ? $_POST['correo'] : false;
            $mensaje=isset($_POST['mensaje']) ? $_POST['mensaje'] :
            false;
            if($nombre && $correo && $mensaje){

                $contacto = new ContactoModelo();
                $contacto->setNombre( $nombre );
                $contacto->setCorreo($correo);
                $contacto->setMensaje($mensaje);
                $guardar=$contacto->guardarContactenos();
                if($guardar){
                    -
                    echo $guardar=1;
                }else{
                    echo $guardar=0;
                }
            }
          } 

          
?>
