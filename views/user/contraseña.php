<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/headerUser.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/egresos.css';

  include '../layout/headerUser.php'; 
?>

<!--------------------------------------------------------FORMULARIO------------------------------------------------------->
<br/>
    <h1 class="text-center">CAMBIO DE CONTRASEÑA</h1>
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10">
      <?php
        include '../../controllers/ingresosController.php';

        if ($alert === "success") {
        ?>
          <div class="alert alert-success" role="alert">
            La nueva contraseña ha sido guardado
          </div>
        <?php
        } elseif ($alert === "danger") {
        ?>
          <div class="alert alert-danger" role="alert">
          La nueva contraseña no ha sido guardado
          </div>
        <?php
        } elseif ($alert === "warning") {
          ?>
            <div class="alert alert-warning" role="alert">
              Complete todos los campos
            </div>
          <?php
        } else {
          ?>
            <div class="alert alert-light" role="alert">
             Bienvenido
            </div>
          <?php
        }
      ?>
      <form id="formularioContraseña" method="POST">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="usuario">Nombre de Usuario:</label>
                <input type="text" class="form-control" name="usuario">
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="contraseña">Antigua contraseña:</label>
                <input type="text" class="form-control" name="contraseña">
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
                <label for="nuevacontraseña">Nueva contraseña:</label>
                <input type="text" class="form-control" name="nuevacontraseña">
              </div>
            </div>
            <div class="col-md-6 col-sm-12">
              <div class="form-group">
              <label for="nuevacontraseña2">Confirmar nueva contraseña:</label>
                <input type="text" class="form-control" name="nuevacontraseña2">
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
            </div> 
            <div class="col-md-4 col-sm-12 text-center">
              <button type="submit" class="btn btn-outline-dark" name="btnCambiarContraseña" value="CambiarContraseña">
                Guardar Contraseña
              </button>
            </div>
            <div class="col-md-4">
            </div>
          </div>
        </div>
      </form>
      </div>
      <div class="col-1">
      </div>
    </div>

<br/>
<br/>

<?php include '../layout/footer.php'; ?>

<br/>
<br/>

<?php include '../layout/footer.php'; ?>