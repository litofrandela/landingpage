<?php
$servername = "localhost";
$username = "id21105626_expot2";
$password = "Elmascapo123a@";
$database = "id21105626_expo";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

$dni = $_POST['dni'];
$email = $_POST['correo'];
$descuento = $_POST['descuento'];

$sql = "INSERT INTO usuarios(correo , DNI, descuento) VALUES ('$dni','$correo','$descuento')";

if (mysqli_query($conn, $sql)) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
