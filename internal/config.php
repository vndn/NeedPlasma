<?php

$TEST_SERVER_IP  = '13.126.78.224';
#and gethostname()!== $TEST_SERVER_IP 

$ENV = "DEV";
if (strpos(gethostname(), 'ip-') !== false ) {
    $ENV = "PROD";
}
$AWS = array( "PROD"=> 
    array( "HitCounterQueueURL"=>"https://sqs.ap-south-1.amazonaws.com/716765330717/NeedPlasma-Hit-Queue"),
    "DEV"=>array(
        "HitCounterQueueURL"=>"https://sqs.ap-south-1.amazonaws.com/716765330717/NeedPlasma-Hit-Queue-Dev")
);


?>