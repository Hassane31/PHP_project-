<?php
//String Functions str_replace str_ireplace 
//syntax 

//str_replace (Find[required] , replace[required],Data[required],replace count [Opitional])
echo str_replace("@","a","L@@b@ne H@ss@ne",$r);//----> Laabane Hassane
echo "<br> Reaplaces count : ".$r;//---> 5
echo "<br>";


echo str_replace(["@","#"],"a","L@#b#ne H@ss#ne",$r);//----> Laabane Hassane
echo "<br>";

echo str_replace(["@","#"],["l","a"],"L@##@@# H@ss#ne",$r);//----> Llaalla Hlssane
echo "<br>";

echo "<pre>";
print_r(str_replace("One",1,["One","Two","Three","One","One"]));
echo "</pre>";

    // [0] => 1
    // [1] => Two
    // [2] => Three
    // [3] => 1
    // [4] => 1


echo "<pre>";
print_r(str_replace(["One","Two"],[1,2],["One","Two","Three","One","One"]));
echo "</pre>";

    // [0] => 1
    // [1] => 2
    // [2] => Three
    // [3] => 1
    // [4] => 1

echo "<pre>";
print_r(str_replace(["One","Two","Three"],[1,2],["One","Two","Three","One","One"]));
echo "</pre>";

    // [0] => 1
    // [1] => 2
    // [2] => 
    // [3] => 1
    // [4] => 1


echo "<pre>";
print_r(str_replace(["one","two"],[1,2],["One","Two","Three","One","One"]));
echo "</pre>";

  //no changes cuz its sensitive string
//use ireplace 
echo "<pre>";
print_r(str_ireplace(["one","two"],[1,2],["One","Two","Three","One","One"]));
echo "</pre>";

    // [0] => 1
    // [1] => 2
    // [2] => Three
    // [3] => 1
    // [4] => 1

