<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="https://expotecn2.000webhostapp.com/expotec/index.html">Ir a la pagina principal</a>
<br>
<?php
$servername = "localhost";
$username = "id21105626_expot2";
$password = "Lol@2323";
$database = "id21105626_expo";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("La conexión falló: " . mysqli_connect_error());
}

$dni = $_POST['dni'];
$email = $_POST['correo'];
$descuento = $_POST['descuento'];

$sql = "INSERT INTO usuarios(correo , DNI, descuento) VALUES ('$email','$dni','$descuento')";

$verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE correo='$email' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo "Este correo ya está registrado, intenta con otro correo";
    exit();
}

$verificar_correo = mysqli_query($conn, "SELECT * FROM usuarios WHERE DNI='$dni' ");

if(mysqli_num_rows($verificar_correo) > 0){
    echo "Este DNI ya está registrado";
    exit();
}

if (mysqli_query($conn, $sql)) {
    echo "Si ha colocado cualquier texto después del @ y antes del .com (por ejemplo: eweqwewqeq), se considerará como un 'participante nulo' y se eliminará de la lista. Se requiere presentar el DNI y el correo electrónico como parte de la verificación de identidad.";
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<br>

 
</body>
</html>