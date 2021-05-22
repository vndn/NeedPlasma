<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="cache-control" content="no-cache, must-revalidate, post-check=0, pre-check=0" />
    <meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />      
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css?v=47232"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css?v=987617"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/chat.css?v=987617"/> -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Save Lives Donate Blood!</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">

  </head>

<body>

<header>
    
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper green lighten-1">
                <a href="#!" class="brand-logo"><img src="images/needplasmalogo.webp" height="30" alt=""></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    
                    <li><a href="https://www.instagram.com/needplasma/" target="_blank" class="left s4 social-links-desktop"> 
                        <img class="" src="images/instagram.ico" alt="instagram link"></a></li>
                    <li><a href="https://twitter.com/NeedPlasmaIndia" target="_blank" class="right s4 social-links-desktop">
                        <img class="" src="images/twitter.ico" alt="twitter"></a></li>
                    <!-- <li><a href="https://www.youtube.com/channel/UC2nLg5OkK6RAGahPG52HYsw" target="_blank" class="right s4 social-links-desktop">
                        <img class="" src="images/youtube.png" alt="youtube link"></a></li> -->
                    <li><a href='mailto:info@needplasma.in' target="_blank" class="right s4 social-links-desktop">
                        <span id="email-btn"><img src="images/email.png" height="30px"></span></a></li>
                    <?php /*if ($GLOBALS['page']=='home') {  ?>
                    <li class="green lighten-2"><a href='javascript:changeLanguage("Hindi")' lang='ta'>हिन्दी</a></li>
                    <li class="green lighten-2"><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
                    <li class="green lighten-2"><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
                    <li class="green lighten-2"><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
                    <?php } */?>
                    <li><a href="./" lang="en" class="team-btn">Home</a></li>
                    <li><a href="./team.php" lang="en" class="team-btn">Team</a></li>
                    <li><a href="./media.php" lang="en" class="team-btn">Media</a></li>
                    <?php if ($GLOBALS['page']=='home') {  ?>
                    <li><a href="#contact-us" lang="en" class="about-head-class">Reach Us</a></li>
                    <?php }  ?>
                    <!-- Dropdown Trigger 
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">भाषा |Language<i class="material-icons right">arrow_drop_down</i></a></li>
                    -->
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo"> 
        <?php /*if ($GLOBALS['page']=='home') {  ?>            
        <li style="padding-top:10%;"><a href='javascript:changeLanguage("Hindi")' lang='hi'>हिन्दी</a></li>
        <li><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
        <li><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
        <li><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
        <?php } */ ?>
        <li><a href="./" lang="en" class="team-btn">Home</a></li>
        <li><a href="./team.php" lang="en" class="team-btn">Team</a></li>
        <li><a href="./media.php" lang="en" class="team-btn">Media</a></li>
        <?php if ($GLOBALS['page']=='home') {  ?>
        <li><a href="#contact-us" lang="en" class="about-head-class">Contact Us</a></li>
        <?php } ?>
        <li style="padding-top:2%;">
            <a href="https://www.instagram.com/needplasma/" class="left s4" target="_blank"><img class="" alt="instagram" src="images/instagram.ico"></a>
            <a href="https://twitter.com/NeedPlasmaIndia" class="right s4" target="_blank"><img class="" alt="twitter" src="images/twitter.ico"></a>
        </li>
        <li>
            <a href='mailto:info@needplasma.in' class="left s4" target="_blank"> <img alt="email" height="30px" src="images/email.png"></a>
            <!-- <a style="padding-left: 9%;" href="https://www.youtube.com/channel/UC2nLg5OkK6RAGahPG52HYsw" class="center s4" target="_blank"> <img alt="youtube" class="" src="images/youtube.png"></a> -->
        </li>          
    </ul>
</header>