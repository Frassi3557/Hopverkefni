<?php
    $nafn = $_POST['nafn'];
    $utskyring = $_POST['utskyra'];
    $ordtak = $_POST['ordtak'];
    //get from file
    $jso = file_get_contents('../ordtok/ordordtok.json');
    //dceode object from file
    $obj = json_decode($jso);
    //display error
    if (!$obj) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);

    // CREATE SOME NEW DATA TO APPEND TO THE komp ARRAY
    $new = new StdClass;
    $new->title = $nafn;
    $new->img = $utskyring;
    $new->img = $ordtak;

    // INJECT SOME DATA INTO THE OBJECT
    $obj->ordtokFylki[] = $new;


    // RENDER THE NEW JSON STRING
    //encode back to json for storage
    $final_obj = json_encode($obj);
    file_put_contents('../ordtok/ordordtok.json', $final_obj);
?>
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
    /*<?php require 'includes/header.php'; ?>*/
    <h1>Þú hefur bætt við orðtaki</h1>
    <h2><a href="../index.php">Fara ftur heim.</a></h2>
</body>
</html>