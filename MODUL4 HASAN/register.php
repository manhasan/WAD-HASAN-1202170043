<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register']))
{
    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    if($database->register($nama,$email,$no_hp,$password))
    {
      header('location:login.php');
    }
}

?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Register Form</title>

  </head>
  <body class="d-flex flex-column h-100">

<main role="main" class="flex-shrink-0">
  <div class="container">
    <h1 class="mt-5">Registrasi</h1>
    <hr/>
    <form method="post" action="">
    <div class="form-group row">
      <label for="username" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
      </div>
    </div>

    <div class="form-group row">
      <label for="email" class="col-sm-2 col-form-label">E-Mail</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" placeholder="Email">
      </div>
    </div>
	
	
	 <div class="form-group row">
      <label for="no_hp" class="col-sm-2 col-form-label">No.HP</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No.hp">
      </div>
    </div>

  <div class="form-group row">
    <label for="password" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
  </div>
  
  <div class="form-group row">
    <div class="col-sm-10">
      <button><a href="login.php" class="btn btn-success">Login</a></button>
      <button type="submit" class="btn btn-primary" name="register">Register</button>
    </div>
  </div>
</form>
  </div>
</main>

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">@2020Copyright: WAD Beauty</span>
  </div>
</footer>
</body>
</html>