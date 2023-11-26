<?php
    $conexion= mysqli_connect('localhost','root' ,'', 'tuhogar360')
    or die(mysql_error($mysqli));

    insertar($conexion);

    function insertar($conexion){
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $telefono = $_POST['telefono'];
        $mensaje = $_POST['mensaje'];
    

        $consulta = "INSERT INTO contacto (nombre, email, telefono, mensaje)
        values ('$nombre', '$email', '$telefono', '$mensaje')";

        if (mysqli_query($conexion, $consulta)) {
            echo "Registro exitoso";
            header("refresh:1;url=/");
            exit;
        } else {
            // Error en la inserción
            echo "Error al registrar: " . mysqli_error($conexion);
        }
    
        mysqli_close($conexion);
    }
 
?>
