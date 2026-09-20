<?php

$tall1 = $_POST['tall1'];
$tall2 = $_POST['tall2'];
$tall3 = $_POST['tall3'];
$tall4 = $_POST['tall4'];
$tall5 = $_POST['tall5'];

$tall = array($tall1, $tall2, $tall3, $tall4, $tall5);

for ($i = 0; $i <= 4; $i++)
{
print("$tall[$i] ");
}

?>
