<?php
$conn = mysqli_connect("localhost","root","","wad_modul3_hasan");
$result = mysqli_query($conn,"SELECT*FROM wad_modul3_hasan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>EAD EVENT</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


        <div class="header" >
                <div class="header-right">
                  <a href="index.php">Home</a>
                  <a href="form_create.php">Buat Event</a>
                </div>
              </div>


<div class="jumbotron text-center">
<h1>Welcome To EAD EVENTS</h1>
</div>
<h1 align="center"> Daftar Event</h1>
    <table border="0.5" width="600px" align="center">
       <thead>
       <tr>
           <th>Nama Event</th>
           <th>Deskripsi</th>
           <th>Tanggal</th>
		   <th>Action</th>
       </tr>
       </thead>

       <tbody>
<?php
//ambil data di database
$ambildata=mysqli_query($conn, "SELECT * FROM event_table");
while($a=mysqli_fetch_array($ambildata)){
    ?>
       <tr>
           <td><?php echo $a['name'];?></td>
           <td><?php echo $a['deskripsi'];?></td>
           <td><?php echo $a['tanggal'];?></td>
		   <td>
		   <a href="event_details.php"><input type="button" name="Details" id="button" value="Details" class="btn btn-primary"></a>
		   </td>
       </tr>
	   <br>
<?php
}
?>
</tbody>

</table>
</div>

</body>
</html>
