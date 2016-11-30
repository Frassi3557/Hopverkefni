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
        <div class="upload">
          <label for="url">Nafn</label>
          <input class="nafn" type="text" name="nafn" required>
          <img class="mynd-preview" src="<?= $url ?>">
          <textarea class="description"></textarea>
          <br><br>
          <input type="submit" value="BIRTA">
        </div>
      </form>
        
  </body>
</html>