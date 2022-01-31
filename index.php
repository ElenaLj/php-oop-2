<?php 
require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Outlet.php";
require_once __DIR__ . "/classes/Customer.php";

//esempi di prodotti
$products = [
    new Product("Burro d'Arachidi", "100 % arachidi tostate. Extra cremosità per un'esperienza di gusto indimenticabile", "Fiorentini", "250 gr", 3),
    new Product("Sciroppo d'Acero", "Succo bollito dell'acero canadese, dolcificante naturale vegano", "Maple Joe", "200 gr", 8),
    new Product("Fagioli rossi", "Fagioli secchi per l'ammollo e l'ulteriore lavorazione. Alto contenuto di proteine", "Montello", "400 gr", 2),
    new Product("Succo di mirtillo rosso", "100% da agricoltura biologica controllata. Senza additivi, coloranti e conservanti. Gusto unico, puro ed equilibrato", "Zuegg", "1 lt", 4),
];
// var_dump($products);

//esempi di acquirenti
$michela = new Customer("Michela", "Rossi", "michela.rossi@gmail.com");
// var_dump($michela);

$mario = new Customer("Mario", "Verdi", "verdimario@outlook.it");
// var_dump($mario);

$sabrina = new Customer("Sabrina", "Bianchi", "sabrinabianchi@tiscali.it");
// var_dump($sabrina);

$matteo = new Customer("Matteo", "Moro", "moro.mattero@gmail.com");
// var_dump($matteo);

//esempio di prodotto outlet
$outlet = new Outlet("Fiocchi di farro", "100% da agricoltura controllata. Senza coloranti, conservanti né altri additivi. Vegani. Fonte di fibra", "Fior di Loto", "500 gr", 5, true);

$outlet->setDiscount();
// var_dump($outlet);
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
    <h1>Shop Online</h1>
    <h3>Ultime novità:</h3>
    <ul>
        <?php foreach($products as $product) { ?>
        <li>
            <h4><?php echo $product->nome; ?></h4>
            <p>Descrizione: <?php echo $product->descrizione; ?></p>
            <p>Marca: <?php echo $product->marca; ?></p>
            <p>Formato: <?php echo $product->formato; ?></p>
            <p>Prezzo: <?php echo $product->prezzo; ?> €</p>
        </li>
        <?php } ?>
    </ul>

    <h3>Outlet</h3>
    <ul>
        <li>
            <h4><?php echo $outlet->nome; ?></h4>
            <p>Descrizione: <?php echo $outlet->descrizione; ?></p>
            <p>Marca: <?php echo $outlet->marca; ?></p>
            <p>Formato: <?php echo $outlet->formato; ?></p>
            <p>Prezzo: <?php echo $outlet->prezzo; ?> €</p>
            <p>Sconto: <?php echo $outlet->productCondition; ?> €</p>
        </li>
    </ul>
</body>
</html>