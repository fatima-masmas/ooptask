<?php
class Employee {
    private $name;
    private $jobTitle;
    private $salary;

    public function __construct($name, $jobTitle, $salary) {
        $this->name = $name;
        $this->jobTitle = $jobTitle;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getJobTitle() {
        return $this->jobTitle;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setJobTitle($jobTitle) {
        $this->jobTitle = $jobTitle;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function calculateSalaryAfterRaise($raisePercentage) {
        $raiseAmount = $this->salary * ($raisePercentage / 100);
        $newSalary = $this->salary + $raiseAmount;
        return $newSalary;
    }
    

}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Employee</title>
</head>
<body>
    <h2>Add Employee</h2>
    <form method="post" action="add_employee.php">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br>

        <label for="jobTitle">Job Title:</label>
        <input type="text" name="jobTitle" id="jobTitle"><br>

        <label for="salary">Salary:</label>
        <input type="number" name="salary" id="salary"><br>

        <input type="submit" value="Add Employee">
    </form>
</body>
</html>
<?php
// Include the Employee class
include 'employee.php';

// Check if the form has been submitted
if (isset($_POST['name']) && isset($_POST['jobTitle']) && isset($_POST['salary'])) {
    // Get the form data
    $name = $_POST['name'];
    $jobTitle = $_POST['jobTitle'];
    $salary = $_POST['salary'];

    // Create a new Employee object
    $employee = new Employee($name, $jobTitle, $salary);

    // Print out the details of the new employee
    echo '<h3>Employee Added</h3>';
    echo 'Name: ' . $employee->getName() . '<br>';
    echo 'Job Title: ' . $employee->getJobTitle() . '<br>';
    echo 'Salary: $' . $employee->getSalary() . '<br>';
}

//"add_employee.php" müssen Sie nur noch den richtigen Pfad zur Employee-Klasse angeben.
?>
