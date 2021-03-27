<?php 

//Importar la conexion
require 'includes/config/database.php';
$db = conectarDB();

//Crear un email y password
$email = "correo@gmail.com";
$password = "321456";

//Agregar la password Hashada
$passwordHash = password_hash($password, PASSWORD_BCRYPT);

//Realziar el Query al usuario
$query = " INSERT INTO usuarios (email, password) VALUES ('${email}', '${passwordHash}'); ";

echo $query;

//Agregar ala base de datos
mysqli_query($db, $query);