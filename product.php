<?php
class Product {
  private $name;
  private $price;
  private $quantity;

  public function __construct($name, $price, $quantity) {
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getQuantity() {
    return $this->quantity;
  }

  public function setName($name) {
    $this->name = $name;
  }

  public function setPrice($price) {
    $this->price = $price;
  }

  public function setQuantity($quantity) {
    $this->quantity = $quantity;
  }

  public function getTotalCost() {
    return $this->price * $this->quantity;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Product</title>
</head>
<body>
  <h1>Add Product</h1>
  <form action="product_handler.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price"><br><br>
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity"><br><br>
    <input type="submit" value="Add Product">
  </form>
</body>
</html>
<?php
require_once 'product.php';

// check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // retrieve the form data
  $name = $_POST['name'];
  $price = $_POST['price'];
  $quantity = $_POST['quantity'];

  // create a new product object
  $product = new Product($name, $price, $quantity);

  // print out the values of the new product
  echo 'Name: ' . $product->getName() . '<br>';
  echo 'Price: $' . $product->getPrice() . '<br>';
  echo 'Quantity: ' . $product->getQuantity() . '<br>';
  echo 'Total Cost: $' . $product->getTotalCost();
}
?>
