<?php

error_reporting(0); session_start();
if (isset($_SESSION['email'])) {require "conexion.php";$email =$_SESSION['email'];
$sql="SELECT * FROM users WHERE email='$email'";$result = $conexion->query($sql);$row = $result->fetch_assoc();   
if($row['rol'] == 'user'){echo '<script>window.location = "redtesiji.php";</script>';
}elseif($row['rol'] == 'admin'){echo '<script>window.location = "admin.php";</script>';
}else{
}} 


if($_GET){
    header('location: login.php');
}
session_start();

require 'config.php';
require 'functions.php';

$errores = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $correo = $_POST['correo'];
  $password = $_POST['password'];
  $password = hash('sha512', $password);




  $conexion = conexion($bd_config);
  $statement = $conexion->prepare('SELECT * FROM users WHERE email= :email  AND contra = :pass');
  $statement->execute(
    array(
        ':email' => $correo,
        ':pass' => $password    
    )    
  );


  $resultado = $statement->fetch();

 
    if ($resultado !== false) {
      $_SESSION['email'] = $correo;
      
      header('Location: '.RUTA.'validar.php');
    }else {
      $errores .= '<script>window.alert("Las credenciales que ingresaste son invalidas");</script>';
    }
  
 
 
}
require 'login.php';

?>