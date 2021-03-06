<?php 

require 'assets/conexion.php';

$db= conectarDB();

$query = "SELECT * FROM cuentos";

$resultadoConsulta = mysqli_query($db,$query);

//muestra mensaje
//$resultado = $_GET['resultado'];
//$id = $_GET['id'];


?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>admin cuentos</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="crear_contenido.php">Agregar</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="adminMatematicas.php">Gestionar matem??ticas</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="adminCuentos.php">Gestionar cuentos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets/img/Cuentos-infantiles.png')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Cuentos infantiles</h1>
                            <span class="subheading">Cuentos para divertirse y hacer volar la imaginaci??n</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                    <div class="post-preview">
                        
                    
                        <div>
                            <table>
                                <thead>
                                    <!-- <tr>
                                        <th><button class="btn btn-success"><a href="crear_contenido.php">A??adir</a></button></th>
                                    </tr> -->
                                    <tr>
                                        <th>ID: </th>
                                        <th>T??tulo: </th>
                                        <th>Video:</th>
                                        <th>Descripcion:</th>
                                        <th>Autor:</th>
                                    </tr>
                                    
                                </thead>
                                
                                <tbody>
                                    
                                    <?php while($contenido = mysqli_fetch_assoc($resultadoConsulta)): ?>
                                    <tr>
                                        <td> <?php echo $contenido['id'] ?></td>
                                        <td><?php echo $contenido['titulo'] ?></td>
                                        <td><?php echo $contenido['link'] ?></td>
                                        <td><?php echo $contenido['descripcion'] ?></td>
                                        <td><?php echo $contenido['autor'] ?></td>
                                        <td>
                                            <button class="btn btn-warning"><a href="actualizar_contenido_cuento.php?id=<?php echo $contenido['id'] ?>">Actualizar</a></button>
                                            
                                            <form method = "POST" action="assets/crud_contenido/eliminarCuentos.php">

                                            <input type="hidden" name="id" value = "<?php echo $contenido['id'] ?>">
                                            <input type="submit" class="btn btn-danger" value="Eliminar">

                                            </form>
                                            
                                            <!-- <button class="btn btn-danger"><a href="#">Eliminar</a></button> -->
                                        </td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <!-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts ???</a></div> -->
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Aulakids 2021</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>