<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open file</title>
</head>
<body>
<?php
$myfile = fopen("readme.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("readme.txt"));
fclose($myfile);
?>
    
</body>
</html>