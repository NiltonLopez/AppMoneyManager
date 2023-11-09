<?php
  // Asigna los archivos CSS 
  $pageLogo = '../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../assets/css/headerRegistro.css';
  $pageStyleFooter = '../assets/css/footer.css';
  $pageStyles = '../assets/css/registro.css';

  include 'layout/header.php'; 
?>

<br/>
  <div class="text-content">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 8vh;">
      <h1 class="text-center">Regístrate</h1>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 5vh;">
      <h5 class="text-center">Comienza a ser hoy el director de tu propia obra financiera</h5>
    </div>
  </div>
  <form class="row justify-content-center g-3">
    <div class="row justify-content-center g-2">
      <div class="col-6">
        <input type="text" class="form-control" id="inputEmail4" placeholder="Escribe tu nombre" required>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="col-6">
        <input type="email" class="form-control" id="inputPassword4" placeholder="Escribe tu email" required>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="col-6">
        <input type="password" class="form-control" id="inputAddress" placeholder="Escribe tu contraseña" required>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="col-6">
        <input type="password" class="form-control" id="inputAddress2" placeholder="Confirma tu contraseña" required>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="col-6">
        <input type="number" class="form-control" id="inputCity" placeholder="Escribe tu teléfono (Opcional)" required>
      </div>
    </div>
    <div class="row justify-content-center g-2">
      <div class="col-3 d-flex justify-content-end">
        <button type="button" class="btn btn-dark">Comenzar</button>
      </div>
      <div class="col-3 d-flex justify-content-start">
        <a href="login.php" class="btn btn btn-outline-light">Ya tengo cuenta</a>
      </div>
    </div>
  </form>

<br>
<br>
<br>

<?php include './layout/footer.php'; ?>