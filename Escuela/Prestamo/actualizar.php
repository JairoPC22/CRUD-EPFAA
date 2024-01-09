<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM prestamo WHERE IdPrestamo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Prestamo</title>
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
                        <h2>Editar Prestamo</h2>
                    <form action="update.php" method="POST">
                    </div>
                    <div class="card-body">
                        <form action="">
                        <input type="hidden" name="IdPrestamo" value="<?php echo $row['IdPrestamo']  ?>">


                            <div class="form-group mt-2">
                                <label for="">Usuario:</label>
                                <input type="text" class="form-control mb-3" name="Usuario" placeholder="Usuario" value="<?php echo $row['Usuario']  ?>">
                                </div>
                                <div class="form-group mt-2">
                                <label for="">Libro:</label>
                                <input type="text" class="form-control mb-3" name="Libro" placeholder="Libro" value="<?php echo $row['Libro']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Fecha:</label>
                                <input type="date" class="form-control mb-3" name="Fecha" placeholder="Fecha"value="<?php echo $row['Fecha']  ?>">
                                </div>
                            <div class="form-group mt-2">
                                <label for="">Hora:</label>
                                <input type="text" class="form-control mb-3" name="Hora" placeholder="Hora"value="<?php echo $row['Hora']  ?>">
</div>
                            <div class="form-group mt-2">
                            <label for="">Empleado</label>
                            <input type="text" class="form-control mb-3" name="Empleado" placeholder="Empleado"value="<?php echo $row['Empleado']  ?>">
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