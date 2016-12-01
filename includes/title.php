<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'Orðtök';
}
if ($title == 'baeta') {
 $title = 'Bæta við orðtaki';
<<<<<<< HEAD
=======
}
if ($title == 'baetamynd') {
 $title = 'Bæta við mynd';
>>>>>>> 8eef5ca09cb84f7a2cd078a9277dc983d0e83ff7
}