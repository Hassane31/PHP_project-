<?php
//Array shift ,Array pop ,Array unshift , Array push  

$fruits = array("Banana", "Apple", "Mango", "Orange");
print_r($fruits);
echo "<br><br>";

//Array shift
$first = array_shift($fruits);
echo "Array shift : " . $first . "<br>";//Banana
print_r($fruits);
echo "<br><br>";

//array pop
$last =array_pop($fruits);
echo "Array pop : " . $last . "<br>";//Orange
print_r($fruits);
echo "<br><br>";

//array push    
array_push($fruits, "Grapes");
print_r($fruits);
echo "<br><br>";

//we can add 1 element jast with 
$fruits[] = "Watermelon";
print_r($fruits);
echo "<br><br>";

//we use array push to add more than 1 element in array
array_push($fruits, "Strawberry", "Pineapple");
print_r($fruits);
echo "<br><br>";

//array unshift use to add element in starting of array 
array_unshift($fruits, "Kiwi");
print_r($fruits);
echo "<br><br>";

// //display 
// Array ( [0] => Banana [1] => Apple [2] => Mango [3] => Orange )

// Array shift : Banana
// Array ( [0] => Apple [1] => Mango [2] => Orange )

// Array pop : Orange
// Array ( [0] => Apple [1] => Mango )

//array push    
// Array ( [0] => Apple [1] => Mango [2] => Grapes )

//$fruits[] = "Watermelon";
// Array ( [0] => Apple [1] => Mango [2] => Grapes [3] => Watermelon )

//array push to add more than 1 element in array
// Array ( [0] => Apple [1] => Mango [2] => Grapes [3] => Watermelon [4] => Strawberry [5] => Pineapple )

//array unshift use to add element in starting of array
// Array ( [0] => Kiwi [1] => Apple [2] => Mango [3] => Grapes [4] => Watermelon [5] => Strawberry [6] => Pineapple )