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
<body style="background:  #F2F4F4">
	<?php include('navbar.php'); ?>
	<div class="container">
		<div class="row mt-5">
			<div class="col-sm-6 text-center text-lg-left d-md-flex">
				<h4 class="my-md-auto font-primary">Lista de <strong>Ventas</strong></h4>
			</div>
			<div class="col-sm-6 justify-content-center justify-content-lg-end d-flex">
				<p class="my-auto font-primary"><a href="vender.php">Vender ahora</a> <i class="fas fa-chevron-right fa-xs"></i> Mis Ventas</p>
			</div>
		</div>
		<hr>
		
		
	</div>
	<?php include('scripts.php'); ?>
	<script>
		$(document).ready(function() {
			
		});
	</script>
</body>
</html>
<?php 
  }else{
    header('Location: ../../');
  }
?>