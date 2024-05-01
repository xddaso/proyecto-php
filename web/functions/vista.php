<?php
$enlace=mysqli_connect("localhost", "fran", "alumne", "proyecto_php");
if (!$enlace) {
    echo "Error en la conexion a la base de datos: " . mysqli_connect_error();
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registros</title>
    <link rel="stylesheet" href="../css/style.css?v=<?php echo time(); ?>">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="/web/index.php">
                    <img src="../img/profesor.png" alt="logoprofe">
                </a>
            </div>
            <div class="enlaces">
                <a href="/web/index.php">Inicio</a>
                <a href="/web/functions/formAñadir.php">Añadir</a>
                <a href="/web/functions/tablaEditar.php">Editar</a>
            </div>
        </nav>
    </header>
    <table class="margenTablas">
    <tr><td>Código_Profesor</td><td>Nombre</td><td>Apellidos</td><td>Fecha_Nacimiento</td><td>Dirección</td><td>Teléfono</td></tr>
    <?php
    $codigo =  $_GET['codigo_profe'];
    $resultado = mysqli_query($enlace, "SELECT * FROM profesor WHERE codigo_profe = $codigo");
            while ( $registre = mysqli_fetch_array($resultado) ) {
                echo "<tr>";
                echo "<td>" . $registre['codigo_profe'] . "</td>";
                echo "<td>" . $registre['nombre'] . "</td>";
                echo "<td>" . $registre['apellidos'] . "</td>";
                echo "<td>" . $registre['fecha_nacimiento'] . "</td>";
                echo "<td>" . $registre['direccion'] . "</td>";
                echo "<td>" . $registre['telefono'] . "</td>";
                echo "</tr>";
            }
    ?>
    </table>
</body>
</html>