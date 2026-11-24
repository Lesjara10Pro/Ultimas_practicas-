<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Guardar informacion</title>
</head>
<body>
    <h2>Guardar informacion en en archivo</h2>
    <form method="POST">
    	Nombre del alumno:
    	<input type="text" name="nombre">
        <br><br>
        Pasatiempo
        <input type="text" name="pasatiempo">
        <br><br>
        Edad
        <input type="text" name="edad">
    	<br><br>
    	<button type="submit" name="guardar">Guardar</button>
    </form>
    <hr>

    <h3>Eliminar registro</h3>
    <form method="POST">
        Nombre del alumno a eliminar:
        <input type="text" name="nombre_eliminar">
        <button type="submit" name="eliminar_uno">Eliminar alumno</button>
        <button type="submit" name="eliminar_todo">Vaciar todo el archivo</button>
    </form>

    <?php
    $archivo = "ProgramacionA.txt";
    
    if (isset($_POST["guardar"])){
        $nombre=$_POST["nombre"];
        $pasatiempo=$_POST["pasatiempo"];
        $edad=$_POST["edad"];
        file_put_contents("ProgramacionA.txt", $nombre . PHP_EOL, FILE_APPEND);
        file_put_contents("ProgramacionA.txt", $pasatiempo . PHP_EOL, FILE_APPEND);
        file_put_contents("ProgramacionA.txt", $edad . PHP_EOL, FILE_APPEND);
        echo "<p>informacion guardada correctamente.</p>";
    }

    if (isset($_POST["eliminar_uno"]) && file_exists($archivo)) {
        $nombreEliminar = trim($_POST["nombre_eliminar"]);
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES);
        $nuevasLineas = [];
        $eliminado = false;

       
        for ($i = 0; $i < count($lineas); $i += 3) {
            if (isset($lineas[$i]) && trim($lineas[$i]) === $nombreEliminar) {
                $eliminado = true; 
                continue;
            }
            if (isset($lineas[$i])) $nuevasLineas[] = $lineas[$i];
            if (isset($lineas[$i + 1])) $nuevasLineas[] = $lineas[$i + 1];
            if (isset($lineas[$i + 2])) $nuevasLineas[] = $lineas[$i + 2];
        }

        if ($eliminado) {
            $contenidoNuevo = count($nuevasLineas) > 0 ? implode(PHP_EOL, $nuevasLineas) . PHP_EOL : "";
            file_put_contents($archivo, $contenidoNuevo);
            echo "<p>Registro eliminado correctamente.</p>";
        } else {
            echo "<p>No se encontro ese nombre.</p>";
        }
    }
    if (isset($_POST["eliminar_todo"]) && file_exists($archivo)) {
        file_put_contents($archivo, ""); 
        echo "<p>Todos los registros fueron eliminados.</p>";
    }
    ?>

    <h3>La informacion registrada es la siguiente</h3>
    <?php
    if (file_exists($archivo) && filesize($archivo) > 0) {
        $contenido = file_get_contents($archivo);
        echo nl2br($contenido);
    } else {
        echo "No existen registros.";
    }
    ?>
</body>
</html>