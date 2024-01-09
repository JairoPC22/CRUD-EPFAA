<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM devolver";
    $query=mysqli_query($con,$sql);
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
    
</head>

<body background="1366_2000.jpg">
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <nav class="nav nav-masthead justify-content-center float-md-start">
                    <a class="nav-link active" aria-current="page" href="http://localhost/Biblioteca/index.php">Inicio</a>    
                    <a class="nav-link active" aria-current="page" href="http://localhost/Biblioteca/Devolucion/agregar2.php">Agregar Devolucion</a>
                    </nav>
                </div>
            </header>

            <div class="container mt-7">
                    <div class="row"> 
                        
                        

                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IdDevolver</th>
                                        <th>Usuario</th>
                                        <th>Libro</th>
                                        <th>Fecha Prestamo</th>
                                        <th>Fecha Devolucion</th>
                                        <th>Hora Devolucion</th>
                                        <th>Empleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IdDevolver']?></th>
                                                <th><?php  echo $row['Usuario']?></th>
                                                <th><?php  echo $row['Libro']?></th>    
                                                <th><?php  echo $row['FechaPrestamo']?></th>
                                                <th><?php  echo $row['FechaDevolucion']?></th>
                                                <th><?php  echo $row['HoraDevolucion']?></th>    
                                                <th><?php  echo $row['Empleado']?></th>
    
    
                                                <th><a href="actualizar.php?id=<?php echo $row['IdDevolver'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IdDevolver'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                    </div>  
            </div>
    </body>
</html>