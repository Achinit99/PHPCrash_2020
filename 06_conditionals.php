<?php

$age = 20;
$salary = 300000;

// Sample if
// if ($age === 20) {
//   echo "1";
// }

// Without circle braces
// if ($age === 20) echo "1";


// Sample if-else
// if ($age > 20) {
//   echo "1";
// } else {
//   echo "2";
// }

// Difference between == and ===
// $age == 20; // true
// $age == '20'; // true

// $age === 20; // true
// $age === '20'; // false

// if AND
/*     // 1 -> 
    if ($age == 20 && $salary === 300000) {
      echo "Do something";
    }

       // 2 -> 
    if ($age > 20 || $salary === 300000) {
      echo "Do something";
    } */

// if OR

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: 18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator
$myName = isset($name) ? $name : 'Achini';
$mtName = $name ?? 'Achini';

// switch
$userRole = 'admin'; // editor, user, admin
switch ($userRole) {
  case 'admin':
    echo 'admin';
    break;

  case 'editor':
    echo 'editor';
    break;

  case 'user':
    echo 'user';
    break;
  
  default :
    echo 'Invalid role';
}
