<?php
include('internal/config.php');
include('internal/utils.php');

$GLOBALS['page'] = 'register';

#Get role from URL, should be 1 of these - vol, don, pat



include('internal/header.php');

?>

<main>
<!-- <h2 id="main-head" class = "center-align">Aladin MFs</h2> -->
<div class="container">
    <div class="row center-align">
        <div class="col m12 s12"> 
            <div class="video-container" style="height:auto">
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdiwyV9Fj93SjknKcRRx9GPFGbuKm8-GAHZEN3QSTAeXCZLxQ/viewform?embedded=true" 
                    width="100%" frameborder="0" marginheight="0" marginwidth="0">Donor Registration
                </iframe>
            </div>
        </div>
    </div>
</div>
</main>

<?php
	include('internal/footer.php');
?>

<script>

</script>

  </body>
</html>