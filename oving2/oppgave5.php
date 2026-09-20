<!doctype html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <title>Oppgave5</title>
</head>

<body>

<form method="post">

Tall 1:
<input type="text" name=tall1>
<br>

Tall 2:
<input type="text" name=tall2>
<br>

Regneoperasjon 1-4:
<input type="text" name=regneoperasjon>
<br>

<input type="submit" name="send" value="Beregn">

</form>

<?php

if (isset($_POST["send"])) {

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];
$regneoperasjon = $_POST["regneoperasjon"];

if ($regneoperasjon == 1) {
  $resultat = $tall1 + $tall2;
  print("Tall 1 er $tall1 <br>");
  print("Tall 2 er $tall2 <br>");
  print("Regneoperasjonen er Addisjon <br>");
  print("Resultatet av regneoperasjonen er $resultat");
}

elseif ($regneoperasjon == 2) {
  $resultat = $tall1 - $tall2;
  print("Tall 1 er $tall1 <br>");
  print("Tall 2 er $tall2 <br>");
  print("Regneoperasjonen er Subtraksjon <br>");
  print("Resultatet av regneoperasjonen er $resultat");
}

elseif ($regneoperasjon == 3) {
  $resultat = $tall1 * $tall2;
  print("Tall 1 er $tall1 <br>");
  print("Tall 2 er $tall2 <br>");
  print("Regneoperasjonen er Multiplikasjon <br>");
  print("Resultatet av regneoperasjonen er $resultat");
}

elseif ($regneoperasjon == 4) {
  $resultat = $tall1 / $tall2;
  print("Tall 1 er $tall1 <br>");
  print("Tall 2 er $tall2 <br>");
  print("Regneoperasjonen er Divisjon <br>");
  print("Resultatet av regneoperasjonen er $resultat");
}

else {
  print("Det er ikke angitt en gyldig regneoperasjon.");
}

}

?>

</body>
</html>