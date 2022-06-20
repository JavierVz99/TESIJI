<?php
error_reporting(0); session_start();
if (isset($_SESSION['email'])) {require "conexion.php";$email =$_SESSION['email'];
$sql="SELECT * FROM users WHERE email='$email'";$result = $conexion->query($sql);$row = $result->fetch_assoc();   
if($row['rol'] == 'user'){echo '<script>window.location = "redtesiji.php";</script>';
}elseif($row['rol'] == 'admin'){echo '<script>window.location = "admin.php";</script>';
}else{
}} 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/index.css?d=1.0">
    <link rel="shortcut icon" href="static/img/IMG-hgf.ico">
    <title>TESIJI</title>
</head>
<body>
<nav>
    <img src="static/img/IMG-hgf.png" alt="" class="img-fluid">
    <ul class="ul-nav" id="ul_av_me">
    <li><a href="index.php" class="nav-link" ><strong style="color: yellow;">Inicio</strong></a></li>
    <li><a href="about.php" class="nav-link">Sobre nosotros</a></li>
    <li><a href="register.php" class="nav-link">Registro</a></li>
    <li><a href="login.php" class="nav-link">Inicio de sesión</a></li>
    </ul>
    <button class="button-menu" onclick="menu_list()"><i class="bi bi-list"></i></button>
</nav>

<section>
   <div class="container "></div>
   </div>
</section>
<section>
    <div class="row m-5 center">
        <h1 class="title-one">BIENVENIDOS A TESIJI</h1>
    </div>
    <div class="col-md-4">
        <div class="col-md-12">
            <div>
                <img src="static/img/1.png" alt="" class="img-pri">
                <p>El Tecnológico de Estudios Superiores Ixtapaluca no cuenta con una infraestructura para su red, esto nos serviría para poder identificar los espacios y equipos que se podrían tener en cada una de las aulas y oficinas con las que cuenta cada edificio para poder tener una comunicación optima.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <img src="static/img/2.png" alt="" class="img-pri">
                <p>El Tecnológico de Estudios Superiores de Ixtapaluca cuenta con una red limitada en donde no se tiene acceso a internet en todas las zonas, por lo tanto, los estudiantes, así como docentes y administrativos de las diversas carreras que se imparten en dicha institución no pueden realizar sus prácticas de manera correcta y fluida, se tiene la limitante desde los equipos ya que estos no funcionan o no tienen las actualizaciones pertinentes para trabajar en ellas.</p>
            </div>
        </div>
        <div class="col-md-12">
            <div>
                <img src="static/img/3.png" alt="" class="img-pri">
                <p><strong>Objetivo general:</strong>
                    Implementar una red en el TESI con servicios DHCP, DNS, WEB y FTP.
                    <strong>Objetivos específicos: </strong>
                    Configurar servicios básicos en distribución Linux
                    Creación de una aplicación web</p>
            </div>
        </div>
        
    </div>
</section>
<section>
    <div class="row m-5 center">
        <h2 class="titlesub">PLANOS DE LOS EDIFICIOS PARA HACER LA RED</h2>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO H</strong></h3>
    </div>
    <div class="col-md-6 ">
        <div><img src="static/img/h-b.png" alt="" class="img-plane"></div>
        <div><img src="static/img/h-a.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO E</strong></h3>
    </div>
    <div class="col-md-6 ">
        <div><img src="static/img/e-b.png" alt="" class="img-plane"></div>
        <div><img src="static/img/e-a.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO K</strong></h3>
    </div>
    <div class="col-md-6 ">
        <div><img src="static/img/k-b.png" alt="" class="img-plane"></div>
        <div><img src="static/img/k-a.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>CAFETERIA</strong></h3>
    </div>
    <div class="col-md-12 center">
        <div><img src="static/img/c.png" alt="" class="img-plane2"></div>
    </div>
</section>
<section>
    <div class="row">
        <div class="conta">
            <div class="col-md-6">
                <div><img src="static/img/red.png" alt="" class="img-red"></div>
                <div>
                    <h3 class="titletegis">¿Quieres saber más?</h3>
                    <p class="text-info">Si quiere obeservar más sobre como impletamos esta red en el Tecnológico de Estudios Superiores de Ixtapaluca, necesita registrarse para tener acceso.
                        Solo necesita registrarse <strong><a href="register.php" title="Registro en Tesiji" style="color: yellow;">AQUI</a></strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="../static/js/menu.js">
</script>
</body>
</html>