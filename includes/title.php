<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
if ($title == 'index') {
 $title = 'home';
}
if ($title == 'baeta') {
 $title = 'Bæta við orðtaki';
}
$title = ucwords($title);
?>
