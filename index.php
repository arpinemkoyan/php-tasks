<?php
include "Mercedes.php";
include "Tesla.php";

$mercedes1 = new Mercedes("GL", "black", 2020, 240);
$tesla1 = new Tesla("M", "red", 2022, 300);

$mercedes1->message();
echo "</br>";
$tesla1->message();


?>