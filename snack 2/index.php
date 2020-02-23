<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$name = $_GET["name"];
$name_min_length = 3;

$mail = $_GET["mail"];
$find_1 = ".";
$find_2 = "@";

$age = $_GET["age"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-get-params2</title>
  </head>
  <body>
    <?php
    if (strlen($name) > $name_min_length){
      if (strpos($mail, $find_1) !== false && strpos($mail, $find_2) !== false) {
        if (is_numeric($age)){
          echo "Accesso riuscito";
        } else {
          echo "Accesso negato";
        }
      } else {
        echo "Accesso negato";
      }
    } else {
      echo "Accesso negato";
    }
    ?>
  </body>
</html>
