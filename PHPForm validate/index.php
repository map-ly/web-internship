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
        $nameErr = $emailErr = $phoneErr = $commentErr = "";
        $name = $email = $phone = $comment = "";
        $failed = true;

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
                $commentErr = "Comment is required";
            }else{
                $comment = test_input($_POST["comment"]);
            }
            if ($comment != "" && $email != "" && $name != "" && $phone != "") {
                $failed = false;
            }
        }
        function test_input($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
        <h3>Form Validate</h3>
        <form method ="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name: <input type="text" name="name" value="<?php echo $_POST['name'] ?? '' ?>">
            <span class="error">*<?php echo $nameErr;?></span>
            <br><br>
            Phone: <input type="text" name="phone" value="<?php echo ($failed) ? $phone : ''; ?>">
            <span class="error">*<?php echo $phoneErr;?></span>
            <br><br>
            E-mail: <input type="text" name="email" value="<?php echo ($failed) ? $email : ''; ?>">
            <span class="error" >* <?php echo $emailErr;?></span>
            <br><br>
            Message: <br>
            <textarea name="comment" ><?php echo ($failed) ? $comment : ''; ?></textarea>
            <span class="error" >* <?php echo $commentErr;?></span>
            <br><br>
            <input type="submit" name="submit" value="submit">
        </form>
        <h3>Form Record:</h3>
        <?php
            echo $name."<br>";
            echo $email."<br>";
            echo $phone."<br>";
            echo $comment."<br>";
        ?>     
    </body>
</html>