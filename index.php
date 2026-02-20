<?php
//Array Functions / Sorting Functions

$names = ["Iness","mhmd","sara","mohamed","bentata"];

sort($names); //sort in ascending order
    // [0] => Iness
    // [1] => bentata
    // [2] => mhmd
    // [3] => mohamed
    // [4] => sara

rsort($names); //sort in descending order 

$countries = ["1"=>"Tunisia","3"=>"Egypt","6"=>"Libya","9"=>"Algeria"];

asort($countries); //sort by value in ascending order
    // [9] => Algeria
    // [3] => Egypt
    // [6] => Libya
    // [1] => Tunisia

arsort($countries); //sort by value in descending order
    // [1] => Tunisia
    // [6] => Libya
    // [3] => Egypt
    // [9] => Algeria

ksort($countries); //sort by key in ascending order
    // [1] => Tunisia
    // [3] => Egypt
    // [6] => Libya
    // [9] => Algeria

krsort($countries); //sort by key in descending order
    // [9] => Algeria
    // [6] => Libya
    // [3] => Egypt
    // [1] => Tunisia

$files = ["file20.txt","file1.txt","file3.txt"];
    // [0] => file1.txt
    // [1] => file20.txt
    // [2] => file3.txt



natsort($files); //sort naturally like humans do

    // [0] => file1.txt
    // [2] => file3.txt
    // [1] => file20.txt