<?php include 'includes/header.php';

// Conectar a DB con PDO
$db = new PDO('mysql:host=localhost; dbname=bienesraices_crud', 'root', '');

// Se crea el query
$query = "SELECT titulo, imagen FROM propiedades";

// Utilizando sentencias preparadas
// Lo preparamos
$stmt = $db -> prepare($query);

// Lo ejecutamos
$stmt -> execute();

// Guardamos los resultaods
$resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);


// Iterar par imprimimos los resultados
foreach($resultado as $propiedad) :
    echo $propiedad['titulo'];
    echo "<br>";
    echo $propiedad['imagen'];
    echo "<br>";
endforeach;

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

// Consultar la DB
// $propiedades = $db -> query($query) -> fetch();
// var_dump($propiedades);


include 'includes/footer.php';