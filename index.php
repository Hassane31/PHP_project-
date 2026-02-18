<?php
//string functions 

$str = "welcome to php programming";

echo strlen($str); // 26
echo "<br>";

echo wordwrap($str,3,"<br>");

// welcome
// to
// php
// programming

echo wordwrap($str,3,"<br>",true);

// wel
// com
// e
// to
// php
// pro
// gra
// mmi
// ng

echo "<br>";
echo ord("a"); // 97
echo "<br>";
echo ord("A"); // 65
echo "<br>";
echo chr(97); // a
echo "<br>";

echo similar_text("programming","programmingo");//11
echo "<br>";

echo similar_text("programming","programmingo",$percent); 
echo "<br>";

echo $percent; // 95.652173913043

echo "<br>";