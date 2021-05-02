<?php

$ENV = "DEV";
$AWS = array( "PROD"=> 
    array( "HitCounterQueueURL"=>"https://sqs.ap-south-1.amazonaws.com/716765330717/NeedPlasma-Hit-Queue"),
    "DEV"=>array(
        "HitCounterQueueURL"=>"https://sqs.ap-south-1.amazonaws.com/716765330717/NeedPlasma-Hit-Queue-Dev")
);


?>