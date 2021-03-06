<html>
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php"); ?>
    <title><?php echo "{$title}"; ?></title>
    <?php
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php"); ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
     <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/header.php"); ?>
    <?php
      $string_json = file_get_contents('ordtok/ordtok.json');
        $json_ordtok = json_decode($string_json, true);
        for ($x = count($json_ordtok['ordtokFylki'])-1; $x>=0; $x=$x-1):
    ?>
    <div class="group">
      <h1><?php echo ucfirst($json_ordtok['ordtokFylki'][$x]['ordtak']) ?></h1>
      <!-- Klasi sem heldur utan um upplýsingar um orðtakið -->
      <div class="ordtak">
        <!-- Klasi sem heldur utan um útskýringuna á orðtakinu -->
        <div class="utskyring">
          <p><?php echo ucfirst($json_ordtok['ordtokFylki'][$x]['utskyring']) ?></p>
        </div>
        <p><?php echo ucfirst($json_ordtok['ordtokFylki'][$x]['uppruni']) ?></p>
        <!-- Klasi sem heldur utan um dæmið -->
        <div class="daemi">
          <p class="daemi-text">Dæmi:</p>
          <p><?php echo ucfirst($json_ordtok['ordtokFylki'][$x]['daemi']) ?></p>
        </div>
      </div>
    </div>
    <?php endfor; ?>
  </body>
</html>
