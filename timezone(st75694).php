<?php

// date_default_timezone_set()

$current_timezone = date_default_timezone_get();

echo $current_timezone.'<br />';

date_default_timezone_set('Europe/Riga');

$current_timezone = date_default_timezone_get();

echo $current_timezone.'<br />';

echo date("Y-m-d H:i:s");


?>