<?php
  require 'conexion.php';
  $db = conectarDB();
  var_dump($db);

  $usuario = $_POST['usuario'];
  $password = $_POST['password'];

  //hasheo-encriptacion
  //$passwordHash = password_hash($password, PASSWORD_BCRYPT);

  $sql = "INSERT INTO usuarios (id, user, pass) VALUES ('', '$usuario', '$password')";

  $resultado = mysqli_query($db,$sql);

  if($resultado){
    echo "Insertado correctamente";
  }
  else {
    echo "Error".$sql;
  }

  // $usuario = $mysqli->real_escape_string($_POST['usuario']);
  // $password = $mysqli->real_escape_string($_POST['password']);
  //
  // $sql = "INSERT INTO usuarios (id, user, pass, last_login) VALUES ('1', '$usuario', '$password','')";
	// echo $sql;
	// $resultado = $mysqli->query($sql);
  //
	// if($resultado>0){
	// 	echo 'REGISTRO AGREGADO';
  //
	// 	} else {
	// 	echo 'ERROR AL AGREGAR REGISTRO';
	// }
  //
	// echo "<br/><a href='../view/index.php' class='btn btn-primary'>Regresar</a>";


 ?>