<?php
    $servername = "sql205.infinityfree.com "; 
    $username = "if0_37433761";
    $password = "4RblbHXR4XzB"; //Soy consciente de que estoy poniendo una pass, es para hacer pruebas de despliegue en local para fines didácticos       
    $dbname = "if0_37433761_prueba2"; 

    // Crear conexión con la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Verificar la conexión
    if ($conn->connect_error) {
        echo "Error";
        die("Error en la conexión: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $sql = "INSERT INTO persona (nombre, edad) VALUES ('$nombre', '$edad')";

        if ($conn->query($sql) === TRUE) {
            echo "Datos insertados correctamente";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
?>