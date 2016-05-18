<?php 
session_start();
if ($_POST["txtusuario"]) {
	$usuario=$_POST["txtusuario"];
	$password=$_POST["txtcontrasella"];

	$_SESSION["user"]=$usuario;

//DBServer
$servername = "db626441514.db.1and1.com";
$username = "dbo626441514";
$passworddb = "password";
$dbname = "db626441514";

// Create connection
$conn = mysqli_connect($servername, $username, $passworddb, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Error de conexion: " . $conn->connect_error);
} 

$sql = "SELECT usuario, password, idpaciente
		FROM pacientes
		WHERE usuario='$usuario' and password='$password';";

if ($result=$conn->query($sql)) {
	$row=$result->fetch_assoc();
	$_SESSION['idpac'] = $row['idpaciente'];
    $_SESSION["user"]= $row['usuario'];
    if ($usuario=="GalindoRosendo") {
    	$_SESSION['admin']=true;
    }
    else{
    	$_SESSION['admin']=false;
    }
    $message = "Bienvenido ".$_SESSION['user'];
    
} else {
    $message= "Error al iniciar sesion";
}
$conn->close();
}
else{
	$usuario="Anonimo";
}

 ?>
<!DOCTYPE html >
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
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
	<link rel="stylesheet" href="css/styles.css">
	 <script src="slidebar/js/jquery-1.9.1.min.js"></script>
    <script src="slidebar/js/jquery.slides.js"></script>
<title>Login</title>
</head>

<body>

	<header>

		<!--Titulo-->
		<div id="titulo" style="text-align: center"><h1>Medical Solutions</h1></div>
	
	<!--MENU-->

		<div id="mostrar_menu" class="menu_bar">
			<a href="" class="bt_menu"><span class="icon-menu"></span>Menu</a>
		</div>
		<nav id="ocultar_menu">
			<ul>
				<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
				<li><a href="servicios.php"><span class="icon-heart"></span>Servicios Medicos</a></li>
				<li><a href="infopaciente.php"><span class="icon-profile"></span>Info. Paciente</a></li>
				<li><a href="citas.php"><span class="icon-folder-open"></span>Citas</a></li>
				<li><a href="agenda.php"><span class="icon-address-book"></span>Agenda</a></li>
				<li><a href="pagos.php"><span class="icon-coin-dollar"></span>Pagos</a></li>
				<li><a href="login.php"><span class="icon-users"></span>Login</a></li>
				<li><a href="#"><span class="icon-users"></span><?php echo $usuario; ?></a></li>
			</ul>
		</nav>
		
	</header>


	<div id="login" class="col-md-5 center-block no-float top-space text-left">
		<h1> Login</h1>
		<h2> <?php echo $message; ?> </h2>
		<br><br>
		<form method="POST" action="login.php" >
			<div class="form-group">
				<label>Usuario</label>
				<input name="txtusuario" type="text" class="form-control"/>
				<br>

				<label>Contraseña</label>
				<input name="txtcontrasella" type="password" class="form-control"/>
			</div>
			<div class="form-group text-right">
				 <input name="Guardar" type="submit" value="Iniciar" class="btn btn-info" />
			</div>
			
			
		</form>
		<form method="POST" action="logout.php" >
			<div class="form-group text-right">
				 <input name="salir" type="submit" value="Salir" class="btn btn-info" />
			</div>

		</form>
	</div>

	<div class="centrar_registro">
		<p style="text-align:center">Si aun no cuentas con tu usuario, Registrate</p>

			<div class="form-group text-center">
				<a href="registro.php">
				 <input name="Registrar" type="submit" value="Registrar" class="btn btn-info" />
				</a>
			</div>
	</div>

</body>
	<!--Scrip para aparecer y desaparecer menu-->
		<script src="js/menu.js"></script>
</html>
