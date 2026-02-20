<?php
//Array map ,Array Filter 

Function add_title($name,$last){
    return "Mr. ".$name."_".$last;
}
$first_names = ["Iness","yacine","Younes"];
$last_names = ["secret","Chaibout","Abdelaziz"];

echo "<pre>";
print_r(array_map("add_title",$first_names,$last_names));
echo "<pre>";
    // [0] => Mr. Iness_secret
    // [1] => Mr. yacine_Chaibout
    // [2] => Mr. Younes_Abdelaziz

echo "<pre>";
print_r(array_map(fn($f,$l)=>"Mr $f"."_$l ",$first_names,$last_names));
echo "<pre>";
//     [0] => Mr Iness_secret 
//     [1] => Mr yacine_Chaibout 
//     [2] => Mr Younes_Abdelaziz



//array filtre
function check_nums($num){
    return $num > 5;
}
 
$nums = [1 =>3 ,2 => 4,3 => 5,4 => 6,5 => 7,6 => 8];
echo "<pre>";
print_r(array_filter($nums,"check_nums"));//check if the num is greater than 5 in value
echo "</pre>";
    // [4] => 6
    // [5] => 7
    // [6] => 8

echo "<pre>";
print_r(array_filter($nums,"check_nums",ARRAY_FILTER_USE_KEY));//check if the num is greater than 5 in key
echo "</pre>";
    // [6] => 8

function check_nums2($num,$num2){
    return $num > 5 || $num2 > 5;
}

echo "<pre>";
print_r(array_filter($nums,"check_nums2",ARRAY_FILTER_USE_BOTH));//check if the num is greater than 5 in value or key
echo "</pre>";
    // [4] => 6
    // [5] => 7
    // [6] => 8
    