<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM materia WHERE IdMateria='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Materia</title>
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
                        <h2>Editar Materia</h2>
                    <form action="update.php" method="POST">
                    </div>
                    <div class="card-body">
                        <form action="">
                        <input type="hidden" name="IdMateria" value="<?php echo $row['IdMateria']  ?>">




                            <div class="form-group mt-2">
                                <label for="">Nombre de la materia:</label>
                                <input type="text" class="form-control mb-3" name="NombreMateria" placeholder="NombreMateria" value="<?php echo $row['NombreMateria']  ?>">
                                </div>
                                <div class="form-group mt-2">
                                <label for="">Horario:</label>
                                <input type="text" class="form-control mb-3" name="Horario" placeholder="Horario" value="<?php echo $row['Horario']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Creditos:</label>
                                <input type="int" class="form-control mb-3" name="Creditos" placeholder="Creditos"value="<?php echo $row['Creditos']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Duracion:</label>
                                <input type="text" class="form-control mb-3" name="Duracion" placeholder="Duracion"value="<?php echo $row['Duracion']  ?>">
</div>
                            <div class="form-group mt-2">
                                <label for="">Periodo</label>
                                <input type="text" class="form-control mb-3" name="Periodo" placeholder="Periodo"value="<?php echo $row['Periodo']  ?>">
                                </div>
                            <div class="form-group mt-2">
                            <label for="">Aula</label>
                            <input type="int" class="form-control mb-3" name="Aula" placeholder="Aula"value="<?php echo $row['Aula']  ?>">
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