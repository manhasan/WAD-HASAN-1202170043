<?php 
session_start();
if(! isset($_SESSION['is_login']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EAD STORE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


        <div class="header" >
                <div class="header-right">
                  <a href="logout.php">Logout</a>
                  <a href="cart.php">Cart</a>
                </div>
              </div>


<div class="jumbotron text-center">
<div class="starter-template">
    <h1>Selamat Datang <?php echo $_SESSION['nama']; ?> di</h1>
</div>
<h1>WAD BEAUTY</h1>
<p>Tersedia SkinCare Murah Tapi Bukan Murahan dan Berkualitas Tinggi.</p> 
</div>
  
<div class="container">
<div class="row">
<div class="col-sm-4">
<div Class="yuja"> 
<img src="yuja.jpg" height="200" width="auto"/> </div>  
<h3>YUCA NIACIN 30 DAYS BLEMISH CARE SERUM  </h3>
<p>RP. 169.000</p>
<p> Produk Terbaru dari Somebymi yang bermanfaat untuk whitening ,blemish-care dan anti wrinkle sangat rekomended 
untuk kulit kering dan kusam bekas jerawat dan flek hitam</p>
<input type="button" name="Add" id="button" value="Add to cart" class="btn btn-primary">
</div>


<div class="container">
<div class="row">
<div class="col-sm-4">
<div Class="snail"> 
<img src="snail.jpg" height="200" width="auto"/> </div>  
<h3>SOMEBYMI SNAIL TRUENNICA MIRACLE REPAIR CREAM </h3>
<p>RP. 180.000</p>
<p> Sebagai pelembab, krim ini dapat memberikan kelembapan menyeluruh dan tahan lama bagi kulit sehingga 
terasa halus,lembab dan kenyal. mencerahkan melembabkan serta mencegah penuaan dan menenangkan kulit yang
iritasi.</p>
<input type="button" name="Add" id="button" value="Add to Cart" class="btn btn-primary">
</div>

<div class="container">
<div class="row">
<div class="col-sm-4">
<div Class="30days"> 
<img src="30days.jpg" height="200" width="auto"/> </div>  
<h3>30 DAYS MIRACLE TONER</h3>
<p>RP. 108.000</p>
<p> Dengan kandungan AHA,BHA,BBC Bekerja secara efektif pada kulit dan membuatnya bersih dan bersinar karena 
mengandung ekstrak pohon teh alami yang secara efektif meningkatkan elastisitas dan menutrisi kulit anda tanpa
iritasi karena tidak mengandung bahan pewarna yang berbahaya </p>
<input type="button" name="Add" id="button" value="Add to Cart" class="btn btn-primary">
</div>



</body>
</html>
