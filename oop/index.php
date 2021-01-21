<?php
require("animal.php");
require("Frog.php");
require("Ape.php");
$sheep = new Animal("shaun");

echo $sheep->name. "<br>"; // "shaun"
echo $sheep->legs. "<br>"; // 2
echo $sheep->cold_blooded. "<br><br>"; // false

$sungokong = new Ape("kera sakti");
echo $sungokong->yell(). "<br>"; // "Auooo"

$kodok = new Frog("buduk");
echo $kodok->jump() ; // "hop hop"
  
?>