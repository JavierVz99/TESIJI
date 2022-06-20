<?php

error_reporting(0); session_start();
if (isset($_SESSION['email'])) {require "conexion.php";$email =$_SESSION['email'];
$sql="SELECT * FROM users WHERE email='$email'";$result = $conexion->query($sql);$row = $result->fetch_assoc();   
if($row['rol'] == 'user'){echo '<script>window.location = "redtesiji.php";</script>';
}elseif($row['rol'] == 'admin'){echo '<script>window.location = "admin.php";</script>';
}else{
}} 



if($_GET){
    header('Location:register.php');
}
session_start();
  require 'config.php';
  require 'functions.php';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = ucwords($_POST['nombre']);
$correo = limpiarDatos($_POST['correo']);
$usuario = $_POST['user'];
$pass = $_POST['pass'];
$password = limpiarDatos(hash('sha512', $pass));
$rol = 'user';

$errores = '';

    // validar los campos de texto
    if (empty($nombre) || empty($correo) || empty($usuario) || empty($password)) {
      $errores .= '<p style="color:yellow;" class="error">Por favor rellene todos los campos</p>';
    } elseif(strlen($pass) < 6){
        $errores.='<script>window.alert("Tinene que ser mayor a 6 caracteres. Para una constraseña segura coloca Mayusculas, Minusculas, Numeros y caracteres especiales");</script>';
    }elseif(strlen($pass) > 16){
        $errores.='<script>window.alert("Tinene que ser menor a 16 caracteres. Para una constraseña segura coloca Mayusculas, Minusculas, Numeros y caracteres especiales");</script>';
    }elseif(!preg_match('`[a-z]`',$pass)){
        $errores.='<script>window.alert("Tinene que tener al menos una letra minúscula. Para una constraseña segura coloca Mayusculas, Minusculas, Numeros y caracteres especiales");</script>';
    }elseif(!preg_match('`[A-Z]`',$pass)){
        $errores.='<script>window.alert("Tinene que tener al menos una letra Mayuscula. Para una constraseña segura coloca Mayusculas, Minusculas, Numeros y caracteres especiales");</script>';
    }elseif(!preg_match('`[0-9]`',$pass)){
        $errores.='<script>window.alert("Tinene que tener al menos un caracter numerico. Para una constraseña segura coloca Mayusculas, Minusculas, Numeros y caracteres especiales");</script>';
    }
    else {
      // validacion de que el usuario no exista
      $conexion = conexion($bd_config);
      $statement = $conexion->prepare('SELECT * FROM users WHERE email = :corr LIMIT 1');
      $statement->execute(array(
        ':corr' => $correo
      ));
      $resultado = $statement->fetch();

      if ($resultado != False) {
        $errores .= '<script>window.alert("Este correo ya esta registrado");</script>';
      }
    }
 
    require "register.php";
    if ($errores == '') {
      $conexion = conexion($bd_config);
      $statement = $conexion->prepare('INSERT INTO users (nombre, email, usuario, contra, rol) VALUES(:nom, :corr, :user, :pass, :rol)');
      $statement->execute(
        array(
          ':nom' => $nombre,
          ':corr' => $correo,
          ':user' => $usuario,
          ':pass' => $password,
          ':rol' => $rol

        )
      );


      echo '<script>window.alert("Usuario registrado");</script>';
    }
  }


 
?>