<!DOCTYPE html>
<html lang="en">
  <head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php");
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/hopverkefni/includes/head.php");
    ?>
    <title><?php echo "{$title}"; ?></title>
  </head>
  <body>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/hopverkefni/includes/header.php");
      $url = $_POST['url']; ?>
      <img class="display-image" src="<?= $url ?>">
  </body>
</html>