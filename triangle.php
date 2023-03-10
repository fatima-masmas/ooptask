<?php
class Triangle {
  private $base;
  private $height;

  public function __construct($base, $height) {
    $this->base = $base;
    $this->height = $height;
  }

  public function setBase($base) {
    $this->base = $base;
  }

  public function getBase() {
    return $this->base;
  }

  public function setHeight($height) {
    $this->height = $height;
  }

  public function getHeight() {
    return $this->height;
  }

  public function getArea() {
    return 0.5 * $this->base * $this->height;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Triangle Area Calculator</title>
</head>
<body>
  <form action="calculate.php" method="POST">
    <label for="base">Base:</label>
    <input type="number" id="base" name="base"><br>

    <label for="height">Height:</label>
    <input type="number" id="height" name="height"><br>

    <input type="submit" value="Calculate Area">
  </form>
</body>
</html>
<?php
include 'Triangle.php';

$base = $_POST['base'];
$height = $_POST['height'];

$triangle = new Triangle($base, $height);
$area = $triangle->getArea();

echo "The area of the triangle with base $base and height $height is $area.";
?>
