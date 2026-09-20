<!doctype html>
<html lang="no">

<head>
    <meta charset="utf-8">
    <title>Oppgave 2</title>
  </head>

  <body>

  <form method="post">
    Er du student (j/n)?
    <input type="text" name="student">
    <input type="submit" name="send" value="Svar">
  </form>

  <?php
  if (isset($_POST["send"])) {

  $student = $_POST["student"];

  if ($student == "") {
    print("Du har ikke svart på spørsmålet om du er student.");
  }

  elseif ($student == "j") {
    print("Du har svart ja på sprøsmålet om du er student.");
  }

  elseif ($student == "n") {
    print("Du har svart nei på spørsmålet om du er student.");
  }

  else {
    print("Du har ikke svart med j eller n.");
  }

  ?>

  </body>
</html>