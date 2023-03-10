<?php
class Rectangle {
  private $length;
  private $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
  }

  public function setLength($length) {
    $this->length = $length;
  }

  public function getLength() {
    return $this->length;
  }

  public function setWidth($width) {
    $this->width = $width;
  }

  public function getWidth() {
    return $this->width;
  }

  public function getArea() {
    return $this->length * $this->width;
  }

  public function getPerimeter() {
    return 2 * ($this->length + $this->width);
  }
}

$rectangle = new Rectangle(5, 7);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Rectangle Calculator</title>
</head>
<body>
  <h1>Rectangle Calculator</h1>
  <form>
    <label for="length">Length:</label>
    <input type="number" name="length" id="length" value="<?php echo $rectangle->getLength(); ?>"><br><br>
    <label for="width">Width:</label>
    <input type="number" name="width" id="width" value="<?php echo $rectangle->getWidth(); ?>"><br><br>
    <label for="area">Area:</label>
    <input type="text" name="area" id="area" value="<?php echo $rectangle->getArea(); ?>" readonly><br><br>
    <label for="perimeter">Perimeter:</label>
    <input type="text" name="perimeter" id="perimeter" value="<?php echo $rectangle->getPerimeter(); ?>" readonly><br><br>
    <button type="submit">Calculate</button>
  </form>
</body>
</html>
