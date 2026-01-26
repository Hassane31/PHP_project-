<?php 
//If, Elseif, Else - Basics -REAL LIFE EXAMPlEs

$page = "about";

if($page == "about"){
    echo "this is About page ";
}
echo '<br>';

$title = "Home";
 
if ($title == "Home"){
    echo "<h1>Home Page</h1>";
}
elseif($title == "") {
    echo "<h1>Unknown Page</h1>";
}

echo '<br>';
$lang = "Arabic";
if ($lang == "Arabic"){
    echo 'mar7ba';
}
elseif($lang == "English"){
    echo "hello ";
}
elseif($lang == "Spanish"){
    echo "hola";
}
else {
    echo "Unknown Language !!!";
}