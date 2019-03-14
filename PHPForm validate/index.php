<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
</head>
<style>
.error {color: #FF0000;}
</style>
<body>
<?php
$nameErr = $emailErr = $phoneErr = $commentErr="";
$name = $email = $phone = $comment='';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if (empty($_POST["name"])){
        $nameErr ="Name is required";
    }else{
        $name = test_input($_POST["name"]);
    }
    if (empty($_POST["phone"])){
        $phoneErr ="phone is required";
    }else{
        $phone = test_input($_POST["phone"]);
    }
    if (empty($_POST["email"])){
        $emailErr ="Email is required";
    }else{
        $email = test_input($_POST["email"]);
    }
    if (empty($_POST["comment"])){
        $comment="";
    }else{
        $comment = test_input($_POST["comment"]);
    }

}
function test_input ($data){
    $data = trim($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    
}
?>
<h3>Form Validate</h3>

<form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name">
<span class="error">*<?php echo $nameErr;?></span>
<br><br>
Phone: <input type="text" name="phone">
<span class="error">*<?php echo $phoneErr;?></span>
<br><br>
E-mail: <input type="text" name="email">
<span class="error">* <?php echo $emailErr;?></span>
  <br><br>

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