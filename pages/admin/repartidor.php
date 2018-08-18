<?php 
  session_start();
  require '../../config/conexion.php';
  if (isset($_SESSION['loggedIN'])) {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include('head.php'); ?>
</head>
<body style="background: #F2F4F4">
	<?php include('navbar.php'); ?>
	<?php include('../../modal/modalviewrecarga.php'); ?>
	<?php include('../../modal/modalrepartidor.php'); ?>
	<div class="container">
		<div class="row mt-5">
          <div class="col-sm-6 text-center text-lg-left d-md-flex">
            <h4 class="my-auto font-primary">Lista de <strong>Repartidores</strong></h4>
          </div>
          <div class="col-sm-6 text-center text-lg-right">
            <button type="button" class="btn btn-green-secondary" data-toggle="modal" data-target="#ModalRepartidor"><i class="far fa-file fa-sm mr-2"></i> Nuevo Repartidor</button>
          </div>
        </div>
        <hr>
		<div class="row mt-5">
			<div class="col-sm-12">
				<div id="tabRecarga" class="table-responsive"></div>
			</div>
		</div>
		<footer class="footer mt-5">
          <div class="d-sm-flex justify-content-sm-between justify-content-center">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
              Copyright <i class="far fa-copyright"></i>2018 
              <a href="#" target="_blank">SURGAS</a>. Todos los derechos reservados
            </span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
              Desarrollado <i class="fas fa-code text-danger"></i> por Franz Cruz <i class="fas fa-laptop text-danger"></i>
            </span>
          </div>
        </footer>
	</div>
	<?php include('scripts.php'); ?>
	<script>
		$(document).ready(function() {
			$('#tabRecarga').load('../componentes/tablerecarga.php');
		});
	</script>
	<script>
		function obtenDatosChofer(idcho){
			$.ajax({
	 			url: '../../procesos/recarga/datoschofer.php',
	 			type: 'POST',
	 			dataType: 'html',
	 			data: "idcho=" + idcho,
	 			success:function(r){
	 				$('#bodychofer').html(r);
	 			}
    		})
		}
	</script>
</body>
</html>
<?php 
  }else{
    header('Location: ../../');
  } 
?>