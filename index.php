<!-- L’e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L’utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto) -->
<?php
require_once __DIR__ . '/objects.php';
require_once __DIR__ . '/class/User.php';
require_once __DIR__ . '/class/Product.php';



if( isset($_POST['email']) && $_POST['email'] != null ) {

  $user->name = $_POST['name'];
  $user->surname = $_POST['surname'];
  $user->email = $_POST['email'];
  $user->password = $_POST['password'];

};

function get_discount($_price) {
  $discount_price = intval($_price) * 0.8;
  return $discount_price;
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

  <div class="container">

    <?php if(!$user->password): ?>

      <div><a href="iscrizione.php">Iscriviti</a> per ottenere un 20% di sconto.</div>

      <?php foreach ($products as $product):?>

        <div>
          <h2>Prodotto: <?php echo $product->name ?></h2>
          <p>Breve descrizione: <?php echo $product->description ?></p>
          <div>Prezzo: <?php echo $product->price ?>&euro;</div>
          <div>Tipo prodotto: <?php echo $product->tipology ?></div>
          <form action="purchase.php" method="get">
            <input type="hidden" name="id" value="<?php echo $product->id ?>">
            <input type="hidden" name="price" value="<?php echo $product->price ?>">
            <input type="submit" name="selected" value="Procedi all'acquisto" >
          </form>
        </div>

      <?php endforeach ?>

    <?php else: ?>

      <h3>Registrazione completata</h3>

      <?php foreach ($products as $product):?>

        <div>
          <h2>Prodotto: <?php echo $product->name ?></h2>
          <p>Breve descrizione: <?php echo $product->description ?></p>
          <div>Prezzo: &#x2718; <?php echo $product->price ?> &#x2713; <?php echo get_discount($product->price) ?>&euro;</div>
          <div>Tipo prodotto: <?php echo $product->tipology ?></div>
          <form action="purchase.php" method="get">
            <input type="hidden" name="id" value="<?php echo $product->id ?>">
            <input type="hidden" name="price" value="<?php echo get_discount($product->price) ?>">
            <input type="submit" name="selected" value="Procedi all'acquisto" >
          </form>
        </div>

      <?php endforeach ?>


    <?php endif ?>

  </div>

</body>
</html>