<?php 
session_start();
if (isset($_SESSION['user'])) {
	$usuario=$_SESSION['user'];
}
else{
	$usuario="Anonimo";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main2.css">
	<link rel="stylesheet" href="menu/css/estilos3.css">
	<link rel="stylesheet" href="menu/css/fonts.css">
	<link rel="stylesheet" href="menu/js/menu.js">
	<link rel="stylesheet" href="slidebar/css/estilos2.css">
	<link rel="stylesheet" href="slidebar/css/fonts.css">
	<title>Agenda</title>
</head>

<body>

	<header>
		
		<!--Logo-->
		<div><img class="logo" src="images/logo.png" alt=""></div>
	
	<!--MENU-->

		<div  id="mostrar_menu" class="menu_bar">
			<a href="#" class="bt_menu"><span class="icon-menu"></span>Menu</a>
		</div>
		<nav id="ocultar_menu" >
			<ul>
				<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="servicios.php"><span class="icon-heart"></span>Servicios Medicos</a></li>
				<li><a href="infopaciente.php"><span class="icon-profile"></span>Info. Paciente</a></li>
				<li><a href="citas.php"><span class="icon-folder-open"></span>Citas</a></li>
				<li><a href="agenda.php"><span class="icon-address-book"></span>Agenda</a></li>
				<li><a href="pagos.php"><span class="icon-coin-dollar"></span>Pagos</a></li>
				<li><a href="login.php"><span class="icon-users"></span>Login</a></li>
				<li><a href="#"><span class="icon-users"></span><?php echo $usuario ?></a></li>
			</ul>
		</nav>
		
	</header>
	
</body>
</html>