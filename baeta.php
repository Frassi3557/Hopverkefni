<!DOCTYPE html>
<html>
<head>
  <?php
      require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php");
    ?>
</head>
<body>
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
    </div>
  </div>
  <input class="sub" type="submit">  
</form>
</body>
</html>