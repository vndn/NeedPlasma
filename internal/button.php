<?php

include('../internal/utils.php');

$btn="None";
$refer="None";
if(isset($_GET['btn'])) {
  $btn = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['btn']);
  $btn = str_replace(",","",$btn); #Do we even need this? Or preg_repalce() takes care of it
  $btn = strtolower($btn);
}
if(isset($_GET['refer'])) {
  $refer = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['refer']);
  $refer = str_replace(",","",$refer); #Do we even need this? Or preg_repalce() takes care of it
  $refer = strtolower($refer);
}
$date = new DateTime();
$msg = "timestamp=".$date->format('Y-m-d H:i:s').",btn=".$btn.",refer=".$refer."\n";
counterFileBased("../counters/button_counter.txt",$msg);

#Warning - Echo is return from script since it is AJAX call
echo "Done-Vandan"; #$_GET['btn'];
?>
