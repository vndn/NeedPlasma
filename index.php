<?php
#Hit Counter simple
  $myfile = fopen("counter.txt", "a");
  $date = new DateTime();
  $txt = $date->format('Y-m-d H:i:s')."\n";
  fwrite($myfile,$txt);
  fclose($myfile);
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
    </style>
  </head>

  <body>
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
        <li><a href='javascript:changeLanguage("Hindi")' lang='ta'>हिन्दी</a></li>
        <li><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
        <li><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
        <li><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
        <li><a href="#contact-us" lang="en" class="about-head-class">Contact Us</a></li>
        <!-- Dropdown Trigger 
        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">भाषा |Language<i class="material-icons right">arrow_drop_down</i></a></li>
        -->
    </ul>
    </div>
  </nav>
</div>
    <ul class="sidenav" id="mobile-demo">             
        <li style="padding-top:10%;"><a href='javascript:changeLanguage("Hindi")' lang='hi'>हिन्दी</a></li>
        <li><a href='javascript:changeLanguage("English")' lang='en'><b>English</b></a></li>
        <li><a href='javascript:changeLanguage("Tamil")' lang='ta'>தமிழ்</a></li>
        <li><a href='javascript:changeLanguage("Marathi")' lang='mr'>मराठी</a></li>
        <li><a href="#contact-us" lang="en" class="about-head-class">Contact Us</a></li>
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
                <h2 id="main-head">SAVE LIVES WITH PLASMA</h2>
                <h4 id="main-subhead">Plasma from recovered COVID-19 patients can help save lives</h4>
              </div>
        </div>

        <div class="container">
            <div class="row center-align">
                <br><br>
                <div class="col m4 center-align">    
                    <h5 id="reg-donatehead">WANT TO DONATE PLASMA?</h5>
                    <p id="reg-donatepara" class="center-align">Recovered or quarantined patients of COVID-19 who are willing to donate</p>
                    <a class="waves-effect waves-light btn" href='https://forms.gle/mTp6J3sGRHucxqra7' target="_blank"><span id="donate-plasma-btn">Donate Plasma</span></a><br><br>
                </div>
                <div class="col m4 center-align">    
                    <h5 id="reg-needhead">YOU NEED THE THERAPY (LOOKING FOR PLASMA)</h5>
                    <p id="reg-needpara" class="center-align">If you are looking out for a donor, register here and we will try to connect with a donor</p>
                    <a class="waves-effect waves-light btn" href='https://forms.gle/Fp1MeBwD5gd5nNUNA' target="_blank"><span id="reg-button">REGISTER HERE</span></a><br><br>
                </div>
                <div class="col m4 center-align">    
                    <h5 id="reg-volhead">REGISTER AS A VOLUNTEER (JOIN US)</h5>
                    <p id="reg-volpara" class="center-align">You can motivate a recovered COVID-19 patient to donate plasma and save a COVID-19 patient. Your small step can help a person go back to their family.</p>
                    <!-- Modal Trigger -->
                    <button data-target="volunteerPopup" class="waves-effect waves-light btn modal-trigger">
                        <span id="reg-volbutton">Help Us</span>
                    </button>               
                </div>
              </div>
        </div>
        <hr>        
        <div class="container">
            <h4 class='center-align' id="sit-head">THE SITUATION</h4>
            <div class="row center-align ">
                <br><br>
                <div class="col m4">
                    <img src="images/hospital.jpg" alt="" height="200em" class="center-img">
                </div>
                <div class="col m8">
                    <span id="sit-para1">COVID-19 has been on a rampage in our country since the past 1 year. From less than 100 cases in February 2020, we are now having more than 1,30,00,000 cases.</span>
                    <span id="sit-para2">The good news is that we have been able to recover more than 90% COVID-19 patients. These patients can help the COVID-19 patients by donating their plasma, as a possible cure.</span>
                    <span id="sit-para3">With the vaccination drive underway across the country, there are still a majority of population that still needs to be vaccinated. For this majority, plasma therapy has been developed as an experimental cure for the COVID-19 patients. Plasma therapy has been helping a lot of families recover their loved ones from COVID-19.            </span>
                    <br><br><span id="sit-para4"><b>But since there are very few plasma donors currently, a lot of people who can be saved using this therapy are not getting the required treatment.</b></span>
                </div>                
            </div>
        </div>
