<?php
include('internal/config.php');
include('internal/utils.php');

$GLOBALS['page'] = 'home';

$refer="None";
$refer_keys = array("refer","invite");
foreach ($refer_keys as $key) {
    if ( array_key_exists($key, $_GET) ) {
        $refer = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET[$key]);
        $refer = str_replace(",","",$refer); #Do we even need this? Or preg_repalce() takes care of it
        $refer = strtolower($refer);
        break;
    }
}
$GLOBALS['refer']=$refer;
#Update known refers count, pre analytics on hit data
#2 approaches - 1 [current] = Update only known refers
#    2. Refer


$date = new DateTime();
$msg = "timestamp=".$date->format('Y-m-d H:i:s').",refer=".$refer."\n";
counterFileBased("counters/counter_v2.txt",$msg);
/*
$date = new DateTime();
$msg = "url=/,timestamp=".$date->format('Y-m-d H:i:s').",refer=".$refer."\n";
sendSQSMessage($AWS[$ENV]['HitCounterQueueURL'],$msg);
*/
include('internal/header.php');

?>
<main>
        <div class="container">
            <div class="row center-align">
                <br><br>
                <img src="images/needplasmalogo.webp" height="50em" alt="">
                <h2 id="main-head">SAVE LIVES WITH BLOOD</h2>
                <h4 id="main-subhead">Plasma from recovered COVID-19 patients can help save lives</h4>
              </div>
        </div>

        <div class="container">
            <div class="row center-align">
                <br><br>
                <div class="col m6 s12 center-align">    
                    <h5 id="reg-donatehead">WANT TO DONATE PLASMA?</h5>
                    <p id="reg-donatepara" class="center-align">Recovered or quarantined patients of COVID-19 who are willing to donate</p>
                    <a id="donor-btn" class="green waves-effect waves-light btn trackable-btn pulse" href="https://docs.google.com/forms/d/e/1FAIpQLScRifOK0fKNjIWPbB3iHynDZs74z8BSmtc99U_Uc6J8jHaDUg/viewform?usp=sf_link" target="_blank">Donate Blood<span class="material-icons">favorite</span></a><br><br>
                    <!-- <a id="donor-btn" class="waves-effect waves-light btn trackable-btn pulse" href="register.php?role=donor">Donate Plasma<span class="material-icons">favorite</span></a><br><br> -->
                </div>
                <div class="col m6 s12 center-align">    
                    <h5 id="reg-needhead">YOU NEED THE THERAPY (LOOKING FOR PLASMA)</h5>
                    <p id="reg-needpara" class="center-align">If you are looking out for a donor, register here and we will try to connect with a donor</p>
                    <a id="patient-btn" class="red waves-effect waves-light btn trackable-btn" href='https://docs.google.com/forms/d/e/1FAIpQLSel1nVG5xNaS_QxeuhVIWrXt1ETXJUGep9gbxXfHN8Eu937pw/viewform?usp=sf_link' target="_blank"><span id="reg-button">REGISTER HERE</span></a><br><br>
                </div>
            </div>
            <div class="row center-align">
              <div class="col m6 offset-m3 s12 center-align">    
                    <h5 id="reg-volhead">REGISTER AS A VOLUNTEER (JOIN US)</h5>
                    <p id="reg-volpara" class="center-align">You can motivate a recovered COVID-19 patient to donate plasma and save a COVID-19 patient. Your small step can help a person go back to their family.</p>
                    <a id="volunteer-btn" class="waves-effect waves-light btn trackable-btn" href='https://docs.google.com/forms/d/e/1FAIpQLSf5MCS9L9OHrR55wC0uiWLVXqeBTyRP4xVxOUkd7G-frVzksQ/viewform?usp=sf_link' target="_blank"><span id="vol-butjoin">Join Now</span></a>
                    <!-- <a id="volunteer-btn" class="waves-effect waves-light btn trackable-btn" href="register.php?role=volunteer"><span id="vol-butjoin">Join Now</span></a> -->
                </div>
            </div>              
        </div>
        <hr>        
        <div class="container">
            <h4 class='center-align' id="sit-head">THE SITUATION</h4>
            <div class="row center-align ">
                <br><br>
                <div class="col m4">
                    <img src="images/blood.jpg" alt="" height="200em" class="center-img">
                </div>
                <div class="col m8 s12">
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
<hr><br>     
        <div class="container">
            <h4 class='center-align donate-class-head'><b>WHO CAN DONATE</b></h4>
            <div class="row center-align" >
                <div class="col m4 s12"> 
                    <div class="">
                        <img class src="images/thumbs_up.png" class="center-img" width="70%" alt="thums-up">
                    </div>
                    <h5 class="center-align donate-class-canhead">DONOR ELIGIBILITY</h5>
                </div>                
                <div class="col m8 s12" style="overflow-x:auto;max-height: 250px;overflow:scroll">
                    <!-- <p class="donate-class-canp1"></p>
                    <p class="donate-class-canp2"></p> -->
                    <table class='striped' >
        <thead>
          <tr>
              <th>Criterion</th>
              <th>Eligibility</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Weight</td>
            <td>More than 45KG</td>
          </tr>
          <tr>
            <td>Age</td>
            <td>Between 18 to 65 years</td>
          </tr>
          <tr>
            <td>Child Birth</td>
            <td>Child delivered 1 year ago and stopped lacatation</td>
          </tr>
          <tr>
            <td>Haemoglobin</td>
            <td>Haemoglobin more than 12.5g/dl.</td>
          </tr>
          <tr>
            <td>Weight</td>
            <td>More than 45KG</td>
          </tr>
          <tr>
            <td>Age</td>
            <td>Between 18 to 65 years</td>
          </tr>
          <tr class="hide-on-small-only">
            <td>Jonathan</td>
            <td>Lollipop</td>
          </tr>
        </tbody>
      </table>                    
                </div>                 
            </div>
        </div>   
    <!-- <hr><br><br>        
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
                            <b id="footer-para-delted">Note: Needplasma does not promote any monetary transaction between patient and donor</b>
                        </p>
                    </div>
                </div>
            </div> -->
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
                        <br><br><b id="footer-para2">Note: Needplasma does not promote any monetary transaction between patient and donor</b>
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
      <!--  -->
    </div>
  </div>

    <!-- Language Selection Popup
    <div id="languageSelector" class="modal">
        <div class="modal-content center-align">
            
            <h4 class="">Choose Language</h4><hr>
            <p id="langModalText">Please read the notice below.(Click notice to zoom in/out)
                <br>Click anywhere to continue in English <span id="language-auto-select"></span></p>            
            <div class="center"> 
                <a href='javascript:changeLanguage("Hindi")' lang='ta' class='modal-action modal-close btn teal darken-2'>हिन्दी</a>
                <a href='javascript:changeLanguage("Marathi")' lang='mr' class='modal-action modal-close btn teal darken-2'><b>मराठी</b></a>
                <a href='javascript:changeLanguage("Tamil")' lang='ta' id='testLangBtn' class='modal-action modal-close btn teal darken-2'>தமிழ்</a>
                <a href='javascript:changeLanguage("English")' lang='en' id='defaultLangBtn' class='modal-action modal-close btn teal lighten-2'>English</a> 
                <a href="#!" id="langCloseBtn" class=" modal-close btn red btn-small">Close</a>
            </div>              
            <div class="materialboxed ">  
                <h5 class="red"><b>Notice<b></h5>        
            <img width="100%" class="center" src="images/icmr_plasma.jpeg"/></a>
            </div>
        </div>
        <div class="modal-footer"> 
        </div>
      </div>
      -->

