<?php
$y = date('Y', time()); //Getting Year
$m = date('m', time()); //Getting Month
$d = date('d', time()); //Getting Day
require('nepali-date.php'); //Including library
$date = new nepali_date;
$date = $date->get_nepali_date($y, $m, $d);
echo $date['y'].'-'.$date['m'].'-'.$date['d']; //Printing Date
?>