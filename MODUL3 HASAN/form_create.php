<doctype html>
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
	<h1 style="text-align: center; margin-top: 100px; margin-bottom: 50px">CREATE EVENT</h1>
	
<form action="create.php" method="POST">
<div class="content">
    <table class="table-form" border="0" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td width="20%"><label for="nama"> ID </label></td>
            <td colspan="3"><input name="id" id="id" type="text" class="form"></td>
		</tr>
		<tr>
            <td><label for="name">NAMA</label></td>
            <td><input name="name" id="name" type="text" class="form"></td>
		</tr>
		<tr>
			<td><label for="deskripsi">Deskripsi</label></td>
            <td><input name="deskripsi" id="deskripsi" type="text" class="form"></td>
		</tr>
		<tr>
			<td><label for="gambar">Gambar</label></td>
            <td><input name="gambar" id="gambar" type="text" class="form"></td>
		</tr>
		<tr>
			<td><label for="kategori">Kategori</label></td>
            <td><input name="kategori" id="kategori" type="text" class="form"></td>
		</tr>	
		<tr>
            <td><label>Tanggal</label></td>
            <td><input name="tanggal" id="tanggal" type="date" class="form"></td>
        </tr>
        <tr>
			<td><label for="mulai">Mulai</label></td>
			<td><input name="mulai" id="mulai" type="time" class="form"></td>
        </tr>
		<tr>
            <td><label for="berakhir">Berakhir</label></td>
            <td><input name="berakhir" id="berakhir" type="time" class="form"></td>
		</tr>
		<tr>
            <td><label for="tempat">Tempat</label></td>
            <td><input name="tempat" id="tempat" type="text" class="form"></td>
		</tr>
		<tr>
            <td><label for="harga">Harga</label></td>
            <td><input name="harga" id="harga" type="int" class="form"></td>
		</tr>
		<tr>
            <td><label for="benefit">Benefit</label></td>
            <td><input name="benefit" id="benefit" type="text" class="form"></td>
		</tr>
  
    </table>
	<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</div>			
</form>
</body>
</html>