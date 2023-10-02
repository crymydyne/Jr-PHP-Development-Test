<?php
class Person {
    private $firstName;
    private $lastName;
    private $dob;

    public function __construct($firstName, $lastName, $dob) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->dob = $dob;
    }

    public function getAge() {
        // Calculate age based on date of birth
        $dobTimestamp = strtotime($this->dob);
        if ($dobTimestamp === false) {
            return "Invalid date of birth format.";
        }

        $currentDate = new DateTime();
        $dobDate = new DateTime(date('Y-m-d', $dobTimestamp));
        $age = $currentDate->diff($dobDate)->y;

        return $age;
    }

    public function displayInfo() {
        echo "Name: {$this->firstName} {$this->lastName}\n";
        echo "Date of Birth: {$this->dob}\n";
        echo "Age: {$this->getAge()} years\n";
    }
}

// Create an object of the "Person" class and set attributes
$person = new Person("Fabio", "Ferreira", "1998-02-16");

// Display person's information and age
$person->displayInfo();
?>