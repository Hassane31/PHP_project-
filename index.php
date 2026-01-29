<?php
//Break , continue 

$countries = ["EG","DZ","FR","USA","UK","USK"];


foreach($countries as $country){
// if u dont want USA with...
// if($country == "USA"){
//   break ;
// }
echo $country."<br>";

if($country == "USA"){
  break ;
   }

}

echo "###################<br>";
foreach($countries as $country){
// if u dont want USA with...
// if($country == "USA"){
//   break ;
// }
echo $country."<br>";
if($country == "USA"){
  continue;
   }

}