<?php
//Arrow function 

$say_hi = fn() => "hello from hello (function 1)";
echo $say_hi();

echo "<br>###############<br>";
 
$say_hola = fn($someone) => "hello from hola to $someone(function 2)";
echo $say_hola("iness");

echo "<br>###############<br>";

$msg = "i hope u doing well !!";
//inheritance variable $msg without USE() in arrow function 
$say_hi_2 = fn ($someone) => "hi $someone $msg";
echo $say_hi_2("iness");

echo "<br>###############<br>";

$num= [10,12,323,233,12,12];

$num_after_adding_ten = array_map(fn($item) => $item +5,$num);
                                //array_map("anonymous function" , Tabel variable)
echo'<br><br>--------------------<br><br>';                                
echo "<pre>";                                
print_r($num_after_adding_ten);
echo "</pre>";         

