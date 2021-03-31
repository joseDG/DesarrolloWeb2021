<?php include 'includes/header.php';

//Realizar consultas ala base de datos seguras

//Conectar ala BD con Mysqli
$db = new mysqli('localhost', 'root', 'root', 'bienes_raices');

//Creamos el query
$query = "SELECT titulo, imagen from propiedades";

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo, $imagen);

//Asignamos el resultado
while($stmt->fetch()):
    var_dump($titulo);
endwhile;


//Imprimimos los valores unitarios
//var_dump($titulo);


include 'includes/footer.php';