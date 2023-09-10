<?php include 'includes/header.php';

// Conectar a la DB con mysqli 

$db = new mysqli('localhost', 'root', '', 'bienesraices_crud');

// Creamos el query
$query = "SELECT titulo, imagen FROM propiedades";

// Lo preparamos
$stmt = $db -> prepare($query);

// Lo ejecutamos
$stmt -> execute();

// Creamos la variable
$stmt -> bind_result($titulo, $imagen);

// Asignamos el resultado
$stmt -> fetch();

// Imprimir el resultado
var_dump($titulo);
var_dump($imagen);



// Multiples resultados
// while($row = $resultado -> fetch_assoc()) : 
//     var_dump($row);
// endwhile;

// Un solo resultado
// var_dump($resultado -> fetch_assoc());

include 'includes/footer.php';