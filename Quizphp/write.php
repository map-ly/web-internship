<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Write</title>
</head>
<body>
<?php
$myfile = fopen("write.txt", "w") or die("Unable to open file!");
$txt = date('d-m-y h:i:s a');
fwrite($myfile, $txt);
fclose($myfile);

$myfile1 = fopen("write.txt", "r") or die("Unable to open file!");
while(!feof($myfile)){
fclose($myfile)."<br>";
}



?>
</body>
</html>