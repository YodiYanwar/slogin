<?php 
	
	session_start();

	class Database{
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		public $dbname = "slogin";

		function koneksi(){
			mysql_connect($this->host, $this->user, $this->pass);
			mysql_select_db($this->dbname);
		}
	}

	$db = new Database();
	$db->koneksi();


	class User{
		function user_login($user, $pass){
			$akun = mysql_query("SELECT * FROM user WHERE username='$user' AND password='$pass'");
			$baris = mysql_num_rows($akun);
			$pecah = mysql_fetch_array($akun);

			if ($baris > 0) {
				$_SESSION['id'] = $pecah['id'];
				$_SESSION['username'] = $pecah['username'];
				$_SESSION['password'] = $pecah['password'];

				return true;
			} else{
				$error = "Periksa lagi username dan password";
			}
		}

		function user_logout(){
			session_destroy();
		}
	}

	$user = new User();



 ?>