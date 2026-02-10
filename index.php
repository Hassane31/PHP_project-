<?php
//built in String Functions - Part 4 

//strpos(string,search string,string index start)
var_dump(strpos("hello world","w",6));//int(6) or //bool(false) 
echo '<br>';

var_dump(stripos("hello world","w"));//int(6)
echo '<br>';

var_dump(strpos("hello world","H",-2));//bool(false) 
echo '<br>';

var_dump(strpos("hello world","l",-2));//int(9)
echo '<br>';

var_dump(strrpos("hello world","l"));//int(9) //the last 'l' in the string 
echo '<br>';

var_dump(substr_count("Hello Hello","He",1/**start string*/));// int(1)
echo '<br>';

var_dump(substr_count("Hello Hello","He",1,7/* H | ello Hel | lo */));// int(1)
echo '<br>';

var_dump(substr_count("abcdabcd","abcda"));// int(1)


