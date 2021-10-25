<?php 
require '../conexion.php';
$db = conectarDB();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $id = $_POST['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if($id){
        $delete = "DELETE FROM contenido WHERE id = ${id}";
        $resultado = mysqli_query($db, $delete);

        if($resultado){
            header('Location: /proyecto%20evaluacion%202/home.php');
        }
    }
}


?>