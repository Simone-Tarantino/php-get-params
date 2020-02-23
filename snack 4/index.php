<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
<?php
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
  'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <title>php-get-params-4</title>
  </head>
  <body>
    <div class="grey">
      <?php
        for ($i = 0; $i < count($db["teachers"]); $i++){
          echo "<li>" . $db["teachers"][$i]["name"] . " " . $db["teachers"][$i]["lastname"] . "</li>";
        }
      ?>
    </div>
    <div class="green">
      <?php
      for ($i = 0; $i < count($db["pm"]); $i++){
        echo "<li>" . $db["pm"][$i]["name"] . " " . $db["pm"][$i]["lastname"] . "</li>";
      }
      ?>
    </div>
  </body>
</html>
