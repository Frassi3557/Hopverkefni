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
      $url = $_POST['url'] ?>
      <form action="myndir.php" method="post">
        <div class="upload">
          <input class="nafn" type="text" name="nafn" required placeholder="Nafn / Titill">
          <img class="mynd-preview" src="<?= $url ?>">
          <textarea class="description"></textarea>
          <br><br>
          <input class="sub" type="submit" value="birta mynd">
        </div>
      </form>
        
  </body>
</html>