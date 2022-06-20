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
    <link rel="stylesheet" href="static/css/register.css?d=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="static/img/IMG-hgf.ico">
 
    <title>Registro para acceso</title>
</head>
<body>
<nav>
    <img src="static/img/IMG-hgf.png" alt="" class="img-fluid">
    <ul class="ul-nav" id="ul_av_me">
    <li><a href="index.php" class="nav-link" >Inicio</a></li>
    <li><a href="about.php" class="nav-link">Sobre nosotros</a></li>
    <li><a href="register.php" class="nav-link" ><strong style="color: yellow;">Registro</strong></a></li>
    <li><a href="login.php" class="nav-link">Inicio de sesión</a></li>
    </ul>
    <button class="button-menu" onclick="menu_list()"><i class="bi bi-list"></i></button>
</nav>

<section>
  <div class="contar"></div>
</section>
<section>
    <div class="m-5 center">
        <form action="registerus.php" method="POST" enctype="application/x-www-form-urlencoded" class="form_re" autocomplete="nope">
      
             <label for="nombre">Escriba su nombre completo *: </label>
             <input type="text" name="nombre" id="" required autocomplete="nope">
             <label for="nombre">Escriba su correo electronico *: </label>
             <input type="email" name="correo" id="" required autocomplete="nope">
             <label for="nombre">Escriba un usuario *: </label>
             <input type="text" name="user" id="" required autocomplete="nope">
             <label for="nombre">Escriba su contraseña *: </label>
             <input type="password" name="pass" id="" required autocomplete="nope">
             <input type="submit" value="CONTINUAR">
            <p><a href="login.php" class="theare" title="Inicio de sesión">¿Ya tienes cuenta?</a></p>
            <?php if (!empty($errores)) : ?>
       
       <?php echo $errores; ?>

       <?php endif; ?>
        </form>
    </div>
</section>

<script src="../static/js/menu.js">
</script>
</body>
</html>