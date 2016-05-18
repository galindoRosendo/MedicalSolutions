<?php 
session_start();
if (isset($_SESSION['user'])) {
	$usuario=$_SESSION['user'];
	$idpac=$_SESSION['idpac'];

	
	
	function patient(){
		$servername = "db626441514.db.1and1.com";
		$username = "dbo626441514";
		$password = "password";
		$dbname = "db626441514";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
	    die("Error de conexion: " . $conn->connect_error);
		} 

		$sql = "SELECT *
				FROM citas
				WHERE idpaciente='$idpac' and estado='A';";

		if ($result=$conn->query($sql)) {
			$all=$result->fetch_assoc();
		    $usuario=$_SESSION["user"];
		    
		} else {
		    echo "Error: " . $result . "<br>" . $conn->error;
		}
		$conn->close();
		return $all;
	}
	function admin(){
		$servername = "db626441514.db.1and1.com";
		$username = "dbo626441514";
		$password = "password";
		$dbname = "db626441514";

		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
	    die("Error de conexion: " . $conn->connect_error);
		} 

		$sql = "SELECT *
				FROM citas;";



		if ($result=$conn->query($sql)) {
			$all=$result->fetch_assoc();
		    $usuario=$_SESSION["user"];
		    
		} else {
		    echo "Error: " . $result . "<br>" . $conn->error;
		}
		$conn->close();
		return $all;
	}

	if ($_SESSION['admin']==true) {
		$citas = admin();
		echo "admin".var_dump($citas);

	}
	else{
		$citas = patient();
		echo "patient".var_dump($citas);
	}

	
	
	}
else{
	$usuario="Anonimo";
}
//SELECT *
		//FROM citas
		//WHERE usuario='$usuario' and estado='A';




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
	<h2><?php echo "Citas de ".$usuario; ?> </h2>
	<table class="table table-striped">
		<?php 
			$headT = array('No de cita','Hora','Fecha','Tipo de Cita');
			$salida="";
			for ($i=0; $i <count($headT) ; $i++) { 
				$salida+="<th>".$headT[$i]."</th>";
			}
			for ($i=0; $i <count($citas) ; $i++){
				$salida="
				<tr>
				 	<td>".$citas['idcitas']."</td>
				 	<td>".$citas['hora']."</td>
				 	<td>".$citas['fecha']."</td>
				 	<td>".$citas['tipoCita']."</td>
				 </tr>";
				 				 
			}
				
			echo $salida;

		 ?>


	</table>

</body>
</html>