<?php
$DB_HOST="database-1.cqutihd6w5c3.ap-south-1.rds.amazonaws.com";
$DB_PWD =shell_exec('aws --region ap-south-1 ssm get-parameter --name "/NeedPlasma/DB_PWD" --query "Parameter.Value"'); 
$DB_PWD = substr($DB_PWD,1,strlen($DB_PWD)-3);
$DB_PORT = 3306;
$DB_USER = "admin";
$DB_NAME = 'NEEDPLASMA';

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PWD, $DB_NAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>