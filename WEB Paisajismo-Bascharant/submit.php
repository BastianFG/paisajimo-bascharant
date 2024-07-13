<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $servicio = htmlspecialchars($_POST['servicio']);
    $mensaje = htmlspecialchars($_POST['mensaje']);
    
    // Aquí puedes conectar con la base de datos para guardar los datos
    // o enviar un email con los detalles de la cotización.
    
    // Ejemplo de conexión a base de datos MySQL
    $servername = "localhost";
    $username = "usuario";
    $password = "contraseña";
    $dbname = "paisajismo_db";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO cotizaciones (nombre, email, servicio, mensaje)
            VALUES ('$nombre', '$email', '$servicio', '$mensaje')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Cotización enviada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
