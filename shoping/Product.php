
<?php
// Product class
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

// Cart class
class Cart {
  private $products = array();

  public function addProduct($product) {
    $this->products[] = $product;
  }

  public function removeProduct($index) {
    if (isset($this->products[$index])) {
      unset($this->products[$index]);
    }
  }

  public function displayCart() {
    echo "<h2>Shopping Cart</h2>";
    echo "<ul>";
    foreach ($this->products as $product) {
      echo "<li>" . $product->getName() . " - $" . $product->getPrice() . "</li>";
    }
    echo "</ul>";
  }
}

// Create products
$product1 = new Product("Product 1", 10);
$product2 = new Product("Product 2", 20);

// Create cart
$cart = new Cart();

// Add products to cart
$cart->addProduct($product1);
$cart->addProduct($product2);

// Display cart
$cart->displayCart();
?>