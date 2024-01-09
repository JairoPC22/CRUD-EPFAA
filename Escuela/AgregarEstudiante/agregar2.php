<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM estudiantes";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estudiante</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    <head>
    <!-- ... otras etiquetas ... -->

    <style>
        .table-spacing {
    margin-top: 30px; /* Esto agrega un margen de 30px, puedes ajustarlo según tu preferencia */
}

        .btn-aqua {
            background-color:  #1b5847 ; /* Este es un color cyan aproximado, puedes ajustarlo */
            border: none;
            color: white; /* Color del texto */
        }

        .btn-spacing {
            margin-right: 15px; /* Establece la separación que desees */
        }
    </style>
</head>

    
</head>

<body style="background-image: url('1366_2000.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; margin: 0; padding: 0;" class="d-flex h-100 text-center text-white bg-dark">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                <nav class="nav nav-masthead justify-content-center float-md-start">
    <!-- Botón para Inicio con el color verde agua y separación -->
    <a href="http://localhost/Escuela/index.php" class="btn btn-aqua btn-spacing">Inicio</a>
    <!-- Botón para Agregar Materia con estilo default -->
</nav>
</div>
            </header>

    <div class="container" >

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

            <div class="col-8 col-md-6 col-xs-4 col-sm-6 col-xl-4 col-lg-4">
                <div class="card text-white bg- mb-3">
                    
                    <div class="card-header text-center">
                        <h2>Agregar Estudiante</h2>
                        <form action="insertar.php" method="POST">

                    </div>
                    <div class="card-body">
                        <form action="">

                            <div class="form-group mt-2">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Apellidos:</label>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control mb-3" name="FechaNacimiento" placeholder="FechaNacimiento">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Telefono:</label>
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Email</label>
                                <input type="text" class="form-control mb-3" name="Email" placeholder="Email">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Grado</label>
                                <input type="text" class="form-control mb-3" name="Grado" placeholder="Grado">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Grupo</label>
                                <input type="text" class="form-control mb-3" name="Grupo" placeholder="Grupo">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Capacitacion</label>
                                <input type="text" class="form-control mb-3" name="Capacitacion" placeholder="Capacitacion">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Domicilio</label>
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Genero</label>
                                <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero">
                            </div>
        
                            <div class="mt-2 d-grid grap-2 mt-3">
                                <input type="submit" value="Agregar" class="btn btn-success">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col">

                            </div>
                            <div class="col">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

        </div>



    </div>

    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>