<?php
class Person {
    private $first_name;
    private $last_name;
    private $age;
    
    public function __construct($first_name, $last_name, $age) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    
    public function getFirstName() {
        return $this->first_name;
    }
    
    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }
    
    public function getLastName() {
        return $this->last_name;
    }
    
    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }
    
    public function getAge() {
        return $this->age;
    }
    
    public function setAge($age) {
        $this->age = $age;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personeneingabe</title>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 700vh;
            width: 500vh;
          
        }
        form {
            width: 20rem;
            height: 20rem;
            padding: 60px;
            margin: 200px;
            border: 1px solid;
            border-radius: 12px;
            color:brown;
            background-color:cadetblue;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <form method="post" action="person.php" >
        <label for="first_name">Vorname:</label><br />
        <input type="text" name="first_name" id="first_name"><br><br>

        <label for="last_name">Nachname:</label><br />
        <input type="text" name="last_name" id="last_name"><br><br>

        <label for="age">Alter:</label><br>
        <input type="number" name="age" id="age"><br><br>
        <br>
        <input type="submit" value="Speichern">
    </form>
    <?php
  
    require_once 'person.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = $_POST["age"];
        $person = new Person($first_name, $last_name, $age);
        // neu Person 
        echo "<h2>New Person Added</h2>";
        echo "First Name: " . $person->getFirstName() . "<br>";
        echo "Last Name: " . $person->getLastName() . "<br>";
        echo "Age: " . $person->getAge() . "<br>";
    }
    ?>
</body>
</html>