<?php

date_default_timezone_set("Asia/Jakarta");
error_reporting(0);

	
	//$host 	= 'localhost'; 
	$host 	= 'remotemysql.com'; 
	$user 	= 'R5jblcCQ9H';  
	$pass 	= 'OnmSzYYu0o'; 
	$dbname = 'R5jblcCQ9H'; 
	
	try{
		$config = new PDO("mysql:host=$host;dbname=$dbname;", $user,$pass);
		
	}catch(PDOException $e){
		echo 'KONEKSI GAGAL' .$e -> getMessage();
	}
	
	$view = 'fungsi/view/view.php'; 
?>

