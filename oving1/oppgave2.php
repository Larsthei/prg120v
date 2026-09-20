<?php   /* Oppgave 2  */
/*
/*  Programmet mottar fornavn, etternavn og alder fra et HTML-skjema ved POST-metoden. 
/*  Programmet skriver ut en god dag-melding
/* */

$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$alder=$_POST["alder"]; /* Variable gitte verdier fra feltene i HTML-skjemaet */

print ("God dag $fornavn $etternavn, du er $alder år og like sprek");

?>
