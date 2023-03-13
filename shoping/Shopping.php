<?php
class Product {
	private static $idCounter = 0;
	private $id;
	private $name;
	private $price;
	private $quantity;

	public function __construct($name, $price, $quantity) {
		self::$idCounter++;
		$this->id = self::$idCounter;
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
	}

	public function getId() {
		return $this->id;
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
	<title>Shopping Cart</title>
</head>
<body>
	<h1>Shopping Cart</h1>
	<form method="post" action="cart.php">
		<label for="product_name">Product Name:</label>
		<input type="text" id="product_name" name="product_name" required><br><br>

		<label for="product_price">Price:</label>
		<input type="number" id="product_price" name="product_price" step="0.01" required><br><br>

		<label for="product_quantity">Quantity:</label>
		<input type="number" id="product_quantity" name="product_quantity" required><br><br>

		<input type="submit" value="Add to Cart">
	</form>
</body>
</html>








