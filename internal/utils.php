<?php

#Hit Counter simple
function counterFileBased($fname, $msg) {
    $myfile = fopen($fname, "a+");
    fwrite($myfile,$msg);
    fclose($myfile);
}

#Send SQS message
function sendSQSMessage($queueURL, $msg) {
    $mymsg = '"'.$msg.'"';
    $command = 'aws sqs --region ap-south-1 send-message --queue-url '.$queueURL." --message-body ".$mymsg;
    $response = shell_exec($command); 
    if (strpos($response, 'MD5OfMessageBody') !== false and strpos($response, 'MessageId') !== false) {
        return true;
    }else{
        return false;
    }
}
?>
