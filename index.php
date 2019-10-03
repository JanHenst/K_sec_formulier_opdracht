<?php



 ?>

 <!DOCTYPE html>
 <html lang="nl" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="author" content="Jan van der Henst">
     <title>Formulier</title>
     <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
     <form action="send.php" method="post">
        Voornaam:
        <input type="text" class="Voornaam" maxlength="25" name="Voornaam"><br>
        Achternaam:
        <input type="text" class="Achternaam" maxlength="128" name="Achternaam"><br>
        Straat:
        <input type="text" class="Straat" maxlength="48" name="Straat">
        Huisnr:
        <input type="number" class="Huisnr" maxlength="11" name="Huisnr"><br>
        Postcode:
        <input type="number" class="Postcode1" maxlength="6" name="Postcode1">
        <input type="text" class="Postcode2" name="Postcode2"><br>
        Woonplaats:
        <input type="text" class="Woonplaats" maxlength="24" name="Woonplaats"><br>
        E-mail:
        <input type="text" class="E-mail" maxlength="254" name="Email"><br>
        Telefoonnummer:
        <input type="number" class="Telefoonnummer" maxlength="11" name="Telefoonnummer"><br>
        <input class="submit" type="submit">
      </form>
   </body>
 </html>
