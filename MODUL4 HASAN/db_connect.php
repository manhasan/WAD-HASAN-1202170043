
<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "wad_modul4";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($nama,$email,$no_hp,$password)
	{	
		$insert = mysqli_query($this->koneksi,"insert into user values ('','$nama','$email','$no_hp','$password')");
		return $insert;
	}

	function login($nama,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from user where nama='$nama'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('nama', $nama, time() + (60 * 60 * 24 * 5), '/');
				setcookie('usname', $data_user['usname'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['nama'] = $nama;
			$_SESSION['usname'] = $data_user['usname'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($nama)
	{
		$query = mysqli_query($this->koneksi,"select * from user where nama='$nama'");
		$data_user = $query->fetch_array();
		$_SESSION['nama'] = $nama;
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>