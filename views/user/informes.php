<?php
  // Asigna los archivos CSS 
  $pageLogo = '../../assets/img/logos/LogoIndex.png';
  $pageStyleBoots = '../../assets/css/bootstrap/bootstrap.min.css';
  $pageStyleHeader = '../../assets/css/headerUser.css';
  $pageStyleFooter = '../../assets/css/footer.css';
  $pageStyles = '../../assets/css/reportes.css';

  include '../layout/headerUser.php'; 
?>

<br>
<br>
        <div class="d-flex justify-content-center">
            <h1 class="text-center">TUS REPORTES FINANCIEROS</h1>
        </div>

        <!--Cuerpo: Contiene la discriminación de los gastos-->
        <div class="container mt-4">
            <h1>Reporte del mes de Septiembre:</h1>
            <br>

            <!-- Resumen de gastos totales -->
            <div class="row">
                <div id="hola" class="col-md-8">
                    <h3>Gastos totales en alimentación</h3>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">100%</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h3>Gasto más alto</h3>
                    <p>Has consumido la totalidad de tu presupuesto para alimentación</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div id="hola" class="col-md-8">
                    <h3>Gastos totales en ropa</h3>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="85">85%</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h3>¡Por poco!</h3>
                    <p>Este mes ahorraste el 15% de to presupuesto para ropa</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div id="hola" class="col-md-8">
                    <h3>Gastos totales en transporte</h3>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">75%</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h3>¡Lo hiciste bien!</h3>
                    <p>Este mes ahorraste el 25% de to presupuesto para ropa</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div id="hola" class="col-md-8">
                    <h3>Gastos totales en plataformas de entretenimiento</h3>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">35%</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h3>Gasto más bajo</h3>
                    <p>Lo hiciste bien, pero podrías mejorar</p>
                </div>
            </div>
            <br>

            <div class="row">
                <div id="hola" class="col-md-8">
                    <h3>Duedas totales</h3>
                    
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <h3>¡Bien!</h3>
                    <p>Actualmente no tienes deudas pendientes</p>
                </div>
            </div>
            <br>

            <!-- Gráfico de porcentajes totales de gastos -->
            <div class="text-center">
                <h3>Gráfico de Gastos</h3>
                <img src="../../assets/img/reportes/Grafico.png">
                
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

<?php include '../layout/footer.php'; ?>