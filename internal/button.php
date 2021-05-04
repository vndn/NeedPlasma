<?php

include('../internal/utils.php');

$btn="None";
if(isset($_GET['btn'])) {
  $btn = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['btn']);
  $btn = str_replace(",","",$btn); #Do we even need this? Or preg_repalce() takes care of it
  $btn = strtolower($btn);
}
$date = new DateTime();
$msg = "timestamp=".$date->format('Y-m-d H:i:s').",btn=".$btn."\n";
counterFileBased("../counters/button_counter.txt",$msg);

#Warning - Echo is return from script since it is AJAX call
echo "Done-Vandan"; #$_GET['btn'];
?>
