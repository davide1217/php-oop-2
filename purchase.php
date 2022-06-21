<?php
require_once __DIR__ . '/objects.php';

$expired = '';

if ( isset($_POST['month']) && isset($_POST['year']) && strlen($_POST['number']) == 16 ) {
  $card_month = $_POST['month'];
  $card_year = $_POST['year'];

  if( intval($card_year) <= (date('Y') - 2000) && intval($card_month) <= date('m') ) {
    $expired = true;
  } else {
    $expired = false;
  };

} elseif (!empty($_POST['number'])) {
  echo '<div style="color: red">Inserire i dati in modo corretto</div>';
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>

  <div id="selected">
    <h2>Prodotto: <?php echo $products[$_GET['id']]->name ?></h2>
    <p>Breve descrizione: <?php echo $products[$_GET['id']]->description ?></p>
    <div>Prezzo: <?php echo $_GET['price'] ?>&euro;</div>
    <div>Tipo prodotto: <?php echo $products[$_GET['id']]->tipology ?></div>
  </div>
  
  <?php if($expired === ''): ?>
  <form id="datas" method="post">
    <label for="">Dati carta di credito/debito:</label> <br>
    
    <label class="little" for="">Numero carta:</label>
    <input type="number" name="number" minlength="16" maxlength="16" placeholder="es. xxxx-xxxx-xxxx-xxxx">

    <label class="little" for="">Data di scadenza:</label> <br>
    <input class="expire" type="number" name="month" placeholder="xx">

    <label for=""> / </label>

    <input class="expire" type="number" name="year" placeholder="xx">


    <input type="submit" value="Acquista">
  </form>

  <?php elseif($expired == true): ?>
  <h1>Carta di credito/debito scaduta</h1>

  <?php elseif($expired == false): ?>
  <h1>Ordine eseguito</h1>
  <a href="index.php">Torna tra gli articoli</a>

  <?php endif; ?>

</body>
</html>