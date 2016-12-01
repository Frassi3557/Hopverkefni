<!DOCTYPE html>
<html>
<head>
    <?php require($_SERVER['DOCUMENT_ROOT'] . "/2t/1811992029/hopverkefni/includes/title.php"); ?>
    <title><?php echo "{$title}"; ?></title>
    <?php
          require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/head.php");
    ?>
    <title><?php echo "{$title}"; ?></title>
</head>
<body>
  <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/1811992029/hopverkefni/includes/header.php"); ?>
    <div class="myndform">
        <form action="process.php" method="post">
            <fieldset>
                <input class="url" type="text" name="url" required placeholder="Slóð á myndina">
                <br><br>

                <input class="sub" type="submit" value="ÁFRAM">
            </fieldset>
        </form>
    </div>
</body>
</html>