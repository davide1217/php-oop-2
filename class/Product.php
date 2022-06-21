<?php

class Product{
  public static $count = 0;
  public $id;
  public $name;
  public $description;
  public $price;
  public $tipology;


  public function __construct(
    $_name,
    $_description,
    $_price,
    $_tipology
  ) {
    
    $this->id = self::$count;
    self::$count++;
    $this->name = $_name;
    $this->description = $_description;
    $this->price = $_price;
    $this->tipology = $_tipology;
  }

}


?>