<hr>
<br><br>
        <div class="container">
            <h4 class='center-align' id="what-head"><b>WHAT NEEDS TO BE DONE</b></h4>
            <div class="row center-align">
                <br><br>
                <div class="col m4 push-m8"> 
                    <img src="images/people.jpg" alt="" height="200em" class="center-img">
                </div>                
                <div class="col m8 pull-m4">
                    <h5 id="what-p1head">WE NEED DONORS</h5>
                    <p id="what-p1para">If more people start to donate, we can save more lives on a daily basis. Then those recovered patients can donate, which will help us in keeping this cycle running and saving more lives</p>
                </div>                 
            </div>    
            <div class="row center-align">
                <br><br>
                <div class="col m4"> 
                    <img src="images/donor.jpg" alt="" height="200em" class="center-img">
                </div>                
                <div class="col m8">
                    <h5 id="what-p2head">Donor matches Patient</h5>
                    <p id="what-p2para">Since the donor and the patient need to have a match for the plasma therapy, we make sure that the right donor is matched with the right patient</p>
                </div>                 
            </div>                      
            <div class="row center-align">
                <br><br>
                <div class="col m4 push-m8"> 
                    <img src="images/connect.jpg" alt="" height="200em" class="center-img">
                </div>                
                <div class="col m8 pull-m4">
                    <h5 id="what-p3head">Donor and Patient connect</h5>
                    <p id="what-p3para">Once we find the match that is living closest to the patient and has the right blood group, the donor and the patient will be given the required details for them to contact each other. </p>
                </div>                 
            </div> 
        </div>
        <hr>
        <br><br>
        <div class="container">
            <h4 class='center-align' id="wedo-head">WHAT WE DO?</h4>
            <div class="row center-align ">
                <br><br>
                <div class="col m4">
                    <img src="images/volunteers.jpg" alt="" height="200em" class="center-img">
                </div>
                <div class="col m8">
                    <p id="wedo-para1">Donors and patients both register their information with us. This information pertains to name, contact number, blood group and location. This helps us in finding the best match for the patients. Since time is of extreme importance in these situations, we do not act as intermediaries between the patient and the donor. Once both the parties have a match, they can directly contact each other.</p>
                    <br><p id="wedo-para2">Please note: Plasma therapy is an experimental COVID-19 therapy. Before you register, please consult your doctor if this is required. Only patients with a case sheet from the doctor on duty will be matched.</p>
                </div>                
            </div>
        </div> 
