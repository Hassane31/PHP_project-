<?php
//Filter var validate part-1 

$bool = "srgs";
var_dump(filter_var($bool, FILTER_VALIDATE_BOOL,FILTER_NULL_ON_FAILURE));
//if $bool = "any thing other True or False values it will returned NULL

echo "<br>";

$url = "https://www.youtube.com/";

var_dump(filter_var($url,FILTER_VALIDATE_URL));
//string(24) "https://www.youtube.com/" -> accept

$url = "wqfsda";
var_dump(filter_var($url,FILTER_VALIDATE_URL,FILTER_NULL_ON_FAILURE));
//NULL 
echo "<br>";

$url = "https://www.youtube.com/?id=100";
var_dump(filter_var($url,FILTER_VALIDATE_URL,[
    "flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));
//string(31) "https://www.youtube.com/?id=100" -> accept the three 


$ip = "192.168.1.1";
var_dump(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4));
//string(11) "192.168.1.1"


$ip = "222";
var_dump(filter_var($ip,FILTER_VALIDATE_IP,[
    "flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));
// NULL

$mac = "00:1A:2B:3C:4D:5E";
var_dump(filter_var($mac,FILTER_VALIDATE_MAC));
//  string(17) "00:1A:2B:3C:4D:5E"
