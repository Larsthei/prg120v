<!doctype html>
<html lang="no">

<head>
  <meta charset="utf-8">
  <title>Oppgave 6</title>
</head>

<body>

<form method="post">

Tall 1:
<input type="text" name="tall1">
<br>  

Tall 2:
<input type="text" name="tall2">
<br>

<input type="submit" name="send" value="Sammenlign">

</form>

<?php

if (isset($_POST["send"])) {

$tall1 = $_POST["tall1"];
$tall2 = $_POST["tall2"];

print("Tall 1 er $tall1 <br>");
print("Tall 2 er $tall2 <br>");

if ($tall1 > $tall2) {
  print("Tall 1 er større enn tall 2");
}

if ($tall1 < $tall2) {
  print("Tall 1 er mindre enn tall 2");
}

if ($tall1 == $tall2) {
  print("Tall 1 er lik tall 2");
}

}

?>

</body>
</html>