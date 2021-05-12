<?php
include('internal/config.php');
include('internal/utils.php');

$GLOBALS['page'] = 'register';

#Get role from URL, should be 1 of these - vol, don, pat
$roles = array("volunteer", "donor");
$checks=0;

if ( isset( $_GET['role'])  ){
    $role = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['role']);
    $role = str_replace(",","",$role); #Do we even need this? Or preg_repalce() takes care of it
    $role = strtolower($role); 
    if ( !in_array($role, $roles ) )  {
        #$checks=1;
        die("Role should be either of volunteer or donor");
    }
}else{
    #TODO- Setup a role selection right here. Dropdown, multilingual and go
    #$checks=2;
    die("Role not chosen");
}

$GLOBALS['role'] = $role;

include('internal/header.php');

?>

<main>
<?php if ($GLOBALS['role']=="donor") { ?>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdiwyV9Fj93SjknKcRRx9GPFGbuKm8-GAHZEN3QSTAeXCZLxQ/viewform?embedded=true" 
        width="100%" height="1500" allowfullscreen 
        frameborder="0" marginheight="0" marginwidth="0">Donor Registration
    </iframe>
<?php } elseif ($GLOBALS['role']=="volunteer") { ?>
    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSe4ten5eBNQdumMV2Lk9pzhgKQcgPozKi38dGjjRgNXv9PLZA/viewform?embedded=true"
        width="100%" height="2000" allowfullscreen 
        frameborder="0" marginheight="0" marginwidth="0">Volunteer Registration
    </iframe> 
<?php } else { die("Unknown role"); } ?>
</main>

<?php
	include('internal/footer.php');
?>

<script>

</script>

  </body>
</html>