<?php 
session_start();
if (isset($_SESSION['user'])) {
	$usuario=$_SESSION['user'];
}
else{
	$usuario="Anonimo";
}
if (isset($_POST["txtnombre_reg"])) {
	//Variables
$idPaciente=0;
$nombre=$_POST["txtnombre_reg"];
$apPaterno=$_POST["txtappaterno_reg"];
$apMaterno=$_POST["txtapmaterno_reg"];
$genero=$_POST["Genero"];
$estadoCivil=$_POST["EstadoCivil"];
$sangre=$_POST["tipo-sangre"];
$fechaNac=$_POST["txt_nac"];
$telefono=$_POST["txt_tel"];
$direccion=$_POST["txt_dir"];
$usuario=$_POST["txtusuario_reg"];
$password=$_POST["txtcontraseña_reg"];

$_SESSION["user"]=$usuario;
$_SESSION["password"]=$password;

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

$sql = "INSERT INTO `pacientes`(`idpaciente`, `nombre`, `apPat`, `apMat`, `genero`, `eCivil`, `tipoSangre`, `fechaNacimiento`, `telefono`, `direccion`, `usuario`, `password`) 
		VALUES ($idPaciente,'$nombre','$apPaterno','$apMaterno','$genero','$estadoCivil','$sangre','$fechaNac','$telefono','$direccion','$usuario','$password')";

if ($conn->query($sql) === TRUE) {
    $message= "Registro Exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
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
	<link rel="stylesheet" href="css/styles.css">

<title>Registro</title>
</head>

<body>

	<header>

		<!--Titulo-->
		<div id="titulo" style="text-align: center"><h1>Medical Solutions</h1></div>
	
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

	<div class=" col-md-5 center-block no-float top-space text-left">
		<h1> Registro</h1>
		<br><br>
		<form method="POST" action="registro.php" >
			<div class="form-group">
				<label>Apellido Paterno</label>
				<input name="txtappaterno_reg" type="text" class="form-control"/>

				<label>Apellido Materno</label>
				<input name="txtapmaterno_reg" type="text" class="form-control"/>

				<label>Nombre</label>
				<input name="txtnombre_reg" type="text" class="form-control"/>

				<div class="form-inline">
		 		<label>Genero:</label>
  				<input name="Genero" type="radio" value="F" class="form-control">Femenino</input>
  				
   				<input name="Genero" type="radio" value="M" class="form-control" >Masculino</input>
  				
  				<p><p>
   				<label>Estado Civil::</label>
  				<input name="EstadoCivil" type="radio" value="Soltero" class="form-control" >Soltero</input>
  				
  				 <input name="EstadoCivil" type="radio" value="Casado" class="form-control">Casado</input>
  				
  				 <input name="EstadoCivil" type="radio" value="Viudo" class="form-control">Viudo</input>
 				 
 		</div>
 		  <p>
 		 <label> Tipo de sangre:</label>
 		 <label for="tipo-sangre"></label>
 		 <select name="tipo-sangre" id="tipo-sangre">	
  
  					<OPTION VALUE="S"> Seleccione </OPTION>
					<OPTION VALUE="A"> A+ </OPTION>
					<OPTION VALUE="An"> A- </OPTION>
					<OPTION VALUE="B"> B+ </OPTION>
					<OPTION VALUE="Bn"> B- </OPTION>
					<OPTION VALUE="AB"> AB+ </OPTION>
					<OPTION VALUE="ABn"> AB- </OPTION>
					<OPTION VALUE="O"> O+ </OPTION>
					<OPTION VALUE="On"> O- </OPTION>
 				 </select>
 				 <p>
 				 <label> Fecha de nacimiento:</label>
 				 <input name="txt_nac" type="text" class="form-control" />
 				 <p>
 				 <label> Numero telefonico:</label>
 				 <input name="txt_tel" type="text" class="form-control" />
 				 <p>
 				 <label> Direccion:</label>
  				<input name="txt_dir" type="text" class="form-control"/>

				<label>Usuario</label>
				<input name="txtusuario_reg" type="text" class="form-control"<?php echo "value='$nombre'" ?>/>

				<label>Contraseña</label>
				<input name="txtcontraseña_reg" type="text" class="form-control"/>

				<label>Confirmar contraseña</label>
				<input name="txtcon_contraseña_reg" type="text" class="form-control"/>
				<br>
			</div>
			<div class="form-group text-right">
				 <input name="Guardar" type="submit" value="Guardar" class="btn btn-info" />
				 </form>
			</div>
</body>
</html>
