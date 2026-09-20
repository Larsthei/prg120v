<?php  /* Oppgave 3  */
/*
/* Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden.
/* Programmet skriver ut de to tallene og summen og differansen av/mellom tallene
/* */

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"]; /* Variable gitte verdier fra feltene i HTML-skjemaet */

$sum=$tall1+$tall2; /* Beregner summen av tallene */
$differanse=$tall1-$tall2; /* Beregner differansen av tallene */

print ("tall 1 er $tall1 <br />");
print ("tall 2 er $tall2 <br />");
print ("<br />");
print ("summen er $sum <br />");
print ("differansen er $differanse <br />");
/* resultatene skrives ut på skjermen */

?>
