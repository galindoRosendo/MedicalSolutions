<?php 
session_start();
if (isset($_SESSION['user'])) {
	$usuario=$_SESSION['user'];

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

$sql = "SELECT *
		FROM pacientes
		WHERE usuario='$usuario';";

if ($result=$conn->query($sql)) {
	$row=$result->fetch_assoc();
    $usuario=$_SESSION["user"];
    
} else {
    echo "Error: " . $result . "<br>" . $conn->error;
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
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main2.css">
	<link rel="stylesheet" href="menu/css/estilos3.css">
	<link rel="stylesheet" href="menu/css/fonts.css">
	<link rel="stylesheet" href="menu/js/menu.js">
	<link rel="stylesheet" href="slidebar/css/estilos2.css">
	<link rel="stylesheet" href="slidebar/css/fonts.css">
	<link rel="stylesheet" href="js/menu.js">
	<script src="slidebar/js/jquery-1.9.1.min.js"></script>
    <script src="slidebar/js/jquery.slides.js"></script>
     <!--<style type="text/css">
    	.table{
    		width: 60%;
    		float: none;
    	}
    </style>-->

<title>Info. Paciente</title>
</head>

<body>
<header>	
		<!--Logo-->
		<div><img class="logo" src="images/logo.png" alt=""></div>
	<!--MENU-->

		<div id="mostrar_menu" class="menu_bar">
			<a href="#" class="bt_menu"><span class="icon-menu"></span>Menu</a>
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
				<li><a href="#"><span class="icon-users"></span><?php echo $usuario ?></a></li>
			</ul>
		</nav>
</header>
		<div style="float:none;" class=" col-md-5 center-block no-float top-space text-left">
		<table  class="table table-striped">

			<?php 
			
				$renglon="
				<tr>
				 	<td>Nombre</td>
				 	<td>".$row['nombre']."</td>
				 </tr>
				 <tr>
				 	<td>Apellido Paterno</td>
				 	<td>".$row['apPat']."</td>
				 </tr>
				 <tr>
				 	<td>Apellido Materno</td>
				 	<td>".$row['apMat']."</td>
				 </tr>
				 <tr>
				 	<td>Genero</td>
				 	<td>".$row['genero']."</td>
				 </tr>
				 <tr>
				 	<td>Sangre</td>
				 	<td>".$row['eCivil']."</td>
				 </tr>
				 <tr>
				 	<td>Fecha Nacimiento</td>
				 	<td>".$row['tipoSangre']."</td>
				 </tr>
				 <tr>
				 	<td>Telefono</td>
				 	<td>".$row['fechaNacimiento']."</td>
				 </tr>
				 <tr>
				 	<td>Direccion</td>
				 	<td>".$row['telefono']."</td>
				 </tr>";
			
			echo $renglon;

		 ?>

		</table>
		</div>
		

</body>
<script src="js/menu.js"></script>
</html>
