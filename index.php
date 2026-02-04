<?php
//anonymous function 

function say_hello(){
    return 'hello world';
}
echo say_hello();

echo "<br>###############<br>";

$say_hi = function(){
    return "hello from hello (function 1)";
};
echo $say_hi();

echo "<br>###############<br>";
 
$say_hola = function($someone){
    return "hello from hola to $someone(function 2)";
};
echo $say_hola("iness");

echo "<br>###############<br>";

$msg = "i hope u doing well !!";

$say_hi_2 = function ($someone) use($msg){//inheritance variable $msg
    return "hi $someone $msg";
};

echo $say_hi_2("iness");

echo "<br>###############<br>";

//pass anonymous function to function 
$num= [10,12,323,233,12,12];
function add_five($item){
return $item + 5 ;
}//in normal we suppose to use for loop but :(look  ahead)
$num_after_adding_five = array_map("add_five",$num);
                                //array_map("function_name" , Tabel variable)
echo'<br><br>--------------------<br><br>';                                
echo "<pre>";                                
print_r($num_after_adding_five);
echo "</pre>";                                

$num_after_adding_ten = array_map(function($item){ return $item + 10; },$num);
                                //array_map("anonymous function" , Tabel variable)
echo'<br><br>--------------------<br><br>';                                
echo "<pre>";                                
print_r($num_after_adding_ten);
echo "</pre>";         
