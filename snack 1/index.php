<!-- Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa. -->
<?php
  $password = ucfirst($_GET["psw"]);
  if ($password == "Boolean") {
    $color = "green";
  } else {
    $color = "red";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-get-params</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <p class="<?php echo $color; ?>">
      <?php echo $password; ?>
    </p>
  </body>
</html>
