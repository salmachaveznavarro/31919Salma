<html>
<head>
    <title>Lista de Empleados</title>
    <script type="text/javascript">
        function confirmar(){
            return confirm('Estas seguro?, se eliminarán los datos');

        }
    </script>
    <link rel="stylesheet" type="text/css" href="estilos.css">

</head>
<body>
<?php
    include("conexion.php");
    $sql="select from Empleados";
    $resultado=mysqli_query($conexion,$sql)
?>
    <h1>Lista de Empleados</h1>
    <a href="agregar.php">Nuevo Empleado </a><br><br>
    <table>
        <thead>
            <tr>
                <th>id</th>
                <th>nombre</th>
                <th>no. control</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while($filas=mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
                <td><?php echo $filas['id'] ?> </td>
                <td><?php echo $filas['nombre'] ?></td> 
                <td><?php echo $filas['no.control'] ?></td>
                <td>
                    <?php echo "<a href='editar.php?id=".$filas['id']."'>EDITAR</a>"; ?>
                    <?php echo "<a href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'>ELIMINAR</a>"; ?>
                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    <?php
        mysqli_close($conexion);
</body>
</html>
