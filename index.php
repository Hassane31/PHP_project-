<?php
//Array marge ,Array replace ,array rand ,Shuffle

$marge_one = ["One"=>"PHP","Two"=>"Java","Three"=>"Python"];
$marge_two = ["One"=>"C++","Four"=>"C#","Five"=>"JavaScript"];

echo "<pre>";
print_r(array_merge($marge_one,$marge_two));
echo "</pre>"; 

    // [One] => C++
    // [Two] => Java
    // [Three] => Python
    // [Five] => C#
    // [Six] => JavaScript


$marge_three = [10=>"PHP",20=>"Java",30=>"Python"];
$marge_four = [10=>"C++",40=>"C#",50=>"JavaScript"];
echo "<pre>";
print_r(array_merge($marge_three,$marge_four));
echo "</pre>";

    // [0] => PHP
    // [1] => Java
    // [2] => Python
    // [3] => C++
    // [4] => C#
    // [5] => JavaScript



$replace_one = ["One"=>"PHP","Two"=>"Java","Three"=>"Python"];
$replace_two = ["One"=>"C++","Four"=>"C#","Five"=>"JavaScript"];    

echo "<pre>";
print_r(array_replace($replace_one,$replace_two));
echo "</pre>";

    // [One] => C++
    // [Two] => Java
    // [Three] => Python
    // [Four] => C#
    // [Five] => JavaScript

$replace_three = [10=>"PHP",20=>"Java",30=>"Python"];
$replace_four = [10=>"C++",40=>"C#",50=>"JavaScript"];
echo "<pre>";   
print_r(array_replace($replace_three,$replace_four));
echo '</pre>'  ;

    // [10] => C++
    // [20] => Java
    // [30] => Python
    // [40] => C#
    // [50] => JavaScript

$array_rand = ["PHP","Java","Python","C++","C#"];

echo $array_rand[array_rand($array_rand)];
echo "<br>";

//will return a random value from the array

echo "<pre>";
print_r(array_rand($array_rand,3));
echo "</pre>";

//will return 3 random keys from the array

$array_shuffle = ["PHP","Java","Python","C++","C#"];
shuffle($array_shuffle);
echo "<pre>";
print_r($array_shuffle);   
echo "</pre>";

//will shuffle the array and return the new array with random order