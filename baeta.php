<!DOCTYPE html>
<html>
<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php"); ?>
    <title><?php echo "{$title}"; ?></title>
  <?php
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php");
    ?>
</head>
<body>
  <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/header.php"); ?>
  <form action="includes/json_baeta.php" method="post">
    <div class="group">
      <h1><input type="text" name="ordtak" placeholder="Orðtak" required></h1>
      <div class="ordtak">
        <div class="utskyring">
          <input type="text" name="utskyra" placeholder="Útskýring" required>
        </div>
        <textarea rows="5" cols="40" name="uppruni" placeholder="Uppruni" required></textarea>
        <div class="daemi">
          <p class="daemi-text">Dæmi:</p>
          <input type="text" name="daemi" placeholder="Dæmi" required>
        </div>
        <div class="submit">
          <input class="sub" type="submit" value="staðfesta">  
        </div>
      </div>
    </div>
</form>
</body>
</html>