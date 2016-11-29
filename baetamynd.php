
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
        <h1>Endilega bættu við mynd í myndasafnið.</h1>
        <form action="process.php" method="post">
            <fieldset>
                <label for="url">URL á mynd</label>
                <input type="text" id="url" name="url" required>

                <br><br>

                <input type="submit" value="BIRTA">
            </fieldset>
        </form>
    </div>
</body>
</html>