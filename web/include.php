<?php include('header.php'); ?>
<?php
	$page = $_GET['page'];
	if (!empty($page)) {
		include($page);
	} 
	else {
		include('home.php');
	} 
?>
<?php include('footer.php'); ?>


?>


