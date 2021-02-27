<html>
   <head>
      <title>Stock d'images</title>
   </head>
   <body>

<?php
    echo "oui";
    $hote = 'localhost';
    $base = 'compte_japon';
    $user = 'root';
    $pass = 'root';
    $cnx = mysql_connect($hote, $user, $pass) or  die(mysql_error());
    echo 'Connexion réussie';
    $ret = mysql_select_db($base) or die(mysql_error());
?>

</body>
</html>