<?php
//Array With Complex Tests
echo '<pre>';
print_r([
0 => "ahmed",
"A"=>"mhmood",
"B"=>"warii",
"hassane"
]);
echo '<pre>';
echo '<br>';


echo '<pre>';
print_r([
0 => "ahmed",
"A"=>"mhmood",
"B"=>"warii",
"hassane",
"mhmhd" => [
    "1",
    "2",
    "3"
]
]);
echo '<pre>';



//display
/*
Array
(
    [0] => ahmed
    [A] => mhmood
    [B] => warii
    [1] => hassane
)


Array
(
    [0] => ahmed
    [A] => mhmood
    [B] => warii
    [1] => hassane
    [mhmhd] => Array
        (
            [0] => 1
            [1] => 2
            [2] => 3
        )

)
 */