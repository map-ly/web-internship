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
$txt = "Php the best programming\n";
fwrite($myfile, $txt);
$txt = "Hallo PHP\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>