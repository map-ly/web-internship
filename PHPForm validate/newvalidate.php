<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<style>
.error {color: #FF0000;}
</style>
<body>
<?php
// define variables and set to empty values
$nameErr = $phoneErr = $emailErr = $commentErr="";
$name = $phone =$email = $comment ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["phone"])) {
    $phoneErr = "phone is required";
  } else {
    $phone = test_input($_POST["phone"]??'');
    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
    
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation </h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  Phone: <input type="text" name="phone">
  <span class="error">* <?php echo $phoneErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form><?php

if (!empty($nameErr="".&&.$phoneErr="".&&.$emailErr="".&&.$commentErr)){
  
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $phone;
echo "<br>";
echo $email;
echo "<br>";
echo $comment;

?>
}



</body>
</html>