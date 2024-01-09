<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM estudiantes";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    <head>
        <!-- ... Otras etiquetas ... -->

        <style>
            .table-spacing {
                margin-top: 30px;
            }

            .btn-aqua {
                background-color: #1b5847;
                border: none;
                color: white;
            }

            .btn-spacing {
                margin-right: 15px;
            }
        </style>
    </head>

<body style="background-image: url('1366_2000.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat; background-attachment: fixed; min-height: 100vh; margin: 0; padding: 0;" class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <nav class="nav nav-masthead justify-content-center float-md-start">
                    <!-- Botón para Inicio con el color verde agua y separación -->
                    <a href="http://localhost/Escuela/index.php" class="btn btn-aqua btn-spacing">Inicio</a>
                    <!-- Botón para Agregar Materia con estilo default -->
                    <a href="http://localhost/Escuela/AgregarEstudiante/agregar2.php" class="btn btn-secondary">Agregar Alumno</a>
                </nav>
            </div>
        </header>

        <div class="container mt-7">
            <!-- Agrega el formulario de búsqueda aquí -->
            <form method="GET" action="">
                <input type="text" name="query" placeholder="Buscar nombre o apellido...">
                <button type="submit" class="btn btn-aqua btn-spacing">Buscar</button>
            </form>

            <div class="row">
                <table class="table table-spacing">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>IdEstudiante</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Fecha de Nacimiento</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Grado</th>
                            <th>Grupo</th>
                            <th>Capacitacion</th>
                            <th>Domicilio</th>
                            <th>Genero</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        if (isset($_GET['query'])) {
                            $search_query = $_GET['query'];
                            $sql = "SELECT * FROM estudiantes WHERE Nombre LIKE '%$search_query%' OR Apellidos LIKE '%$search_query%'";
                            $query = mysqli_query($con, $sql);
                        }

                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['IdEstudiante'] ?></th>
                                <th><?php echo $row['Nombre'] ?></th>
                                <th><?php echo $row['Apellidos'] ?></th>
                                <th><?php echo $row['FechaNacimiento'] ?></th>
                                <th><?php echo $row['Telefono'] ?></th>
                                <th><?php echo $row['Email'] ?></th>
                                <th><?php echo $row['Grado'] ?></th>
                                <th><?php echo $row['Grupo'] ?></th>
                                <th><?php echo $row['Capacitacion'] ?></th>
                                <th><?php echo $row['Domicilio'] ?></th>
                                <th><?php echo $row['Genero'] ?></th>

                                <th><a href="actualizar.php?id=<?php echo $row['IdEstudiante'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="delete.php?id=<?php echo $row['IdEstudiante'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
