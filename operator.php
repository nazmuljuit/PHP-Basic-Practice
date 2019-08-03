<?php
/*Operator are performs operation to variable or value
There are 7 types of operator at PHP
1.Arithmetic operators
2.Assignment operators
3.Comparison operators
4.Increment/Decrement operators
5.Logical operators
6.String operators
7.Array operators

*/

//PHP Arithmetic operators
//addition
$x = 10;  
$y = 6;

echo $x + $y."<br>";
//subtraction
$x = 10;  
$y = 6;

echo $x - $y."<br>";
//subtraction
$x = 10;  
$y = 6;

echo $x - $y."<br>";
//multiplication
$x = 10;  
$y = 6;

echo $x * $y."<br>";
//Division
$x = 10;  
$y = 6;

echo $x / $y."<br>";
//Modulus
$x = 10;  
$y = 6;

echo $x % $y."<br>";
//Assignment operators
              
              $x = 12;
              $y = 17;
              $x /= $y; 
              $x += $y; 
              $x -= $y; 
              $x *= $y; 
              $x %= $y; 
//Comparision operators
              $d = 5.0;
              $e = 5;
              $d == $e;
              $d !== $e;//not identical
//array operator
            $x = array(0=>2,2=>4,5=>6);
           $y = array(3=>5,4=>7,8=>9);
           print_r($x + $y);
?>