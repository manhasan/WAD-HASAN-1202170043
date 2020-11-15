<?php
include ('config.php');
if (isset($_POST['submit'])){
	$id = $_POST['id'];
	$name = $_POST['name'];
	$deskripsi = $_POST['deskripsi'];
	$gambar = $_POST['gambar'];
	$kategori = $_POST['kategori'];
	$tanggal = $_POST['tanggal'];
	$mulai = $_POST['mulai'];
	$berakhir = $_POST['berakhir'];
	$tempat = $_POST['tempat'];
	$harga = $_POST['harga'];
	$benefit = $_POST['benefit'];
	
	$query = "INSERT into event_table (id, name, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit)
			   values ('$id','$name','$deskripsi','$gambar','$kategori','$tanggal','$mulai','$berakhir','$tempat','$harga','$benefit')";
	$insert = mysqli_query($conn, $query);
}
?>