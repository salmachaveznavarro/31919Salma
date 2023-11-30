<html>
    <head>
        <title>AGREGAR</title>
    </head>
    <body>
        <?php
            if(isset($_POST['ENVIAR'])){
                $nombre=$_POST['nombre'];
                $nocontrol=$_POST['no.control'];
                include("conexion.php");
                $sql="insert into Empleados(nombre,no.control) values ('".$nombre."','".$nocontrol."')";
                $resultado=mysqli_query($conexion,$sql);
                if ($resultado){
                    echo "<script language='JavaScript'> alert('Los datos fueron ingresados correctamente a la BD');
                    location.assign('index.php');
                    </script>";
                }else{
                    echo "<script language='JavaScript'> alert('ERROR: Los datos NO fueron ingresados a la BD');
                    location.assign('index.php');
                    </script>";
                }
                mysqli_close($conexion);
            }else{

        ?>
        <h1>Agregar nuevo empleado</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post" method= "post">
            <label>Nombre:</label>
            <input type="text" name="nombre"><br>
            <label>No. Control</label>
            <input type="text" name="no.control"><br>
            <input type="submit" name= "enviar" value="AGREGAR">
            <a href="index.php">Regresar</a>
        </form>
        <?php
            }
        ?>
    </body>
</html>
