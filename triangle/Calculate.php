<?php

include '../.Triangle.php';

$base = $_POST['base'];
$height = $_POST['height'];

$triangle = new Triangle($base, $height);
$area = $triangle->getArea();

echo "The area of the triangle with base $base and height $height is $area.";
?>