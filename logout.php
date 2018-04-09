<?php
/**
* Home Page for the main site
* @license      Apache License v2.0
* @author       Smashedbotatos <ian@icarey.net>
* @copyright    Copyright © 2009-2018 iCarey Computer Services.
*/
include_once('header.php');
?>

<?php
if (isset($_SESSION['icarey']['email'])) :
	session_unset();
	session_destroy();
endif;

/** Voila! Here we shall gently nudge them somewhere else. */
header('Location: index.php');
exit();

include_once('footer.php');
?>
