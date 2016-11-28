<?php
include("animal.php"); 

$fauna1= new Animal("cienpies",100);
$fauna2= new Animal("araña",8);
echo "El animal 1 es:".$fauna1->getTipo()." "."y tiene"." ".
$fauna1->getNumPatas()." "."patas/pies"."<br>";
echo "El animal 2 es:".$fauna2->getTipo()." "."y tiene"." ".
$fauna1->getNumPatas()." "."patas/pies"."<br>";
?>