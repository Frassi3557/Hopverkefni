<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php");
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/hopverkefni/includes/head.php");
    ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/hopverkefni/includes/header.php"); ?>
      <?php
      $string_json = file_get_contents('ordtok/myndir.json');
        $json_ordtok = json_decode($string_json, true);
        for ($x = 0; $x <= count($json_ordtok['myndirFylki'])-1; $x++):
        ?>
        <div>
          <h1><?php echo ucfirst($json_ordtok['myndirFylki'][$x]['nafn']) ?></h1>
          <!-- Klasi sem heldur utan um upplýsingar um orðtakið -->
          <div>
            <!-- Klasi sem heldur utan um útskýringuna á orðtakinu -->
            <div>
              <img src="<?php echo ucfirst($json_ordtok['myndirFylki'][$x]['url']) ?>">
            </div>
            <p><?php echo ucfirst($json_ordtok['myndirFylki'][$x]['description']) ?></p>
          </div>
        </div>
        <?php endfor; ?>
  </body>
</html>