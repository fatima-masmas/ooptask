<?php
// Circle class
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

// Check if the form has been submitted
if(isset($_POST['submit'])) {
  // Create a new Circle object
  $circle = new Circle();

  // Set the radius property
  $circle->setRadius($_POST['radius']);

  // Print out the values of the new Circle object
  echo "<p>Radius: " . $circle->getRadius() . "</p>";
  echo "<p>Area: " . $circle->getArea() . "</p>";
  echo "<p>Circumference: " . $circle->getCircumference() . "</p>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Circle Class Example</title>
</head>
<body>
  <h1>Circle Class Example</h1>
  <form method="post">
    <label for="radius">Radius:</label>
    <input type="number" name="radius" id="radius" required>
    <br><br>
    <input type="submit" name="submit" value="Calculate">
  </form>
</body>
</html>
