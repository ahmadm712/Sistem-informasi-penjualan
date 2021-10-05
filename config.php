<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	
	//$host 	= 'localhost'; 
	$host 	= 'remotemysql.com'; 
	$user 	= 'yB2ElNKXXS';  
	$pass 	= 'o6uQDK1hpQ'; 
	$dbname = 'yB2ElNKXXS'; 
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; 
?>

