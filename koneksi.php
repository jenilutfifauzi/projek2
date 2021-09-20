<?php
	class database{

		var $host = "localhost";
		var $username = "root";
		var $password = "";
		var $database = "siwis";
		var $koneksi = "";

		function __construct()
		{
		
			$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
			if (mysqli_connect_error()){
				echo "Koneksi database gagal : ". mysqli_connect_error();
			}
		}
		function tampil_data()
		{
			$data =mysqli_query($this->koneksi,"select*from user");
			while ($row = mysqli_fetch_array($data)){
				$hasil[]= $row;
			}
			return $hasil;
		}
		function tampil_data_masukan()
		{
			$data =mysqli_query($this->koneksi,"select*from masukan");
			while ($row = mysqli_fetch_array($data)){
				$hasil[]= $row;
			}
			return $hasil;
		}
		function tampil_data_gb()
		{
			$data =mysqli_query($this->koneksi,"select*from guestbook");
			while ($row = mysqli_fetch_array($data)){
				$hasil[]= $row;
			}
			return $hasil;
		}
		function tambah_data_user($username,$password,$level_user,$name,$address,$email,$tgl_lahir)
		{
			$password = md5($password); 
			mysqli_query($this->koneksi,"insert into user values ('','$username','$password','$level_user','$name','$address','$email','$tgl_lahir')");
			
		}
		function tambah_data_gb($posted,$name,$email,$address,$city,$message)
		{
			mysqli_query($this->koneksi,"insert into guestbook values ('','$posted','$name','$email','$address','$city','$message')");
		}
		function tampil_edit_data_user($id)
		{
			
			$data = mysqli_query($this->koneksi,"select*from user where id='$id'");
			while($d=mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function tampil_edit_data_gb($id)
		{
			$data = mysqli_query($this->koneksi,"select*from guestbook where id='$id'");
			while($d=mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function edit_data_user($id,$name,$address,$email,$homepage,$username,$password,$level_user)
		{
			mysqli_query($this->koneksi,"update user set name='$name',address='$address',email='$email',homepage='$homepage',username='$username',
			password='$password',level_user='$level_user' where id='$id'");
		}
		function edit_data_user_admin($id,$username,$password,$level_user,$name,$address,$email,$tgl_lahir)
		{
			mysqli_query($this->koneksi,"update user set id='$id',username='$username',password='$password',level_user='$level_user',name='$name',address='$address',email='$email',tgl_lahir='$tgl_lahir' where id='$id'");
		}
		function delete_data($id)
		{
			mysqli_query($this->koneksi,"delete from user where id='$id'");
		}
		function delete_data_gb($id)
		{
			mysqli_query($this->koneksi,"delete from guestbook where id='$id'");
		}

		function login($username,$password)
		{
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$data1 = mysqli_query($this->koneksi,"select * from user where username='$username' and password='$password'");	
			$cek =mysqli_num_rows($data1);
			//cek apakah username dan password ditemukan pada database
			if ($cek > 0)
			{
				$data2 = mysqli_fetch_assoc($data1);
				//cek jika user login sebagai admin
				if ($data2['level_user'] == "administrator")
				{
					$_SESSION['username'] = $username;
					$_SESSION['level_user'] = "administrator";
					header("location:home_admin.php");
				}
				//cek jika user sebagai petugas
				elseif ($data2['level_user'] == "user")
				{
					$_SESSION['username'] = $username;
					$_SESSION['level_user'] = "user";
					header("location:home_user/v_homeuser.php");
				}
			}
			else
			{
				//alihkan ke halaman login kembali
				header("location:login.php?pesan=gagal");
        
			}
		}
		//akhir function login
		function logout()
		{
			unset($_SESSION['username']);
			unset($_SESSION['level_user']);
			session_unset();
			session_destroy();
			header("location:index.php");
		}
		//akhir function logout
		function tampil_user()
		{
			
			$username = $_SESSION['username'];
			$data = mysqli_query($this->koneksi,"select * from user where username='$username'");
			$cek =mysqli_fetch_array($data);
			return $cek;
			
		}
		function tambah_data_masukan($id,$masukan)
		{
			mysqli_query($this->koneksi,"insert into masukan values ('$id','$masukan')");
		}
	}
?>