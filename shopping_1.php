<?php

class Product {
  private $name;
  private $price;

  public function __construct($name, $price) {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }
}

class Cart {
  private $products = [];

  public function addProduct($product) {
    $this->products[] = $product;
  }

  public function removeProduct($product) {
    $index = array_search($product, $this->products);
    if ($index !== false) {
      unset($this->products[$index]);
    }
  }

  public function getProducts() {
    return $this->products;
  }
}

$product1 = new Product('Product 1', 10);
$product2 = new Product('Product 2', 20);
$product3 = new Product('Product 3', 30);

$cart = new Cart();
$cart->addProduct($product1);
$cart->addProduct($product2);
$cart->addProduct($product3);
$cart->removeProduct($product2);

foreach ($cart->getProducts() as $product) {
  echo $product->getName() . ': ' . $product->getPrice() . '<br>';
}
?>