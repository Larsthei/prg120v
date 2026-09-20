<!doctype html>
<html lang="no">

<head>
  <meta charset="utf-8">
  <title>Oppgave 3</title>
</head>

<body>

<form method="post">
  Er du student?
  <input type="text" name=student>
  <input type="submit" name="send" value="Svar">
</form>

<?php

if (isset($_POST["send"])) {

$student = $_POST["student"];

if ($student == "") {
  print("Du har ikke svart på spørsmålet om du er student.");
}

elseif ($student == "j" or $student == "J" or $student == "ja" or $student == "Ja" or $student == "JA") {
  print("Du har svart ja på spørsmålet om du er student.");
}

elseif ($student == "n" or $student == "N" or $student == "nei" or $student == "Nei" or $student == "NEI") {
  print("Du har svart nei på spørsmålet om du er student.");
}

else {
  print("Du har ikke svart ja eller nei på spørsmålet om du er student");
}
}

?>

</body>
</html>
