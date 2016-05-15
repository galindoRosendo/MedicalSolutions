<?php 
session_start();
if (isset($_SESSION['user'])) {
	$usuario=$_SESSION['user'];
}
else{
	$usuario="Anonimo";
}

if (isset($_POST['txt_fecha'])) {
	$hora=$_POST['txt_hora'];
	$fecha=$_POST['txt_fecha'];
	$tipoCita=$_POST['tipo-cita'];
	$idCita=0;

	//DBServer
	$servername = "db626441514.db.1and1.com";
	$username = "dbo626441514";
	$password = "password";
	$dbname = "db626441514";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Error de conexion: " . $conn->connect_error);
	} 

	$sql = "INSERT INTO `citas`(`idcitas`, `hora`, `fecha`, `tipoCita`, `idpaciente`) 
			VALUES ($idCita,$hora,$fecha,$tipoCita,".$_SESSION['idpac'].");";

	if ($conn->query($sql) === TRUE) {
	    $message= "Registro Exitoso";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
	}
	else{
		$message="";
	}



?>
<!DOCTYPE html>

<html lang="en">
<head>
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
	<link rel="stylesheet" href="styles.css">
	 <script src="slidebar/js/jquery-1.9.1.min.js"></script>
    <script src="slidebar/js/jquery.slides.js"></script>
	<title>CITAS</title>

</head>
<body>
	<header>

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
	<h2><?php echo $message; ?> </h2>
	<div style="float:none;" class=" col-md-5 center-block no-float top-space text-left" >
		<h1> Cita:</h1>
		<br><br>
		<form method="POST" action="citas.php" >
			<div class="form-group">
				
 		</div>
 		  <p>
 		 <label> Tipo de cita:</label>
 		 <label for="tipo cita;"></label>
 		 <select name="tipo-cita" id="tipo-sangre">	
  
  					<OPTION VALUE="S"> Seleccione </OPTION>
  					<OPTION VALUE="Limpieza Dental"> Limpieza Dental </OPTION>
  					<OPTION VALUE="Endodoncia"> Endodoncia </OPTION>
  					<OPTION VALUE="Cirugia Bucal"> Cirugia Bucal </OPTION>
					<OPTION VALUE="Empastes"> Empastes </OPTION>
 		</select>
 				 <p>
 				 <label> Medico:</label>
 				 <input name="txt_medico" type="text" class="form-control" />
 				 <p>
 				 <label> Hora:</label>
 				 <input name="txt_hora" type="text" placeholder="HH:MM" class="form-control" />
 				 <p>
 				 <label> Fecha:</label>
  				<input name="txt_fecha" type="text" placeholder="AAAA-MM-DD" class="form-control"/>

			<div class="form-group text-right">
				 <input name="Confirmar" type="submit" value="Confirmar" class="btn btn-info" />
			</div>
		</form>
	</div>

	<br><br><br>

	
	<footer><p>Nuevo Laredo Tamaulipas, Mexico Mayo 2016</p></footer>

	
</body>
</html>
<script type="text/javascript" src="js/menu.js"></script>