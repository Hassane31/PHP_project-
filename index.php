<?php
//passing argument by reference and return the type declaration 

function add_5($number){
   $number+=5;
   return $number;
} 
$n = 15;
echo add_5($n);//20
echo '<br>$n = '.$n;//15

echo "<br><br>#######################<br><br>";

function add_5_p2(&$number){
   $number+=5;
   return $number;
} 
$n = 15;
echo add_5_p2($n);//20
echo '<br>$n = '.$n;//20
echo "<br>";
//return type declaration

function calculate($n1,$n2):int{
    return$n1+$n2;
}
echo gettype(calculate(10.5,9.5));//integer
 