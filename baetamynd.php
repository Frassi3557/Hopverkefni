
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
  <?php require($_SERVER['DOCUMENT_ROOT'] . "/2T/0506992429/hopverkefni/includes/header.php"); ?>
    <div class="myndform">
        <h1>Endilega bættu við mynd í myndasafnið.</h1>
        <form action="json_baeta_mynd.php" method="post">
            <fieldset>
                <label for="mname">Nafn á mynd</label>
                <input type="text" id="mname" name="myndNafn" required>

                <label for="url">URL á mynd</label>
                <input type="text" id="url" name="myndaslod" required>

                <br><br>

                <input type="submit" value="BIRTA">
            </fieldset>
        </form>
    </div>
</body>
</html>