<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'Orðtök';
}
if ($title == 'baeta') {
 $title = 'Bæta við orðtaki';
}