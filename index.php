<?php 
  include "classes.php";

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">

      <form method="POST" class="form-signin">
        <h2 class="form-signin-heading">Silakan Login</h2>
        <label><?php echo $error ?></label>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus name="user">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="pass">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Ingat Saya
          </label>
        </div>
        <button class="btn btn-lg btn-outline-primary btn-block" type="submit" name="login">Login</button>
      </form>

      <?php 
        if (isset($_POST['login'])) {
          $coba_login = $user->user_login($_POST['user'], $_POST['pass']);

          if ($coba_login) {
            echo "<script>window.location='home.php'</script>";
          } else{
            echo "<script>alert('Login Gagal')</script>";
            echo "<script>window.location='index.php'</script>";
          }
        }

       ?>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>