<?php
require_once __DIR__ . '/objects.php';

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


  <form action="index.php" method="post">
    <label for="">Nome:</label>
    <input type="text" name="name" placeholder="name">

    <label for="">Cognome:</label>
    <input type="text" name="surname" placeholder="surname">

    <label for="">Email:</label>
    <input type="email" name="email" placeholder="example@example.example">

    <label for="">Password:</label>
    <input type="password" name="password">

    <input type="submit" value="Iscriviti">
  </form>
  
</body>
</html>