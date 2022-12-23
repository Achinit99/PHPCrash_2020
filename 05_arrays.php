<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Get element by index
echo $fruits[2] . '<br>';

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Check if array has element at index 2
isset($fruits[3]); // false

// Append element
$fruits[] = 'Banana';
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array

// Remove element from the end of the array

// Add element at the beginning of the array

// Remove element from the beginning of the array

// Split the string into an array

// Combine array elements into string

// Check if element exist in the array

// Search element index in the array

// Merge two arrays

// Sorting of array (Reverse order also)


// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays