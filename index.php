<?php include('db.php'); ?>
<?php include('./includes/header.php');  ?>
<link rel="stylesheet" href="./src/styles.css">



<section>
	<nav class="navbar navbar-light bg-light">
		<div class="container">
			<a class="navbar-brand">UTASK</a>
			<a href="login.php" class="btn btn-outline-success ml-auto mr-2">LogIn</a>
			<a href="sing_up.php" class="btn btn-primary">Sing Up</a>
		</div>
	</nav>
	<?php if (isset($_SESSION['registre'])) {?>
		<div class="alert alert-success text-center" role="alert" >
			Su usuario a sido creado satisfactoriamente. 
		</div>

	<?php } session_unset();?> 
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 text-center main">
				<h1>MANEJA TUS TAREAS CON EFECTIVIDAD</h1>
				<div class="container">
					<div class="row">
						<div class="col-md-2 offset-4">
							<a href="login.php" class="btn btn-outline-success mx-auto btn-block">LogIn</a>
						</div>
						<div class="col-md-2">
							<a href="sing_up.php" class="btn btn-primary mx-auto btn-block">Sing Up</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>



<?php include('./includes/footer.php');  ?>