</main>

<?php
	include('internal/footer.php');
?>

<script>
$( document ).ready(function() {
    $('.materialboxed').materialbox();
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown(); 
    $('#volunteerPopup').modal();   
    $('#languageSelector').modal();
    $.ajax({
        type: 'GET',
        url: "data/content.json",
        data: "",
        async: false,
        beforeSend: function (xhr) {
            if (xhr && xhr.overrideMimeType) {
            xhr.overrideMimeType('application/json;charset=utf-8');
            }
        },
        cache:false,
        dataType: 'json',
        success: function (data) {
            //Do stuff with the JSON data
            mydata=data
            changeLanguage("English")
            $('#languageButton').trigger('click');
            var counter = 5;
            /*
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
            */
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

//Button click tracjer
$(".trackable-btn").click(function(){
    var btn_name = $(this). attr('id'); 
    $.get("internal/button.php", {"btn" : btn_name, "refer": <?php echo '"'.$GLOBALS['refer'].'"';?> } , function(data){
        console.log(data);
    });        
});

function sendButtonClickData(){
    var btn_name = arguments[0];
    $.get("internal/button.php", {"btn" : btn_name} , function(data){
        console.log(data);
    });    
    /*
    $.ajax({
            url: 'internal/button.php',
            contentType: "application/json; charset=utf-8",
            data: {"btn" : btn_name},
            success: function (data) {
                console.log(data);
            }
        });    
    */
}

</script>

  </body>
</html>