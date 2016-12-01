<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php");
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php");
    ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/header.php"); ?>
      <?php
      $string_json = file_get_contents('ordtok/myndir.json');
        $json_myndir = json_decode($string_json, true);
        for ($x = count($json_myndir['myndirFylki'])-1; $x>=0; $x=$x-1):
        ?>
        <div class="group">
          <h1><?php echo ucfirst($json_myndir['myndirFylki'][$x]['nafn']) ?></h1>
          <!-- Klasi sem heldur utan um upplýsingar um orðtakið -->
          <div class="ordtak">
            <!-- Klasi sem heldur utan um útskýringuna á orðtakinu -->
            <div class="utskyring">
              <img src="<?php echo ucfirst($json_myndir['myndirFylki'][$x]['url']) ?>">
            </div>
            <p><?php echo ucfirst($json_myndir['myndirFylki'][$x]['description']) ?></p>
          </div>
        </div>
        <?php endfor; ?>
  </body>
</html>