<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM estudiantes WHERE IdEstudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Estudiante</title>
    <!--Importar CSS-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min (2).css">
    
</head>

<body background="1366_2000.jpg">
<div class="container" >

        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

            <div class="col-8 col-md-6 col-xs-4 col-sm-6 col-xl-4 col-lg-4">
                <div class="card text-white bg- mb-3">
                    
                    <div class="card-header text-center">
                        <h2>Editar Estudiante</h2>
                    <form action="update.php" method="POST">
                    </div>
                    <div class="card-body">
                        <form action="">
                        <input type="hidden" name="IdEstudiante" value="<?php echo $row['IdEstudiante']  ?>">




                            <div class="form-group mt-2">
                                <label for="">Nombre:</label>
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre']  ?>">
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
                                <label for="">Telefono:</label>
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Telefono"value="<?php echo $row['Telefono']  ?>">
</div>
                            <div class="form-group mt-2">
                                <label for="">Email:</label>
                                <input type="email" class="form-control mb-3" name="Email" placeholder="Email"value="<?php echo $row['Email']  ?>">
                                </div>
                            <div class="form-group mt-2">
                            <label for="">Grado</label>
                            <input type="text" class="form-control mb-3" name="Grado" placeholder="Grado"value="<?php echo $row['Grado']  ?>">
</div>
<div class="form-group mt-2">
                            <label for="">Grupo</label>
                            <input type="text" class="form-control mb-3" name="Grupo" placeholder="Grupo"value="<?php echo $row['Grupo']  ?>">
</div>
<div class="form-group mt-2">
                            <label for="">Capacitacion</label>
                            <input type="text" class="form-control mb-3" name="Capacitacion" placeholder="Capacitacion"value="<?php echo $row['Capacitacion']  ?>">
</div>
<div class="form-group mt-2">
                            <label for="">Domicilio</label>
                            <input type="text" class="form-control mb-3" name="Domicilio" placeholder="Domicilio"value="<?php echo $row['Domicilio']  ?>">
</div>
<div class="form-group mt-2">
                            <label for="">Genero</label>
                            <input type="text" class="form-control mb-3" name="Genero" placeholder="Genero"value="<?php echo $row['Genero']  ?>">
</div>
        <div class="mt-2 d-grid grap-2 mt-3">
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

<div class="col-2 col-md-3 col-xs-4 col-sm-3 col-xl-4 col-lg-4"></div>

</div>



</div>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>

</html>