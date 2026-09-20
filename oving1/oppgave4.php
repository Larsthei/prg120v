<?php  /* Oppgave 4 */

/*
/* Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/* Programmet skriver ut de 2 tallene og beregner sum, differanse, produkt og kvotient
/*  */

$tall1=$_POST["tall1"];
$tall2=$_POST["tall2"]; /* Variable gitte verdier fra feltene i HTML-skjemaet */

$sum=$tall1+$tall2; /* Beregner summen av tallene */
$differanse=$tall1-$tall2; /* Beregner differansen av tallene */
$produkt=$tall1*$tall2; /* Beregner produktet av tallene */
$kvotient=$tall1 / $tall2; /* Beregner kvotienten av tallene */

print ("tall 1 er $tall1 <br />");
print ("tall 2 er $tall2 <br />");
print ("<br />");
print ("summen er $sum <br />");
print ("differansen er $differanse <br />");
print ("produktet er $produkt <br />");
print ("kvotienten er $kvotient <br />"); 
/* resultatene skrives ut på skjermen */

?>
