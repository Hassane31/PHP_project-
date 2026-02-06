<?php
//Built in String Function

echo chunk_split("laabane hassane ",3,"@");//laa@ban@e h@ass@ane@ @
echo"<br>";

echo "<pre>";
print_r(str_split("Hassane"));
echo "<pre>";

//display

    // [0] => H
    // [1] => a
    // [2] => s
    // [3] => s
    // [4] => a
    // [5] => n
    // [6] => e

echo "<pre>";
print_r(str_split("Hassane",2));
echo "<pre>";

//display 

    // [0] => Ha
    // [1] => ss
    // [2] => an
    // [3] => e


echo "<h1>hello iness</h1>";
echo "<br>";
echo strip_tags("<h1>hello iness</h1>");//delete all tags
echo "<br>";
echo strip_tags("<h1>hello iness</h1>","<h1>");//delete all tags except <h1>
echo "<br>";
echo nl2br("laabane\nhassane\ngoode\nguy");
