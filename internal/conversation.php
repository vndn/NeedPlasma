<?php

function validateStep($step, $message){
    
}

function updateSession($session, $info){
    #Memcache, PHP sesssion encrypted , script encrypt - Store
    #Then move it to google forms
}

if(isset($_POST['message']) and isset($_POST['step']) and isset($_POST['session'])) {
    $message = preg_replace('/[^-a-zA-Z0-9_]/', '',  $_POST['message']);
    $message = str_replace(",","",$message); #Do we even need this? Or preg_repalce() takes care of it
    if (strlen($message)>100 ) {
        echo "Response too long";
    }

    if ( ! is_numeric($_POST['step'] ) ) {
        echo "Step should be numeric";    
    }

    $step = (int)$_POST['step'];
    #Process this message for the current step now after validation
    #TODO - We need session ID also for memcached
    echo "All good";

    #Logic - Based on step number and associated validations
    #State - 30 values , upper, lower() 
    #Return error message

}else{
    echo "Required message, step number and session";
}
    

?>