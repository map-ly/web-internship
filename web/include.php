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
<?php
$page = $_GET['page'];

switch ($page) {
	case ('home'):
		include 'header/footer/home.php';
		break;
	case ('about'):
		include 'header/footer/about.php';
		break;
	case ('contacts'):
		include 'header/footer/contacts.php';
		break;
	case ('booking'):
		include 'header/footer/booking.php';
		break;
	case ('services'):
		include 'header/footer/contacts.php';
		break;
		case ('contacts'):
	include 'header/footer/pagckages.php';
		break;
	default:
		include 'header/footer/home.php';
}
?>
