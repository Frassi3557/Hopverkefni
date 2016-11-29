<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');

if ($title == 'index') {
  $title = 'home';
}
if ($title == 'baeta') {
<<<<<<< HEAD
 $title = 'Bæta við orðtaki';
}
$title = ucwords($title);
?>
=======
  $title = 'bæta';
}
if ($title == 'baetamynd') {
  $title = 'bæta';
}
>>>>>>> bad688ec81dbf553d537aaceebf4dea4519c855a
