<?php include('header.php'); ?>
<?php
	$page = $_GET['page'];	/* gets the variable $page */
	if (!empty($page)) {
		include($page);
	} 	/* if $page has a value, include it */
	else {
		include('home.php');
	} 	/* otherwise, include the default page */
?>
<?php include('footer.php'); ?>


?>


