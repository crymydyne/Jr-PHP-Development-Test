<?php
// Define an array of names
$names = ["Alice", "Bob", "Charlie", "David", "Elizabeth"];

// Initialize a variable to store the longest name, assuming the first name is the longest
$longestName = $names[0];

// Loop through the array to find the longest name
foreach ($names as $name) {
    if (strlen($name) > strlen($longestName)) {
        $longestName = $name;
    }
}

// Display the longest name
echo "The longest name in the array is: $longestName";
?>