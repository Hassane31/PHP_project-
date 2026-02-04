<?php
//Function variable and function exists

function one(){
    return "returned from one function ";
}

//echo one();
$func1 = "one";
echo "<br>.......<br>";
echo $func1() ;
echo "<br>.......<br>";

function say_hello_to_someone($someone){
    return"hello $someone";
}
$func2="say_hello_to_someone";

echo $func2("hassane");

//check if funtion exists 
echo "<br>";
if(function_exists("testing")){
    echo "function is exists";
}
else {
    echo "fuction dosnt exists";
}
echo "<br>";

//echo strlen("hassane"); //7
$func3= "strlen";
echo $func3("hassane"); //7