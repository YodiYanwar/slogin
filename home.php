<?php 
  include "classes.php";

  if (empty($_SESSION['id'])) {
		echo "<script>alert('Anda harus login dulu')</script>";
		echo "<script>window.location='/slogin'</script>";  	
  }

  if (isset($_GET['aksi'])) {
  	if ($_GET['aksi'] == 'logout') {
  		$user->user_logout();

			echo "<script>alert('Anda telah logout')</script>";
			echo "<script>window.location='/slogin'</script>";  		
  	}
  }

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Selamat Datang <?php echo $_SESSION['username'] ?></h1>
	<div class="container">
		<a href="/slogin/home.php?aksi=logout"><button class="btn btn-lg btn-primary btn-block">Log Out</button></a>
	</div>
</body>
</html>