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
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/about.css?d=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="static/img/IMG-hgf.ico">
    <title>Sobre nosotros</title>
</head>
<body>
<nav>
    <img src="static/img/IMG-hgf.png" alt="" class="img-fluid">
    <ul class="ul-nav" id="ul_av_me">
    <li><a href="index.php" class="nav-link" >Inicio</a></li>
    <li><a href="about.php" class="nav-link"><strong style="color: yellow;">Sobre nosotros</strong></a></li>
    <li><a href="register.php" class="nav-link" >Registro</a></li>
    <li><a href="login.php" class="nav-link">Inicio de sesión</a></li>
    </ul>
    <button class="button-menu" onclick="menu_list()"><i class="bi bi-list"></i></button>
</nav>

<section>
  <div class="contar"></div>
</section>
<section>
    <div class="row m-5 center">
        <div>
            <h1 class="title-one">Resumen</h1>
        </div>
    </div>
    <div class="row m-5 center">
        <div>
            <p class="resum">El presente proyecto abarca desde la elaboración de planos de diversos edificios hasta los cálculos y documentación de la instalación de una red, en donde se parte del supuesto que la red está dirigida al Tecnológico de Estudios Superiores de Ixtapaluca.</p>
        </div>
    </div>
    <div class="row m-5 center">
        <div>
            <p class="resum">Las metodologías aplicadas en la red fueron la metodología de árbol para la física y metodología de bus para la lógica, los datos recopilados para la creación de los edificios se recopilaron de forma personal y en cuanto a los cálculos con ayuda de docentes y personas capacitadas en el área.</p>
        </div>
    </div>
</section>
<section>
    <div class="col-md-6 center">
        <div>
            <figure>
                <img src="static/img/iss.png" alt="" class="perfil">
                <figcaption style="text-align: center;">Rangel Gavia Israel</figcaption>
            </figure>
        </div>
        <div>
            <figure>
                <img src="static/img/jaa.png" alt="" class="perfil">
                <figcaption style="text-align: center;">Vargas Zamudio Javier</figcaption>
            </figure>
        </div>
    </div>
</section>


<script src="../static/js/menu.js">
</script>
</body>
</html>