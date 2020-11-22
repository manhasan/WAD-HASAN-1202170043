<?php 
session_start();
include_once('db_connect.php');
$database = new database();

if(isset($_SESSION['is_login']))
{
    header('location:index.php');
}

if(isset($_COOKIE['nama']))
{
  $database->relogin($_COOKIE['nama']);
  header('location:index.php');
}

if(isset($_POST['login']))
{
    $nama = $_POST['nama'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }

    if($database->login($nama,$password,$remember))
    {
      header('location:index.php');
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Login Form</title>

 
  </head>
  <body class="text-center">
    <form class="form-signin" method="post" action="">

  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="nama" class="sr-only">Nama</label>
  <input type="text" id="nama" class="form-control" placeholder="Nama" name="nama" required autofocus>
  
  <label for="password" class="sr-only">Password</label>
  <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
  <div class="checkbox mb-3">
    <label>
      <input type="checkbox" value="remember-me" name="remember"> Remember me
    </label>
  </div>
  <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Sign in</button>
  <button><a href="register.php" class="button btn-primary">Register</a></button>
  <p class="mt-5 mb-3 text-muted">@2020Copyright: WAD Beauty</p>
</form>
</body>
</html>