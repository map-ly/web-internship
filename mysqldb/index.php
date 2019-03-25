<?php include ('header.php');?>

<?php
$sql = 'select * from myguests';
$result = $conn->query($sql);
if ($result->num_rows > 0);
echo 'Has Data';
endif;
?>

<?php include ('footer.php');?>
