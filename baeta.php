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