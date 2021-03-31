<?php include 'includes/header.php';

//CREAMOS UNA CONEXION CON PDO

$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', 'root');

//CREAMOS EL QUERY
$query = "SELECT titulo, imagen from propiedades";

//LO PREPARAMOS
$stmt = $db->prepare($query);

//LO EJECUTAMOS
$stmt->execute();

//OBTENER LOS RESULTADOS
$resultado = $stmt->fetchAll( PDO:: FETCH_ASSOC );

//ITERAR
foreach($resultado as $propiedades):
    echo $propiedades['titulo'];
    echo "<br>";
    echo $propiedades['imagen'];
    echo "<br>"; 
endforeach;
include 'includes/footer.php';