<?php

print("<form method='post'>");

print("skriv inn et positivt heltall: ");
print("<input type='text' name='tall'>");

print("<input type='submit' value='Send'>");

print("</form>");

if (isset($_post["tall"]))
  {
    $tall = $_post["tall"];
  
    for ($i = 1; $i <= $tall; $i++)
      {
        print("$i <br>");
      }
  }

  ?>
  