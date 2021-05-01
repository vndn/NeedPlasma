<?php
$GLOBALS['page'] = 'media';

#Header
include('internal/header.php');

$fname="data/media.json";
$myfile = fopen( $fname, "r") or die("Could not open file");
$str = fread($myfile,filesize($fname));
$media = json_decode($str, true);
$articles = $media['ARTICLES'];
$gallery =  $media['GALLERY'];
fclose($myfile);


?>
<main>
<div class="">
</div>  
  <div class="container">
    <div class="row center-align">
          <br><br>
          <img src="images/needplasmalogo.webp" height="50em" alt="">
          <h2 id="main-head">Media References</h2>
          <h4 class="member-name"  id="main-subhead">Love and support from around the country</h4>
        </div>
  </div>
  <br><hr><br>
  <div class="container">
      <div class="row">
            <div class="col m6 white" style="max-height: 700px;">
                <h4 class="center-align">Articles</h4>
                <?php foreach ($articles as $i=>$article) { ?>
                <div class="row">
                    <div class="white z-depth-2">
                        <div>
                            <span class="left-align"><?php echo $article["agency"]; ?></span>
                            <span class="right"><?php echo $article["date"]; ?></span>
                        </div>
                        <div class="center-align">
                            <h6><a href="<?php echo $article["URL"]; ?>">
                            <?php echo $article["displayURL"]; ?></a></h6>
                        </div>
                    </div>
                </div>
                <?php } ?>              
            </div>      
            <div class="col m5 offset-m1 white custom-boxes" >
                <div class=""><h4>Twitter<span class="right"><hr>
                    <a href="https://twitter.com/NeedPlasmaIndia?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @NeedPlasmaIndia</a>
                    </h4>
                </div>
                <a class="twitter-timeline" data-height="350" href="https://twitter.com/NeedPlasmaIndia?ref_src=twsrc%5Etfw">
                    Tweets by NeedPlasmaIndia
                </a>  
            </div>
        </div>
        <div class="row">
            <h4 class="center-align">Gallery</h4><hr>
            <?php foreach($gallery as $i=>$clipping) { ?>
            <div class="col m6 white" >
                <a target="_blank" href="<?php echo $clipping["url"]; ?>">
                    <img src="images/media/<?php echo $clipping["image"]; ?>?v=1234" width="90%" alt="<?php echo $clipping["a;t"]; ?>" class="parallax center z-depth-4">
                    <br>
                </a>
            </div>
            <?php } ?> 
        </div>
    </div>
</main>

<?php
	include('internal/footer.php');
?>

<script async src="https://platform.twitter.com/widgets.js"></script>

<script>
$( document ).ready(function() {
    $('.parallax').parallax();
});
</script>
</body>
</html>
