<?php
//autenticacion
require 'conexion.php';
$db= conectarDB();

$errores = [];
if($_SERVER['REQUEST_METHOD'] === 'POST' ){
  echo "<pre>";
  var_dump($_POST);
  echo "</pre>";

  $usuario = mysqli_real_escape_string($db,$_POST['usuario']);
  $password = mysqli_real_escape_string($db, $_POST['contrasenia']);

  /*if(!$usuario){
    $errores[] = 'el email es incorrecto';
  }

  if(!$password){
    $errores[] = 'el password es obligatorio';
  }*/

  if(empty($errores)){
    $query = "SELECT * FROM usuarios where user = '{$usuario}' ";
    $resultado = mysqli_query($db,$query);
    $query_pass = "SELECT * FROM usuarios where pass = '{$password}' ";
    var_dump($resultado);

    if($resultado->num_rows){
        //revisar si el password es correcto
        $user_db = mysqli_fetch_assoc($resultado);

        $auth = password_verify($password, $user_db['pass']);
        $passBD= $user_db['pass'];
        

        if($password === $passBD){
          //usuario autenticado
          session_start();
          $_SESSION['usuario'] = $usuario['user'];
          $_SESSION['login'] = true;
          header('Location: http://localhost/proyecto%20evaluacion%202/crear_contenido.php');
        } else {
          $errores[] = 'contraseña erronea';
          var_dump($errores);
          //var_dump($user_db);
        }
        //var_dump()

    } 
    else {
      $errores[] = 'El usuario no existe';
      //echo "Error: ".$errores;
      var_dump($errores);
    }

  }


}


 ?>