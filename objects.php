<?php
require_once __DIR__ . '/class/Product.php';
require_once __DIR__ . '/class/User.php';

$user = new User();

$products = [];

$osso_gomma = new Product('Osso di gomma','Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, fugit!',5,'toys');
$products[] = $osso_gomma;

$cuccia_piccola = new Product('Cuccia Piccola','Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, fugit!',15,'dog\'s bed');
$products[] = $cuccia_piccola;

$croccantini_bg = new Product('Croccantini cani taglia xl','Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, fugit!',35,'food');
$products[] = $croccantini_bg;

$croccantini_little = new Product('Croccantini cani taglia xs','Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, fugit!',35,'food');
$products[] = $croccantini_little;

?>  