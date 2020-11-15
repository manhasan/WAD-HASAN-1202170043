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


</div>
<h1 align="center"> Detail Event</h1>
    <table border="0.5" width="1200px" align="center">
       <thead>
       <tr>
		   <th>ID</th>
           <th>Nama Event</th>
           <th>Deskripsi</th>
           <th>Gambar</th>
		   <th>Kategori</th>
		   <th>Tanggal</th>
		   <th>Mulai</th>
		   <th>Berakhir</th>
		   <th>Tempat</th>
		   <th>Harga</th>
		   <th>Benefit</th>
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
		   <td><?php echo $a['id'];?></td>
           <td><?php echo $a['name'];?></td>
           <td><?php echo $a['deskripsi'];?></td>
		   <td><?php echo $a['gambar'];?></td>
           <td><?php echo $a['kategori'];?></td>
		   <td><?php echo $a['tanggal'];?></td>
		   <td><?php echo $a['mulai'];?></td>
		   <td><?php echo $a['berakhir'];?></td>
		   <td><?php echo $a['tempat'];?></td>
		   <td><?php echo $a['harga'];?></td>
		   <td><?php echo $a['benefit'];?></td>
		   <td>
		   <a href="form_update.php"><input type="button" name="Update" id="button" value="Update" class="btn btn-primary"></a>
		   <a href="delete.php"><input type="button" name="Delete" id="button" value="Delete" class="btn btn-danger"></a>
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
