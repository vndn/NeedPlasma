<?php

$myfile = fopen("../counters/button_counter.txt", "a+");
$date = new DateTime();
$txt = "timestamp=".$date->format('Y-m-d H:i:s').",btn=".$_GET['btn']."\n";
fwrite($myfile,$txt);
fclose($myfile);

#Warning - Echo is return from script since it is AJAX call
echo $_GET['btn'];
?>