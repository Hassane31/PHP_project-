<?php
//array Slice , Array Splice

//array_slice
$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];

echo"<pre>";
print_r(array_slice($names, 2)); // from index 2
echo"</pre>";
echo "<br>";

    // [0] => Iness
    // [1] => Sara
    // [2] => Mhmd
    // [3] => Yara

echo"<pre>";
print_r(array_slice($names, -4)); // from index 2 like -4 
echo"</pre>";

    // [0] => Iness
    // [1] => Ali
    // [2] => Mhmd
    // [3] => Yara

echo"<pre>";
print_r(array_slice($names, 2, 2)); // from index 2 to index 2+2 = 4
echo"</pre>";

    // [0] => Mhmd
    // [1] => Sara
    
echo"<pre>";
print_r(array_slice($names, 2, -2)); // from index 2 to index -2 = 4 
echo"</pre>";
    
echo"<pre>";
print_r($names); // original array is not modified
echo"</pre>";

//-------------------------------------------------------------

$chars_with_string_keys = ["a" => "A", "b" => "B", "c" => "C", "d" => "D", "e" => "E"];
$chars_with_numeric_keys = [10 => "A", 11 => "B", 12 => "C", 13 => "D", 14 => "E"];

echo"<pre>";
print_r(array_slice($chars_with_string_keys, 3,2 )); 
echo"</pre>";

    // [d] => D
    // [e] => E

echo"<pre>";
print_r(array_slice($chars_with_numeric_keys, 3,2 )); 
echo"</pre>";

    // [0] => D
    // [1] => E

echo"<pre>";
print_r(array_slice($chars_with_numeric_keys, 3,2 ,true));//true to preserve keys 
echo"</pre>";

    // [13] => D
    // [14] => E



//-------------------------------------------------------------
//array_splice
$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];

echo "<pre>";
print_r(array_splice($names, 2)); // from index 2 and remove it from original array
print_r($names);
echo "</pre>";
echo "<br>";

//     [0] => Mhmd
//     [1] => Sara
//     [2] => Mona
//     [3] => Yara


$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];


echo "<pre>";
print_r(array_splice($names, -2)); //index -2  "Mona", "Yara" and remove it from original array
print_r($names);
echo "</pre>";
echo "<br>";

// Array
// (
//     [0] => Mona
//     [1] => Yara
// )
// Array
// (
//     [0] => Iness
//     [1] => Ali
//     [2] => Mhmd
//     [3] => Sara
// )


$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];

echo "<pre>";
print_r(array_splice($names, 2,-2)); // ["Mhmd", "Sara"] remove it from original array
print_r($names);
echo "</pre>";
echo "<br>";

//-------------------------------------------------------------

$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];

echo "<pre>";
print_r(array_splice($names, 2,2,["hassane","younes"])); // remove "Mhmd" and "Sara" and add "hassane","younes" in index 2
print_r($names);
echo "</pre>";
echo "<br>";

// Array
// (
//     [0] => Mhmd
//     [1] => Sara
// )
// Array
// (
//     [0] => Iness
//     [1] => Ali
//     [2] => hassane
//     [3] => younes
//     [4] => Mona
//     [5] => Yara
// )



$names = ["Iness", "Ali", "Mhmd", "Sara", "Mona", "Yara"];

echo "<pre>";
print_r(array_splice($names, 2,1,["hassane","younes"])); // remove "Mhmd" and add "hassane","younes" in index 2 
print_r($names);
echo "</pre>";
echo "<br>";

// Array
// (
//     [0] => Mhmd
// )
// Array
// (
//     [0] => Iness
//     [1] => Ali
//     [2] => hassane
//     [3] => younes
//     [4] => Sara
//     [5] => Mona
//     [6] => Yara
// )