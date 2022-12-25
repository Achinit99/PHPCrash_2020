<?php

// Function which prints "Hello I am Zura"
/* function hello()
{
  echo "Hello I am Achini";
}
hello(); */

// Function with argument
 /*    // 1 ->
    function hello($name)
    {
      echo "Hello I am $name";
    }
    hello('Achini');
    hello('Avishka'); */

    // 2 ->
/*     function hello($name)
    {
      return "Hello I am $name";
    }
     echo hello('Achini').'<br>';
     echo hello('Avishka').'<br>';
 */
// Create sum of two functions
/* function sum ($a, $b)
{
  return $a + $b;
}
echo sum (4, 10); */

// Create function to sum all numbers using ...$nums
/* function sum(...$nums) {
  $sum = 0;
  foreach ($nums as $n) {
    $sum += $n;
  }
  return $sum;
}
echo sum(1, 2, 3, 4, 5, 6); */

// Arrow functions
function sum(...$nums) {
  return array_reduce($nums, fn($newnums, $n) => $newnums + $n);
}
echo sum(1, 2, 3, 4, 5, 6);