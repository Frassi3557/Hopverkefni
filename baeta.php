<!DOCTYPE html>
<html>
<head>
	<title>Hópverkefni</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheets/hopverkefni.css">
    <link rel="stylesheet" href="stylesheets/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <form action="includes/json_baeta.php" method="post">
        <fieldset>
            <p>JSON</p>
            Orðtak <input type="text" name="ordtak" required><br>
            Útskýring <input type="text" name="utskyra" required><br>
            Uppruni <input type="text" name="uppruni" required><br>
            Dæmi <input type="text" name="daemi" required><br>
            <input type="submit">
        </fieldset>  
    </form>
</body>
</html>