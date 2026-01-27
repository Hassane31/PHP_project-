<?php

//Nested if And advanced practice
$name = "ousama";
$is_student = true ;
$is_orphan  = true ;
$country = "egypet";
$country_discount = 50 ;
$price = 100 ;
$student_discount = 10;
$orphan_discount = 15 ;


if($country){

  if($is_student){
     
    if ($is_orphan){
    echo "hello $name";
    echo'<br>';
    echo "this account have country discount : $country_discount 
    <br>And student discount : $student_discount
    <br>And orphan discount : $orphan_discount";
    
    echo "<br>the finel price is :" .$price - $country_discount- $student_discount-$orphan_discount. "Dzd";  
    }
    else {
         echo "hello $name";
    echo'<br>';
    echo "this account have country discount : $country_discount 
    <br>And student discount : $student_discount";
    echo "<br>the finel price is :" .$price - $country_discount-$student_discount. "Dzd";
    }

  }
  else{
    echo "hello $name";
    echo'<br>';
    echo "this account have jast country discount : $country_discount ";
    echo "<br>the finel price is :" .$price - $country_discount . "Dzd";
  }

}
else{
    echo "hello $name";
    echo'<br>';
    echo "this account have no discount";
    echo "<br>the finel price is : $price";
}
