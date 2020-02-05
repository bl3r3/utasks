<?php include('db.php'); ?>
<?php include('./includes/header.php');  ?>


<link rel="stylesheet" href="./src/styles.css">

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-3 card card-body mt-2">
				<form action="controller_registre.php" method="POST">
					<div class="form-group">
						<label for="exampleInputEmail1">Full name</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="full_name">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Email</label>
						<input type="email" class="form-control" id="" name="email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="" name="password">
					</div>
					<button type="submit" class="btn btn-primary" name="send">Submit</button>
				</form>
			</div>
		</div>
	</div>
</section>



<?php include('./includes/footer.php');  ?>
