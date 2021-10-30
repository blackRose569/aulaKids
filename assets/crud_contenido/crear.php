<?php 
require '../conexion.php';

$db= conectarDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    echo "<pre>";
    var_dump($_POST);
    echo "</pre>";

    $titulo = $_POST['titulo'];
    $nuevoContenido = $_POST['iframe'];
    $tablaDestino = $_POST['campo_select_append'];
    $descripcion = $_POST['descripcion'];
    $autor = $_POST['autor'];

    $insert = "INSERT INTO $tablaDestino (id, titulo, link, descripcion, autor) values('', '$titulo', '$nuevoContenido', '$descripcion', '$autor') ";

    $resultado = mysqli_query($db,$insert);

    if($resultado){
        echo "Insertado correctamente";
        sleep(2);
        if($tablaDestino === 'matematicas'){
            header('Location: /proyecto%20evaluacion%202/adminMatematicas.php');
        }else{
            header('Location: /proyecto%20evaluacion%202/adminCuentos.php');
        }
        
    }
    else {
        echo "Error".$insert;
    
    }

}

?>