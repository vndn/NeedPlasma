<?php
	$GLOBALS['page'] = 'quiz';
	
	#Header
	include('internal/header.php');
	
	#Get questions
	$fname="data/quiz.json";
	$myfile = fopen( $fname, "r") or die("Could not open file");
	$str = fread($myfile,filesize($fname));
	$questions = json_decode($str, true)['QUESTIONS'];
	
	#die("vandan");
	?>
<main>
	<div class="container">
	<h6 class='green-text center'>Your quiz timer has started, ensure speed and accuracy. All the best !</h6>
	<!-- <h6 class='orange-text  center'></h6> -->
	<form action="/dashboard" method="POST">
		<?php foreach ($questions as $i=>$ques) { $j=$i+1; ?>
		<div class="row">
			<div class="col s12 m10 push-m1">
				<div class="card z-depth-3">
					<?php if  (array_key_exists("image",$ques)) { ?>
					<div class="card-image materialboxed">
						<img src="images/quiz_d/<?php echo $ques["image"]; ?>">
					</div>
					<?php } ?>
					<div class="card-content">
						<span class="card-title">Question <?php echo $j ?></span>
						<p><?php echo $ques["question"] ?></p>
						<?php if ($ques["image"]) { ?>
						<p class=" teal-text right-align">Click on the image to zoom</p>
						<?php } ?>
					</div>
					<div class="card-action">
					<?php if ( $ques["type"]=='MCQ') { ?>
						<?php foreach ($ques["options"] as $p=>$option) { $q=$p+1; #echo $q; ?>
						<?php if ( $p%2 == 0) { echo "<div class='row'>";} ?>
							<div class="col s12 m6">
								<p>
									<label>
									<input name="<?php echo $ques["id"]; ?>" type="radio" value="<?php echo $option; ?>" class="with-gap" />
									<span><?php echo $option; ?></span>
									</label>
								</p>
							</div>
						<?php if ( $q%2 == 0 or $q==count($ques["options"])+1 ); { echo "</div>";} ?>
						
					    <?php } ?>
                    <?php } ?>
				</div>
			</div>
        </div>
		<?php } ?>
			<input class="test" name="token" hidden value="{{token}}">
			<div class="row">
				<p class='center-align'>
					<button class="btn waves-effect pulse waves-light" type="submit">Submit
					<i class="material-icons right">send</i></button>
				</p>
			</div>
	</form>
	</div>
	<div class="fixed-action-btn">
		<a class="btn-floating btn-large blue ">
		<span id='countdown'>GO!</span>
		</a>
		<ul>
			<li><a class="btn-floating red"><i class="material-icons">filter_3</i></a></li>
			<li><a class="btn-floating yello"><i class="material-icons">filter_2</i></a></li>
			<li><a class="btn-floating green"><i class="material-icons">filter_1</i></a></li>
			<li><a class="btn-floating red">GO</a></li>
		</ul>
	</div>
</main>
<?php
	include('internal/footer.php');
?>
<script>
	var bonus_limit=300;
	var bonus_end = (new Date()).getTime()+bonus_limit*1000; //Sinc we are working in ms as per JS
	bonus_end_dt  = new Date(bonus_end) ;
	console.log() ;
	
	$( document ).ready(function() {
	    var m=1;
	});
	
	function countdownTimer() {
	    var difference = Math.round( (bonus_end_dt - ( new Date()) )/1000 ) ;
	    //console.log(difference);
	    if (difference< 0 ){
	        clearInterval(myInterval);   
	    }
	    $("#countdown").html(difference.toString());
	}
	
	myInterval = setInterval(countdownTimer, 1000);
</script>
<body>
</html>