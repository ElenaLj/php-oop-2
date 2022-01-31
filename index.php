<?php 
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Customer.php";

//esempi di prodotti
$products = [
    new Product("Burro d'Arachidi", "100 % arachidi tostate. Extra cremosità per un'esperienza di gusto indimenticabile", "Fiorentini", "250 gr", 3),
    new Product("Sciroppo d'Acero", "Succo bollito dell'acero canadese, dolcificante naturale vegano", "Maple Joe", "200 gr", 8),
    new Product("Fagioli rossi", "Fagioli secchi per l'ammollo e l'ulteriore lavorazione. Alto contenuto di proteine", "Montello", "400 gr", 2),
    new Product("Succo di mirtillo rosso", "100% da agricoltura biologica controllata. Senza additivi, coloranti e conservanti. Gusto unico, puro ed equilibrato", "Zuegg", "1 lt", 4),
];
var_dump($products);

//esempi di acquirenti
$michela = new Customer("Michela", "Rossi", "michela.rossi@gmail.com");
var_dump($michela);

$mario = new Customer("Mario", "Verdi", "verdimario@outlook.it");
var_dump($mario);

$sabrina = new Customer("Sabrina", "Bianchi", "sabrinabianchi@tiscali.it");
var_dump($sabrina);

$matteo = new Customer("Matteo", "Moro", "moro.mattero@gmail.com");
var_dump($matteo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Shop Online</title>
</head>
<body>
    
</body>
</html>