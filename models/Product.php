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

  public function load($data){
    $this->id = $data['id'] ?? null;
    $this->title = $data['title'];
    $this->description = $data['description'] ?? '';
    $this->price = $data['price'];
    $this->imageFile = $data['imageFile'] ?? null;
    $this->imagePath = $data['image'] ?? null;
  }
  
  public function save(){
    $errors = [];
    if (!$this->title){
      $errors[] = "Product title is required!";
    }

    if (!$this->price) {
      $errors[] = "Product price is required";
    }

    if (!is_dir(__DIR__.'/../public/images')){
      mkdir(__DIR__.'/../public/images');
    }

  }

}



?>