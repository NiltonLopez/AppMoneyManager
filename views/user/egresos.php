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
<br/>
    <section class="content">
    <h1 class="text-center">REGISTRO DE GASTOS</h1>
    <div class="row">
      <div class="col-1">
      </div>
      <div class="col-10">
      <form id="formularioEgresos" method="post">
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="concepto">Concepto:</label>
                <input type="text" class="form-control" id="concepto" placeholder="Ejemplo: Hamburguesa" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="monto">Monto:</label>
                <input type="number" class="form-control" id="concepto" placeholder="Ejemplo: $0" required>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" class="form-control" id="fecha" required>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
              <label for="categoria">Categoría:</label>
                <select class="form-control" id="categoria">
                    <option selected>Seleccionar</option>
                    <option value="alimentacion">Alimentación</option>
                    <option value="transporte">Transporte</option>
                    <option value="entretenimiento">Entretenimiento</option>
                    <option value="otros">Otros</option>
                </select>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
              <input type="submit"  class="btn btn-outline-dark" id="btnEnviar" value="Registrar Gasto"/>
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
    </section>
<br>
<br>
<?php include '../layout/footer.php'; ?>