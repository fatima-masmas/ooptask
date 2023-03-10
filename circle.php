<?php
class Circle {
  private $radius;

  public function setRadius($radius) {
    $this->radius = $radius;
  }

  public function getRadius() {
    return $this->radius;
  }

  public function getArea() {
    return pi() * pow($this->radius, 2);
  }

  public function getCircumference() {
    return 2 * pi() * $this->radius;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $circle = new Circle();
  $circle->setRadius($_POST["radius"]);
  $area = $circle->getArea();
  $circumference = $circle->getCircumference();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Circle Calculator</title>
</head>
<body>
  <h1>Circle Calculator</h1>
  <form method="POST">
    <label for="radius">Radius:</label>
    <input type="number" id="radius" name="radius">
    <button type="submit">Calculate</button>
  </form>
  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <p>Area: <?php echo $area; ?></p>
    <p>Circumference: <?php echo $circumference; ?></p>
  <?php endif; ?>
</body>
</html>
