<!doctype html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <title>Oppgave 4</title>
</head>

<body>

<form method="post">
  Er du gift (j/n)?
  <input type="text" name="gift">
  <br>

  Har du barn (j/n)?
  <input type="text" name="barn">
  <br>

  <input type="submit" name="send" value="Svar">
</form>

<?php

if (isset($_POST["send"])) {

$gift = $_POST["gift"];
$barn = $_POST["barn"];

if ($gift == "" or $barn == "") {
  print("Du har ikke svart på begge spørsmålene om du er gift og om du har barn.");
}

elseif (($gift != "j" and ($gift) != "n") or ($barn) != "j" and ($barn) != "n") {
  print("Du har svart noe annet enn j eller n.")
  }
  
  elseif ($gift == "j" and $barn == "j") {
    print("Du er gift og har barn.");
  }

  elseif ($gift == "j" and $barn == "n") {
    print("Du er gift og har ikke barn.");
  }

  elseif ($gift == "n" and $barn == "j") {
    print("Du er ikke gift og har barn.");
  }

}

?>

</body>
</html>