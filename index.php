<?php
//String functions part 1

echo strstr("Hello world", "world"); //returns the part of the string starting from the first occurrence of "world"
echo "<br>";

echo strstr("Hello world", "lo"); //lo world
echo "<br>";

echo strstr("Hello world", "lo",true); //hel
echo "<br>";        

echo strpos("Hello world", "world"); //returns the position of the first occurrence of "world"
echo "<br>";        

var_dump(strstr("Hello world", "W")); //bool(false)echo "<br>";        
echo stristr("Hello world", "LO"); //lo world
echo "<br>";

echo var_dump(stristr("Hello world", "lo"));//string(8) "lo world"
echo "<br>";

echo 10_000_000;//10000000
echo "<br>";

echo number_format(1000000000.23423423);//1,000,000,000
echo "<br>";
echo number_format(1000000000.23423423,3);//1,000,000,000.234 

echo "<br>";
echo number_format(1000000000.23423423,3,"@");//1,000,000,000@234


echo "<br>";
echo number_format(1000000000.23423423,3,"@","A");//1A000A000A000@234

