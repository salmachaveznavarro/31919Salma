<html>
    <head>
        <title>AGREGAR</title>
    </head>
    <body
         <?php
            if(isset($_POST['enviar'])){
                $nombre=$_POST['nombre'];
                $nocontrol=$_POST['no.control'];
                include("conexion.php")
            }else{

            }
        ?>
        <h1>Agregar nuevo empleado</h1>
        <form action="" method="post">
            <input type="text" name="no.control"> <br>
            <input type="submit" name="enviar" value="AGREGAR">
            <a href="index.php"></a>
        </form>
    </body>
</html>
