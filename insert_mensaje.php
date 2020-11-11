<?php

include('db.php');

if (isset($_POST['guardar_mensaje'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
	$query = "INSERT INTO usuario (nombre,email,mensaje) VALUES ('$nombre','$email', '$mensaje')";
    $result = mysqli_query($conn, $query);
    if(!$result) {
        die("Query Failed.");
    } 
    header('Location: mensaje.php');
}

?>
