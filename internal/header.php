<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen"/>
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>Save Lives by donating Plasma - Act now</title>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">

  </head>

  <body>
<!-- Dropdown Structure -->
<!-- <ul id="dropdown1" class="dropdown-content">
    <li><a href='javascript:changeLanguage("Hindi")'>हिन्दी</a></li>
    <li><a href='javascript:changeLanguage("English")'>English</a></li>
  </ul> -->
<header>
    
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper teal lighten-2">
                <a href="#!" class="brand-logo"><img src="images/needplasmalogo.webp" height="30" alt=""></a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    
                    <li><a href="https://www.instagram.com/needplasma/" target="_blank" class="left s4 social-links-desktop"> 
                        <img class="" src="images/instagram.ico" alt="instagram link"></a></li>
                    <li><a href="https://twitter.com/NeedPlasmaIndia" target="_blank" class="right s4 social-links-desktop">
                        <img class="" src="images/twitter.ico" alt="twitter"></a></li>
                    <li><a href="https://www.youtube.com/channel/UC2nLg5OkK6RAGahPG52HYsw" target="_blank" class="right s4 social-links-desktop">
                        <img class="" src="images/youtube.png" alt="youtube link"></a></li>
                    <li><a href='mailto:info@needplasma.in' target="_blank" class="right s4 social-links-desktop">
                        <span id="email-btn"><img src="images/email.png" height="30px"></span></a></li>
                    <?php if ($GLOBALS['page']=='home') {  ?>
                    <li><a href='javascript:changeLanguage("Hindi")' lang='ta'>हिन्दी</a></li>
                    <li><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
                    <li><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
                    <li><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
                    <?php } ?>
                    <li><a href="./team.php" lang="en" class="team-btn">Team</a></li>
                    <?php if ($GLOBALS['page']=='home') {  ?>
                    <li><a href="#contact-us" lang="en" class="about-head-class">Contact Us</a></li>
                    <?php }  ?>
                    <!-- Dropdown Trigger 
                    <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">भाषा |Language<i class="material-icons right">arrow_drop_down</i></a></li>
                    -->
                </ul>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo"> 
        <?php if ($GLOBALS['page']=='home') {  ?>            
        <li style="padding-top:10%;"><a href='javascript:changeLanguage("Hindi")' lang='hi'>हिन्दी</a></li>
        <li><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
        <li><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
        <li><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
        <?php }  ?>
        <li><a href="./team.php" lang="en" class="team-btn">Team</a></li>
        <?php if ($GLOBALS['page']=='home') {  ?>
        <li><a href="#contact-us" lang="en" class="about-head-class">Contact Us</a></li>
        <?php } ?>
        <li style="padding-top:2%;">
            <a href="https://www.instagram.com/needplasma/" class="left s4" target="_blank"><img class="" alt="instagram" src="images/instagram.ico"></a>
            <a href="https://twitter.com/NeedPlasmaIndia" class="right s4" target="_blank"><img class="" alt="twitter" src="images/twitter.ico"></a>
        </li>
        <li>
            <a href='mailto:info@needplasma.in' class="left s4" target="_blank"> <img alt="email" height="30px" src="images/email.png"></a>
            <a style="padding-right: -9%;" href="https://www.youtube.com/channel/UC2nLg5OkK6RAGahPG52HYsw" class="center s4" target="_blank"> <img alt="youtube" class="" src="images/youtube.png"></a>
        </li>          
    </ul>
</header>