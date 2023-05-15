<?php

$testo = $_GET['testo'];

$wordCensured = $_GET['wordCensured'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>
  <h1>Il testo originale è:</h1>
  <p><?php echo $testo ?></p>
  <span>il testo contiene <?php echo strlen($testo) ?> caratteri</span>
  <h2>La parola da censurare è:</h2>
  <p><?php echo $wordCensured ?></p>
  <span>la parola contiene <?php echo strlen($wordCensured) ?> lettere</span>
  <h2>Il testo con la parola censurata è:</h2>
  <div><?php echo str_replace($wordCensured,"***",$testo)?></div>

  
</body>
</html>