<hr><br><br>        
        <div class="container">
            <h4 class='center-align donate-class-head'><b>WHO CAN DONATE</b></h4>
            <div class="row center-align">
                <br><br>
                <div class="col m4 ossfet-m1"> 
                    <img src="images/thumbs_up.png" height="100em" alt="thums-up">
                    <h5 class="donate-class-canhead">CAN DONATE</h5>
                    <p>
                        <span class="donate-class-canp1">Were tested positive for COVID-19</span><br>
                        <span class="donate-class-canp2">Fully recovered and free of Symptoms for 14 days</span><br>
                        <span class="donate-class-canp3">Between 18-60 years</span><br>
                    </p>
                </div>                
                <div class="col m4 offset-m3">
                    <img src="images/thumbs_down.png" height="100em" alt="thums-down">
                    <h5 class="donate-class-canthead">CANNOT DONATE DONATE</h5>
                    <p>
                        <span class="donate-class-cantp1">Weight less than 50 kg</span><br>
                        <span class="donate-class-cantp2">Females who have ever been pregnant</span><br>
                        <span class="donate-class-cantp3">B.P >140 and diastolic &lt;60 or &gt;90</span><br>
                        <span class="donate-class-cantp4">Diabetic on insulin</span><br>
                        <span class="donate-class-cantp5">Cancer Survivor</span><br>
                        <span class="donate-class-cantp6">Uncontrolled diabetes Chronic kidney/heart/lung/liver disease.</span><br>
                    </p>
                </div>                 
            </div>
        </div>   
    <hr><br><br>        
            <div class="container">
                <h4 class='center-align' id="recognition"><b>Recognition</b></h4>
                <div class="row center-align">
                    <br><br>
                    <div class="col m4 push-m8"> 
                        <img src="images/recognition.png" alt="" height="200em" class="center-img">
                    </div>                     
                    <div class="col m8 pull-m4"> 
                        <p id="footer-para1">
                            For every registration and verification of a recovered COVID-19 plasma donor you refer, you will be given a gift voucher<br><br>
                        </p>
                        <p >
                            <b id="footer-para2">Note: Needplasma does not promote any monetary transaction between patient and donor</b>
                        </p>
                    </div>
                </div>
            </div>
        <hr><br><br>        
            <div class="container">
                <h4 class='center-align about-head-class' id="contact-us"><b>About Us</b></h4>
                <div class="row center-align">
                    <br><br>
                    <div class="col m4"> 
                        <img src="images/about.png" alt="" height="200em" class="center-img">
                    </div>               
                    <div class="col m8">
                        <p id="about-para1">
                            Needplasma Initiative was started by Prashant Saini during the first wave of pandemic in June 2020. The team has gradually increased and right now Needplasma has volunteers across India.
                        </p><br><p id="about-para2">It is a non commercial initiative started with an intention of helping people out in whatever possible way. If you want to reach out and understand more about the initiative, you can get in touch with him on the below handle<br>
                        </p>
                        <br>
                        <a class="btn z-depth-2 white left" href='mailto:info@needplasma.in' target="_blank">
                            <span id="email-btn"><img src="images/email.png" height="30px"></span></a>
                        <a class="btn z-depth-2 white center" href='https://www.instagram.com/needplasma/' target="_blank">
                            <span id="email-btn"><img src="images/instagram.ico" height="30px"></span></a>  
                        <a class="btn z-depth-2 white right" href='https://twitter.com/NeedPlasmaIndia' target="_blank">
                            <span id="email-btn"><img src="images/twitter.ico" height="30px"></span></a>                                                      
                    </div>                 
                </div> 
            </div>


  <!-- Volunteer Popup -->
  <div id="volunteerPopup" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4 id="vol-pophead">Welcome to the team</h4><hr>
      <p id="vol-poppara">You can watch the video to know more while we onboard you to the team. Click the Join Now button to start</p>
      <div class="video-container" id="video-1">
        <iframe height="100em" src="//www.youtube.com/embed/Z8lLOJdp92I?rel=0"></iframe>
      </div> <br>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-grey btn-flat" id="vol-butclose">Close</a>
      <a class="waves-effect waves-light btn" href='https://forms.gle/FGyztKourfqiRM2MA' target="_blank"><span id="vol-butjoin">Join Now</span></a>
    </div>
  </div>

    <!-- Language Selection Popup -->
    <div id="languageSelector" class="modal">
        <div class="modal-content center-align">
            <h4 class="">Choose Language</h4><hr>
            <p id="langModalText">Continue in English in <span id="language-auto-select">5</span> seconds</p>
            Choose from the 4 languages below. You can also change later from menu or bottom of the page.
        </div>
        <div class="modal-footer"> 
            <div class="center"> 
                <a href='javascript:changeLanguage("Hindi")' lang='ta' class='modal-action modal-close btn teal darken-2'>हिन्दी</a>
                <a href='javascript:changeLanguage("Marathi")' lang='mr' class='modal-action modal-close btn teal darken-2'><b>मराठी</b></a>
                <a href='javascript:changeLanguage("Tamil")' lang='ta' id='testLangBtn' class='modal-action modal-close btn teal darken-2'>தமிழ்</a>
                <a href='javascript:changeLanguage("English")' lang='en' id='defaultLangBtn' class='modal-action modal-close btn teal lighten-2'>English</a> 
                <a href="#!" id="langCloseBtn" class=" modal-close btn red btn-small">Close</a>
            </div>
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

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
    
<script>
$( document ).ready(function() {
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown(); 
    $('#volunteerPopup').modal();   
    $('#languageSelector').modal();
    $.ajax({
        type: 'GET',
        url: "content.json",
        data: "",
        async: false,
        beforeSend: function (xhr) {
            if (xhr && xhr.overrideMimeType) {
            xhr.overrideMimeType('application/json;charset=utf-8');
            }
        },
        dataType: 'json',
        success: function (data) {
            //Do stuff with the JSON data
            mydata=data
            changeLanguage("English")
            $('#languageButton').trigger('click');
            var counter = 5;
            var interval = setInterval(function() {
                counter--;
                // Display 'counter' wherever you want to display it.
                $("#language-auto-select").html(counter)
                if (counter == -1) {
                    // Display a login box
                    //$('#testLangBtn').trigger('langCloseBtn');  
                    $("#langModalText").html("");
                    $('#languageSelector').modal('close');
                    clearInterval(interval);
                }
            }, 1000); 
        }
     });          

});    

function changeLanguage() {
    var lang = arguments[0]
    console.log(lang)
    for (const property in mydata.content[lang]) {
        //console.log(property);
        if ( property.search("class")>=0){
            $("."+property).html(mydata.content[lang][property]);
        }else{
            $("#"+property).html(mydata.content[lang][property]);
        }
    } 
}

</script>

  </body>
</html>