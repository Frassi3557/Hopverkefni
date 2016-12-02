<?php
	$url = $_POST['url'];
	$nafn = $_POST['nafn'];
	$description = $_POST['description'];
	//get from file
    $jso = file_get_contents('../ordtok/myndir.json');
    //dceode object from file
    $obj = json_decode($jso);
    //display error
    if (!$obj) trigger_error('JSON FAIL: ' .  json_last_error(), E_USER_ERROR);

    // CREATE SOME NEW DATA TO APPEND TO THE komp ARRAY
    $new = new StdClass;
    $new->nafn = $nafn;
    $new->url = $url;
    $new->description = $description;

    // INJECT SOME DATA INTO THE OBJECT
    $obj->myndirFylki[] = $new;


    // RENDER THE NEW JSON STRING
    //encode back to json for storage
    $final_obj = json_encode($obj);
    file_put_contents('../ordtok/myndir.json', $final_obj);
    header('Location:http://tsuts.tskoli.is/2t/1811992029/hopverkefni/myndir.php');