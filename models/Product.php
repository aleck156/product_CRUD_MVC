<?php

namespace app\models;

// mapping of a class into a database product
class Product {
  public ?int $id = null;
  public ?string $title = null;
  public ?string $description = null;
  public ?float $price = null;
  public ?string $imagePath = null;
  public ?array $imageFile = null;
  
}



?>