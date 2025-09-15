<?php
	session_start();

	if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
		header("Location:dashboard.php");
	}

	if (isset($_POST['Login'])) {
		$Username=$_POST['username'];
		$Password=$_POST['password'];

		if ($Username=="susi susanti" && $Password=="123") {
		$_SESSION['username']=$Username; 
		$_SESSION['password']=$Password; 

		header("Location:dashboard.php");
		}else{
			$pesan="
				<div class='alert alert-danger mt-4' role='alert'>
					Username dan Password Salah!
				</div>
			";
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Cookie</title>

	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
	<div class="container-fluid bg-primary-subtle d-flex align-items-center justify-content-center" style="height:100vh">
		<div class="card p-5 px-5 text-center" style="border-radius:15px">
			<h3>LOGIN</h3>
			<?php
			if (isset($pesan)) {
			 	echo "$pesan";
			 } 
			 ?>
			
			<form method="post" action="">
				<input type="text" name="username" class="form-control my-3" placeholder="input username" >
				<input type="password" name="password" class="form-control my-3" placeholder="input password" >
				<button type="submit" name="Login" class="btn btn-primary btn-sm">Login</button>
			</form>
		
	</div>
</div>

</body>
</html>