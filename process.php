<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php");
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php");
    ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/header.php");
      $url = "http://i.imgur.com/SM0p1x3.png" ?>
      <form action="process.php" method="post">
        <label for="url">URL á mynd</label>
        <input type="text" id="url" name="nafn" required>
        
        <br><br>
        
        <input type="submit" value="BIRTA">
      </form>
      <div class="mynd-preview-group">
        <img class="mynd-preview" src="<?= $url ?>">
      </div>
  </body>
</html>