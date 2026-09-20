<?php

$navn = $_POST['navn'];

$navnedeler = explode(" ", $navn);

$fornavn = $navnedeler[0];
$etternavn = $navnedeler[1];

print "Fornavnet er $fornavn <br>";
print "Etternavnet er $etternavn <br>";

?>