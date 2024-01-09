<?php 
    include("conexion.php");
    $con = conectar();

    $id = $_GET['id'];

    $sql = "SELECT * FROM maestro WHERE IdMaestro='$id'";
    $query = mysqli_query($con, $sql);

    $row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Maestro</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
</head>

<body background="1366_2000.jpg">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-8 col-md-6 col-xs-4 col-sm-6 col-xl-4 col-lg-4 mx-auto">
                <div class="card text-white bg- mb-3">
                    <div class="card-header text-center">
                        <h2>Editar Maestro</h2>
                    </div>
                    <div class="card-body">
                        <form action="update.php" method="POST">
                            <input type="hidden" name="IdMaestro" value="<?php echo $row['IdMaestro'] ?>">

                            <div class="form-group mt-2">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'] ?>">
                                </div>
                                <div class="form-group mt-2">
                                <label for="">Apellidos:</label>
                                <input type="text" class="form-control mb-3" name="Apellidos" placeholder="Apellidos" value="<?php echo $row['Apellidos']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Fecha de Nacimiento:</label>
                                <input type="date" class="form-control mb-3" name="FechaNacimiento" placeholder="FechaNacimiento"value="<?php echo $row['FechaNacimiento']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Domicilio:</label>
                                <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio"value="<?php echo $row['Domicilio']  ?>">
</div>
                            <div class="form-group mt-2">
                                <label for="">Telefono</label>
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono"value="<?php echo $row['Telefono']  ?>">
                                </div>
                            <div class="form-group mt-2">
                            <label for="">Email</label>
                            <input type="email" class="form-control mb-3" name="Email" placeholder="Email"value="<?php echo $row['Email']  ?>">
                            <div class="form-group mt-2">
                                <label for="">Pago:</label>
                                <input type="int" class="form-control mb-3" name="Pago" placeholder="Pago"value="<?php echo $row['Pago']  ?>">
                                </div><div class="form-group mt-2">
                                <label for="">Estudios:</label>
                                <input type="text" class="form-control mb-3" name="Estudios" placeholder="Estudios"value="<?php echo $row['Estudios']  ?>">
                                </div>
                                <label for="">Horario:</label>
                                <input type="text" class="form-control mb-3" name="Horario" placeholder="Horario"value="<?php echo $row['Horario']  ?>">
                                </div>
                                <label for="">Materia:</label>
                                <input type="int" class="form-control mb-3" name="Materia" placeholder="Materia"value="<?php echo $row['Materia']  ?>">
                                </div>


                        </div>
                        <div class="mt-2 d-grid gap-2 mt-3">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
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
        </div>
    </div>

    <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>
