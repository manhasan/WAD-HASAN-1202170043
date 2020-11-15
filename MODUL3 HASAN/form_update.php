<doctype html>
	<html lang="en">
	<head>
		<title>Form Update</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel= "stylesheet"
			  href="https://cdn.jsdelivr.net/npm/bootsrap@4.5.3/dist/css/bootstrap.min.css"
			  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
			  crossorigin="anonymous">
		
		<?php
			include ('config.php');
			$id_buku = $_GET['id'];
			
			$query = "SELECT * FROM event_table WHERE id='$id'";
			$select = mysqli_query($conn, $query);
			$display = mysqli_fetch_assoc($select);
		?>
	</head>
	
	<body>
	<h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">UPDATE EVENT</h1>
	<div class="container">
		<form action="update.php" method="post">
			<div class="form-group">
				<label>ID</label>
				<input type="text" class="form-control" id="id" name="id"
						value="<?display['id']?>" readonly>
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" class="form-control" id="name" name="name"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" class="form-control" id="deskripsi" name="deskripsi"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Gambar</label>
				<input type="text" class="form-control" id="gambar" name="gambar"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Kategori</label>
				<input type="text" class="form-control" id="kategori" name="kategori"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Tanggal</label>
				<input type="text" class="form-control" id="tanggal" name="tanggal"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Mulai</label>
				<input type="text" class="form-control" id="mulai" name="mulai"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Berakhir</label>
				<input type="text" class="form-control" id="berakhir" name="berakhir"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Tempat</label>
				<input type="text" class="form-control" id="tempat" name="tempat"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Harga</label>
				<input type="text" class="form-control" id="harga" name="harga"
						value="<?display['id']?>">
			</div>
			<div class="form-group">
				<label>Benefit</label>
				<input type="text" class="form-control" id="benefit" name="benefit"
						value="<?display['id']?>">
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	    </form>
	</div>
</body>
</html>