<?php
// Define an array of numbers
$numbers = [5, 10, 2, 8, 15, 7];

// Initialize a variable to store the sum
$sum = 0;

// Loop through the array to calculate the sum
foreach ($numbers as $number) {
    $sum += $number;
}

// Display the sum
echo "The sum of all elements in the array is: $sum";
?>