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
	<link rel="stylesheet" href="js/menu.js">
	<title>Medical Solutions</title>
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
	
	<!--Slidebar-->
	<div id="slidebar" class="main">

			<div  class="slides">
				<img src="images/imagen3.jpg">
				<img src="images/imagen2.jpg">
				<img src="images/imagen1.jpg">
			</div>
	</div>

	<section>
		<p>En MedicalSolutions, buscamos facilitar el proceso para realizar su cita o conocer sus medicos, asi como conocer 
			los tratamientos que se ofrecen y  asi poder trabajar desde su hogar.</p>
	</section>
	<br><br>

	<footer><p>Nuevo Laredo Tamaulipas, Mexico Mayo 2016</p></footer>
		
		<!--Script para funciones del slide-->
		<script src="slidebar/js/jquery-1.9.1.min.js"></script>
		<script src="slidebar/js/jquery.slides.js"></script>

		<script>
 
	$(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
 
	</script>
	<!--Scrip para aparecer y desaparecer menu-->
	<script src="js/menu.js"></script>

</body>
</html>