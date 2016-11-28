<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'home';
}
if ($title == 'baeta') {
  $title = 'bæta';
}
if ($title == 'baetamynd') {
  $title = 'bæta';
}