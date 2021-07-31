<?php 

	@ob_start();
	session_start();

	if(!empty($_SESSION['admin'])){
		require 'config.php';
		include $view;
		$lihat = new view($config);
		$toko = $lihat -> toko();
		//  admin
			include 'admin/template/header.php';
			include 'admin/template/sidebar.php';
				if(!empty($_GET['page'])){
					include 'admin/module/'.$_GET['page'].'/index.php';
				}else{
					include 'admin/template/home.php';
				}
			include 'admin/template/footer.php';
		// end admin
	}else{
		echo '<script>window.location="login.php";</script>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
</body>
</html>

