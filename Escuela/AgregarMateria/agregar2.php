<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM materia";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Materia</title>
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
                        <h2>Agregar Materia</h2>
                        <form action="insertar.php" method="POST">

                    </div>
                    <div class="card-body">
                        <form action="">

                            <div class="form-group mt-2">
                                <label for="">Nombre de la materia:</label>
                                <input type="text" class="form-control mb-3" name="NombreMateria" placeholder="NombreMateria">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Horario:</label>
                                <input type="text" class="form-control mb-3" name="Horario" placeholder="Horario">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Creditos:</label>
                                <input type="int" class="form-control mb-3" name="Creditos" placeholder="Creditos">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Duracion:</label>
                                <input type="text" class="form-control mb-3" name="Duracion" placeholder="Duracion">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Periodo</label>
                                <input type="text" class="form-control mb-3" name="Periodo" placeholder="Periodo">
                            </div>
                            <div class="form-group mt-2">
                                <label for="">Aula</label>
                                <input type="int" class="form-control mb-3" name="Aula" placeholder="Aula">
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