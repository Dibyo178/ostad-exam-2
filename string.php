<?php

// Define the array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count the vowels in a string
function countVowels($string) {
    $vowels = 'aeiou';
    $count = 0;
    $string = strtolower($string);
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $count++;
        }
    }
    return $count;
}

// Iterate over each string in the array
foreach ($strings as $string) {
    // Count the vowels
    $vowelCount = countVowels($string);
    
    // Reverse the string
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString\n";
}
?>
