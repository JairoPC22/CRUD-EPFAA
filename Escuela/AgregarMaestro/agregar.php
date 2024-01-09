<?php
include("conexion.php");
$con = conectar();

// Verificar si se realiza una búsqueda
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];
    $sql = "SELECT * FROM maestro WHERE Nombre LIKE '%$search_query%' OR Apellidos LIKE '%$search_query%'";
} else {
    $sql = "SELECT * FROM maestro";
}

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
                    <a href="http://localhost/Escuela/AgregarMaestro/agregar2.php" class="btn btn-secondary">Agregar Maestro</a>
                </nav>
            </div>
        </header>

        <div class="container mt-7">
            <div class="row">
                <!-- Formulario de búsqueda -->
                <form method="GET" action="">
                <input type="text" name="query" placeholder="Buscar nombre o apellidos...">
                <button type="submit" class="btn btn-aqua btn-spacing">Buscar</button>
            </form>

                <table class="table table-spacing">
                    <thead class="table-success table-striped">
                        <tr>
                            <th>IdMaestro</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>FechaNacimiento</th>
                            <th>Domicilio</th>
                            <th>Telefono</th>
                            <th>Email</th>
                            <th>Pago</th>
                            <th>Estudios</th>
                            <th>Horario</th>
                            <th>Materia</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <th><?php echo $row['IdMaestro'] ?></th>
                                <th><?php echo $row['Nombre'] ?></th>
                                <th><?php echo $row['Apellidos'] ?></th>
                                <th><?php echo $row['FechaNacimiento'] ?></th>
                                <th><?php echo $row['Domicilio'] ?></th>
                                <th><?php echo $row['Telefono'] ?></th>
                                <th><?php echo $row['Email'] ?></th>
                                <th><?php echo $row['Pago'] ?></th>
                                <th><?php echo $row['Estudios'] ?></th>
                                <th><?php echo $row['Horario'] ?></th>
                                <th><?php echo $row['Materia'] ?></th>
                                <th><a href="actualizar.php?id=<?php echo $row['IdMaestro'] ?>" class="btn btn-info">Editar</a></th>
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
