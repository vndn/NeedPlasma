<?php

function validateStep($step, $message){
    
}

if(isset($_GET['message']) and isset($_GET['step'])) {
    $message = preg_replace('/[^-a-zA-Z0-9_]/', '', strtolower ( $_GET['message'] ) );
    $message = str_replace(",","",$message); #Do we even need this? Or preg_repalce() takes care of it
    if (strlen($message)>100 ) {
        echo "Response too long";
    }

    if ( ! is_numeric($_GET['step'] ) ) {
        echo "Step should be numeric";    
    }

    $step = (int)$_GET['step'];
    #Process this message for the current step now after validation
    #TODO - We need session ID also for memcached

}else{
    echo "Required message and step number";
}
    

?>