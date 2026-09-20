<!DOCTYPE html>
<html>  
  <head>
    <title>Oppgave 2</title>
    </head>
    <body>
      <h3>Oppgave 2</h3>

      <form method="post" action="" id="oppgave2" name="oppgave2">
        Hva er 3 ganger 3 ? <input type="text" id="svar" name="svar" required /> <br />
        <input type="submit" value="Fortsett" id="fortsett" name="fortsett" />
        <input type="reset" value="Nullstill" name="nullstill" id="nullstill" /> <br />
        </form>
</body>
</html>

<?php
if (isset($_POST ["fortsett"]))
  {
    $svar=$_POST ["svar"];

    if ($svar == "9")
      {
      print ("Riktig. 3 ganger 3 er 9.");
      }
      else
        {
          print ("Feil. 3 ganger 3 er ikke $svar. 3 ganger 3 er 9.");
        }

  }
?>