<?php
session_start();
if (!isset($_SESSION['email'])) {
	echo '
    <script>
	alert("Necesita iniciar sesion para tener acceso a la plataforma");
	window.location = "login.php";
	</script>';
	session_destroy();
	die();
}
include_once 'conexion.php';
$use = $_SESSION['email'];
$sql = "SELECT * FROM users where email= '$use' ";
$result = $conexion->query($sql);
$row = $result->fetch_assoc();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static/css/redtesiji.css?d=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="static/img/IMG-hgf.ico">
    <title>Red TESIJI</title>
</head>
<body>
<nav>
    <img src="static/img/IMG-hgf.png" alt="" class="img-fluid">
    <ul class="ul-nav" id="ul_av_me">
    <li><a href="redtesiji.php" class="nav-link" ><strong style="color: yellow;">Red</strong></a></li>
    <li><a href="sigout.php" class="nav-link">Cerrar sesión</a></li>
    </ul>
    <button class="button-menu" onclick="menu_list()"><i class="bi bi-list"></i></button>
</nav>

<section>
   <div class="container "></div>
   </div>
</section>
<section>
    <div class="row m-5 center">
        <h1 class="title-one">BIENVENIDO (A) <?php echo strtoupper($row['nombre']);?></h1>
    </div>
    
</section>
<section>
    <div class="row m-5 center">
        <h2 class="titlesub">Topológia fisica de los edificios del TESI</h2>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO H</strong></h3>
    </div>
    <div class="col-md-12 ">
        <div><img src="static/img/hto.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO E</strong></h3>
    </div>
    <div class="col-md-12 ">
        <div><img src="static/img/eto.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>EDIFICIO K</strong></h3>
    </div>
    <div class="col-md-12 ">
        <div><img src="static/img/klo.png" alt="" class="img-plane"></div>
    </div>
    <div class="row m-5 center">
        <h3 class="titlesub"><strong>CAFETERIA</strong></h3>
    </div>
    <div class="col-md-12 center">
        <div><img src="static/img/cafe.png" alt="" class="img-plane2"></div>
    </div>
</section>

<script src="../static/js/menu.js">
</script>
</body>
</html>