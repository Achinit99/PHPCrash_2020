<?php

// Declaring numbers
    $a = 5;
    $b = 4;
    $c = 1.2;

// Arithmetic operations
    echo ($a + $b) * $c.'<br>';
    echo $a - $b . '<br>';
    echo $a * $b . '<br>';
    echo $a / $b . '<br>';
    echo $a % $b . '<br><br>';

// Assignment with math operators
    //$a += $b; echo $a.'<br>';
    //$a -= $b; echo $a.'<br>';
    //$a *= $b; echo $a.'<br>';
    //$a /= $b; echo $a.'<br>';
    //$a %= $b; echo $a.'<br>';

// Increment operator
    echo  $a++ . '<br>';
    echo ++$a . '<br><br>';

// Decrement operator
    echo $a-- . '<br>';
    echo --$a . '<br><br>';

// Number checking functions
    is_float(1.25); // ture
    is_double(1.25); //ture
    is_int(5); // ture
    is_numeric("3.45"); // ture
    is_numeric("3g.45"); // false

// Conversion
    $strNumber = '12.34';
    $number = (int)$strNumber;
    var_dump($number);
    echo '<br><br>';

// Number functions
echo "abs(-15)" . abs(-15) . '<br>';
echo "pow(2, 3)" . pow(2, 3) . '<br>';
echo "sqrt(16)" . sqrt(16) . '<br>';
echo "max(2, 3)" . max(2, 3) . '<br>';
echo "min(2, 3)" . min(2, 3) . '<br>';
echo "round(2.4)" . round(2.4) . '<br>';
echo "round(2.6)" . round(2.6) . '<br>';
echo "floor(2.6)" . floor(2.6) . '<br>';
echo "ceil(2.4)" . ceil(2.4) . '<br>';

// Formatting numbers

// https://www.php.net/manual/en/ref.math.php
