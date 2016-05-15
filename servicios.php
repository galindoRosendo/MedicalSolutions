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
   
   <title>Servicios</title>
   
   <script src="slidebar/js/jquery-1.9.1.min.js"></script>
    <script src="slidebar/js/jquery.slides.js"></script>

   
</head>
  
   <body bgcolor= pink>
      

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
   <br><br><br>
   

   <input type="checkbox"  id="spoiler1" /> 
   <label for="spoiler1">Limpieza Dental</label>
   <div class="spoiler">
       <p>la limpieza dental consiste en quitar el sarro y manchas que están en los dientes o debajo de las encías. Sólo un profesional acreditado, como un dentista o higienista dental, puede realizar este procedimiento que dura entre 30 y 40 minutos.</p>
       <br/><br/>
       <img style="display:block;margin: 0 auto; width:25em;" src="images/diente1.jpg"/>
   </div>

    <input type="checkbox"  id="spoiler2" /> 
   <label for="spoiler2">Endodoncia</label>
   <div class="spoiler">
       <p> tipo de tratamiento que se realiza en odontología. Consiste en la extirpación de la pulpa dental y el posterior relleno y sellado de la cavidad pulpar con un material inerte.</p>
       <br/><br/>
       <img style="display:block;margin: 0 auto; width:25em" src="images/imagen4.jpg"/>
   </div>

   <input type="checkbox"  id="spoiler3" /> 
   <label for="spoiler3">Cirugia Bucal</label>
   <div class="spoiler">
       <p>La Cirugía Bucal es la especialidad más antigua reconocida dentro de la odontología y se encarga de diagnosticar y tratar quirúrgicamente las enfermedades, traumas y defectos de los dientes, la boca, los maxilares y sus tejidos contiguos tanto en su aspecto funcional como en el estético.</p>
       <br/><br/>
       <img style="display:block;margin: 0 auto; width:25em" src="images/imagen5.jpg"/>
   </div>

   <input type="checkbox"  id="spoiler4" /> 
   <label for="spoiler4">Empastes</label>
   <div class="spoiler">
       <p>El empaste dental es un procedimiento odontológico para la eliminación de una caries. En primer lugar se limpia la cavidad causada por la caries y se realiza un grabado sobre el esmalte y se aplica un adhesivo que servirá para sustentar el material de relleno. Éste se coloca por capas y se endurece mediante la aplicación de una luz halógena. El material de relleno se irá moldeando con el fin de devolver al diente su forma original y, de este modo, recuperar su funcionalidad. El proceso finaliza puliendo el empaste dental para darle brillo.</p>
       <br/><br/>
       <img style="display:block;margin: 0 auto;" src="images/imagen6.jpg"/>
   </div>

      <!--Scrip para aparecer y desaparecer menu-->
  <script src="js/menu.js"></script>
  
   </body>
</html> 