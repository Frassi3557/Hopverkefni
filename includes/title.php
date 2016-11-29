<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'home';
}
if ($title == 'baeta') {
 $title = 'Bæta við orðtaki';
}
if ($title == 'baetamynd') {
 $title = 'Bæta við mynd';
}