<?php
require('internal/utils.php');
$GLOBALS['page'] = 'team';

#$str = file_get_contents('http://example.com/example.json/');
$fname="data/team.json";
$myfile = fopen( $fname, "r") or die("Could not open file");
$str = fread($myfile,filesize($fname));
$team = json_decode($str, true)['team'];
fclose($myfile);

#Hit Counter simple
$date = new DateTime();
$msg = $date->format('Y-m-d H:i:s')."\n";
counterFileBased("counters/team_counter.txt",$msg);
	
#Header
include('internal/header.php');

?>
<main>
  <div class="container">
    <div class="row center-align">
          <br><br>
          <img src="images/needplasmalogo.webp" height="50em" alt="Brand">
          <h2 id="main-head">Meet Our Team</h2>
          <h6 id="main-subhead"></h6>
        </div>
  </div>
  <br><hr><br>
  <div class="container">
      <?php foreach ($team as $i=>$member) { ?>
      <?php $j=$i+1; if ($i%4==0) {echo '<div class="row center-align white">'; }?>
      
            <div class="col s6 m3 white custom-boxes">
                <br>
                <img src="images/team/<?php echo $member["image"]; ?>?v=1234" width="50%" alt="team-member" class="circle center z-depth-4">
                <h6 class="member-name"><?php echo $member["name"]?></h6>
                <p><?php echo $member["designation"]?></p>
            </div>
            <?php if($i==count($team)-1) { ?>
                <div class="col s6 m3 white">
                    <p><b>You can help us save more lives</b></p>
                    <a class="waves-effect waves-light btn" href='https://docs.google.com/forms/d/e/1FAIpQLSfOThbYqpsPVgMYM6Dge2mT5dXmprYQ4ISz1DFrCckHEIsiZA/viewform' target="_blank"><span id="vol-butjoin">Join Now</span></a>              
                    <br>
                </div>
             <?php } ?>
        <?php if ($j%4==0 or $i==count($team)-1) {echo '</div>';} }?>      
    </div>
</main>

<?php
	include('internal/footer.php');
?>

<script>
$( document ).ready(function() {
    $('.sidenav').sidenav();
    $(".dropdown-trigger").dropdown();     
});
</script>

</body>
</html>
