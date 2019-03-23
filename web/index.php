<?php include('header.php'); ?>
<?php
	$page = $_GET['page'] ?? '';
	$content="home.php";

	switch($page){
		case'home':
		$content ='home.php'; break;
		case'about':
		$content = 'about.php'; break;
		case'contact':
		$content = 'contact.php'; break;
		case'services':
		$content = 'services.php'; break;
		case'packages':
		$content = 'packages.php'; break;
		case'booking':
		$content = 'booking.php'; break;
		default: 
		$content = 'home.php'; break;
	}
	include ($content);
?>
<?php include('footer.php'); ?>



?>



