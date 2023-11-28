<html>
<head>
    <title>Lista de Empleados</title>
</head>
<body>
<?php
    include("conexion.php");
    $sql="select from Empleados";
    $resultado=mysqli_query($conexion,$sql)
?>
    <h1>Lista de Empleados</h1>
    <a href="">Nuevo Empleado </a><br><br>
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
            <tr>
                <td>dato1</td>
                <td>d2</td>
                <td>d3</td>
                <td>d4</td>
            </tr>
        </tbody>
    </table>
</body>
