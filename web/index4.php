<?php include ('header.php'); ?>

<?php
$page = $_GET['page']??'';
$content ='';

switch($page){
    case 'home':
    $content = 'home.php'; break;
    case 'about':
    $content = 'about.php'; break;
    case 'booking':
    $content = 'booking.php'; break;
    case 'contact':
    $content = 'contact.php'; break;
    case 'package':
    $content = 'packages.php'; break;
    case 'services':
    $content = 'services.php';
    default;

}
include $content;

?>

<?php include ('footer.php'); ?>