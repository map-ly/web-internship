<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<body>
<?php
$name = $email = $phone = $comment='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = test_input($_POST["name"]);
    $phone = test_input($_POST["phone"]);
    $email = test_input($_POST["email"]);
    $comment= test_input($_POST["comment"]);
}
function test_input ($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
?>
<h3>Form Validate</h3>
<form method ="post" action="<?php echo
htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
Phone: <input type="text" name="phone">
E-mail: <input type="text" name="email"><br>
Message: <br>
<textarea name="comment" rows="10" cols="50"></textarea>
<br><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
echo "<h3>Form Record:</h3>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phone;
echo "<br>";
echo $comment;
echo "<br>";
?>
    
</body>
</html>