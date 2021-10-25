<?php 
require '../conexion.php';

$db= conectarDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    $nuevoContenido = $_POST['iframe'];

    $insert = "INSERT INTO contenido (id, titulo, link) values('', '$titulo', '$nuevoContenido') ";

    $resultado = mysqli_query($db,$insert);

    if($resultado){
        echo "Insertado correctamente";
    }
    else {
        echo "Error".$insert;
    
    }

}

?>