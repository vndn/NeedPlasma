<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen"/>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <title>Need Plasma - Act now</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <style>
    .center-img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;
    }
    .social-links{
        display: inline-block;
    }
    .social-imgs{
        display: inline-block;
    }
    .social-links-desktop{
        padding-top: 0.75em;
    }
    </style>
  </head>

  <body>

<?php
  echo "hi";
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  echo "here";
  $myfile = fopen("counter.txt", "a") or die("Unable to open file!");
  $txt="1";
  fwrite($myfile,$txt);
  fclose($myfile);
  echo "bye";
?>
    </body>
    </html>
