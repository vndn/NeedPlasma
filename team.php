<?php
#$str = file_get_contents('http://example.com/example.json/');
$fname="team.json";
$myfile = fopen( $fname, "r") or die("Could not open file");
$str = fread($myfile,filesize($fname));
$team = json_decode($str, true)['team']; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen"/>
    <link rel="shortcut icon" href="images/favicon.ico">
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
    .custom-boxes{
        display: inline-block;
    }
    .member-name {
        font-weight: bold;
        }
    </style>
  </head>

  <body class="grey lighten-4">
<!-- Dropdown Structure -->
<!-- <ul id="dropdown1" class="dropdown-content">
    <li><a href='javascript:changeLanguage("Hindi")'>हिन्दी</a></li>
    <li><a href='javascript:changeLanguage("English")'>English</a></li>
  </ul> -->
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
        <li><a href='./'>Home</a></li>
        <!-- Dropdown Trigger 
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">भाषा |Language<i class="material-icons right">arrow_drop_down</i></a></li>
        -->
    </ul>
    </div>
  </nav>
</div>
    <ul class="sidenav" id="mobile-demo">             
        <li><a href='./'>Home</a></li>
        <li style="padding-top:2%;">
            <a href="https://www.instagram.com/needplasma/" class="left s4" target="_blank"><img class="" alt="instagram" src="images/instagram.ico"></a>
            <a href="https://twitter.com/NeedPlasmaIndia" class="right s4" target="_blank"><img class="" alt="twitter" src="images/twitter.ico"></a>
        </li>
        <li>
            <a href='mailto:info@needplasma.in' class="left s4" target="_blank"> <img alt="email" height="30px" src="images/email.png"></a>
            <a style="padding-right: -9%;" href="https://www.youtube.com/channel/UC2nLg5OkK6RAGahPG52HYsw" class="center s4" target="_blank"> <img alt="youtube" class="" src="images/youtube.png"></a>
        </li>          
    </ul>

<main>
  <div class="container">
    <div class="row center-align">
          <br><br>
          <img src="images/needplasmalogo.webp" height="50em" alt="">
          <h2 id="main-head">Meet Our Team</h2>
          <h6 class="member-name"  id="main-subhead"></h6>
        </div>
  </div>
  <br><hr><br>
  <div class="container">
      <?php foreach ($team as $i=>$member) { ?>
      <?php $j=$i+1; if ($i%4==0) {echo '<div class="row center-align">'; }?>
      
            <div class="col s6 m3 white custom-boxes">
                <br>
                <img src="images/team/<?php echo $member["image"]?>" width="50%" alt="team-member" class="circle center z-depth-4">
                <h6 class="member-name"  id="main-head"><?php echo $member["name"]?></h6>
                <p id="main-subhead"><?php echo $member["designation"]?></p>
            </div>
        <?php if ($j%4==0) {echo '</div>';} }?>
        
        </div>
    </div>
</main>

<footer class="teal lighten-2">
<div class="footer-copyright">
    <div class="container white-text text-lighten-2">
        <a class="grey-text text-lighten-4" href="#!"><span id="copyrightext">Copyright © 2021 NeedPlasma. All rights reserved</span></a>
        <br>Credits- <a href="https://www.freepik.com/vectors/people" class="white-text text-lighten-2">People vector created by pch.vector - www.freepik.com</a>
        <a href="https://www.freepik.com/vectors/abstract" class = "white-text text-lighten-2">Abstract vector created by macrovector - www.freepik.com</a>
        <a href="https://www.freepik.com/vectors/heart" class = "white-text text-lighten-2" >Heart vector created by kreativkolors - www.freepik.com</a>
        <button data-target="languageSelector" class=" modal-trigger" id="languageButton">
            <span id="change-lang-footer">Change Language</span>
        </button>     
    </div>
  </div>
</footer>

</body>
</html>
