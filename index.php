<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
?>

<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <!--<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="style.css">-->

  <style>
    header, footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
  }
  </style>

  <title>Andrea Sclabas Blog</title>
</head>

<body>
  <header>
    <?php include "header.html"; ?>
  </header>

  <section id="content">
    <?php
      $articolo1_path = "articoli/articolo1.html";
      echo file_exists($articolo1_path) ? file_get_contents($articolo1_path) : "Il file articolo1.html non esiste.";
    ?>
  </section>

  <footer>
    <?php include "footer.html"; ?>
  </footer>

</body>
</html>