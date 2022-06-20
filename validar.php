<?php session_start();

require 'config.php';
require 'functions.php';

// comprobar session
if (isset($_SESSION['email'])) {
  // validar los datos por privilegio
  $conexion = conexion($bd_config);
  $id = iniciarSession('users', $conexion);
  

 
  if ($id["rol"] == 'admin') {
    header('Location: '.RUTA.'admin.php');
  } elseif ($id['rol'] == 'user') {
    header('Location: '.RUTA.'redtesiji.php');
  } else {
    header('Location: '.RUTA.'loginsig.php');
  }}
?>