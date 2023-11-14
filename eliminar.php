<?php
    // $cedula=$_POST["cedula"];
    // $nombre=$_POST["nombre"];
    // $apellido = $_POST["apellido"];
    $cedula_eliminar = $_POST["cedula_eliminar"];

    // (nombre servidor, usuario, contraseña, base de datos)
    $conectar = mysqli_connect("localhost","root","","prueba");
    
    $eliminar = "DELETE FROM datos WHERE cedula = $cedula_eliminar";

    // if (mysqli_query($conectar, $eliminar)) {
    //     echo "El usuario se eliminó exitosamente.";
    // } else {
    //     echo "Hubo un error al eliminar el usuario: " . mysqli_error($conectar);
    // }
    
    if (mysqli_query($conectar, $eliminar)) {
        if (mysqli_affected_rows($conectar) > 0) { //verifica si se han visto afectadas filas en la base de datos 
            echo "El usuario se elimino exitosamente.";
        } else {
            echo "El usuario con la cedula proporcionada no existe.";
        }
    } else {
        echo "Hubo un error al eliminar el usuario: " . mysqli_error($conectar);
    }


    // mysqli_close($conectar);

    echo "<br>";
    echo "<br>";

    echo "<a href='index.html'>Volver al formulario</a>";

    
?>