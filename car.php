<?php
class Car {
    private $make;
    private $model;
    private $year;
    
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
    
    public function getMake() {
        return $this->make;
    }
    
    public function setMake($make) {
        $this->make = $make;
    }
    
    public function getModel() {
        return $this->model;
    }
    
    public function setModel($model) {
        $this->model = $model;
    }
    
    public function getYear() {
        return $this->year;
    }
    
    public function setYear($year) {
        $this->year = $year;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Car Management System</title>

    <style>
        table, th, td {
			border: 1px solid black;
			border-collapse: collapse;
			padding: 5px;
		}
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 700vh;
            width: 500vh;
          
        }
        form {
            width: 23rem;
            height: 30rem;
            padding: 90px;
            margin: 200px;
            border: 1px solid;
            border-radius: 12px;
            color: blanchedalmond;
            background-color:darkslategrey;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
	
	<form method="post" action="add_car.php">
    <h1>Car Management System</h1>
	<h2>Add Car</h2>
		<label for="make">Make:</label><br>
		<input type="text" id="make" name="make" required><br><br>

		<label for="model">Model:</label><br>
		<input type="text" id="model" name="model" required><br><br>

		<label for="year">Year:</label><br>
		<input type="number" id="year" name="year" min="1900" max="2023" required><br><br>

		<input type="submit" value="Add Car">
	
    <h2>List of Cars</h2>
	<table>
		<tr>
			<th>Make</th>
			<th>Model</th>
			<th>Year</th>
		</tr>
		<?php
			// Include the Car class
        require_once 'car.php';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $make = $_POST["make"];
        $model = $_POST["model"];
        $year = $_POST["year"];
        $car = new Car($make, $model, $year);
        echo '<tr>';
        echo '<td>' . $car->getMake() . '</td>';
        echo '<td>' . $car->getModel() . '</td>';
        echo '<td>' . $car->getYear() . '</td>';
        echo '</tr>';

        }
		?>

	</table>   
</form>
</body>
</html>


