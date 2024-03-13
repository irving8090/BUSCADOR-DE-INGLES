<?php
echo "<style>
body{
    background-color: #F1F1F1;
    font-family: cursive;
    font-size: 18px;
}

.mensaje {
    box-sizing: border-box;
    position: absolute;
    width: 400px;
    height: 150px;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 15px;
    background: #FFFFFF;
    border: 3px solid #000000;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.error {
    color: red;
    font-size: 24px;
}

.success {
    color: green;
    font-size: 24px;
}
</style>";

if(isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo']['tmp_name'];

    if(empty($archivo)) {
        echo "<div class='mensaje error'>Agregue un archivo válido.</div>";
    } else {
        $csvData = file_get_contents($archivo);

        $dbHost = 'localhost';
        $dbUser = 'root';
        $dbPass = '';
        $dbName = 'db_ingles2';

        $conexion = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if (!$conexion) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }

        $tabla = 'alumno';
        $campos = ['id', 'matricula', 'nombre', 'nivel', 'espacio', 'grupo', 'cuatrimestre', 'profesor', 'classroom', 'oxford', 'estatus', 'horario','tutor'];

        $eliminarRegistros = mysqli_query($conexion, "DELETE FROM $tabla");

        $lineas = explode(PHP_EOL, $csvData);

        foreach ($lineas as $linea) {
            $datos = str_getcsv($linea, ",");

            if (count($datos) == count($campos)) {
                $valores = "'" . implode("','", $datos) . "'";
                $insertarRegistro = mysqli_query($conexion, "INSERT INTO $tabla (" . implode(',', $campos) . ") VALUES ($valores)");

                if (!$insertarRegistro) {
                    echo "<div class='mensaje error'>Error al insertar registros: " . mysqli_error($conexion) . "</div>";
                    break;
                }
            } else {
                echo "<div class='mensaje error'>El número de columnas en la fila no coincide con el número de campos.</div>";
                break;
            }
        }

        mysqli_close($conexion);

        echo "<div class='mensaje success'>Los datos se han guardado correctamente en la base de datos.</div>";
    }
} else {
    echo "<div class='mensaje error'>No se ha seleccionado ningún archivo.</div>";
}
?>
