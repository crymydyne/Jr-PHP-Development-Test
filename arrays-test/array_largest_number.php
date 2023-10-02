<?php
// Define an array of numbers
$numbers = [5, 10, 2, 8, 15, 7];

// Initialize a variable to store the largest number, assuming the first element is the largest
$largest = $numbers[0];

// Loop through the array to find the largest number
foreach ($numbers as $number) {
    if ($number > $largest) {
        $largest = $number;
    }
}

// Display the largest number
echo "The largest number in the array is: $largest";
?>