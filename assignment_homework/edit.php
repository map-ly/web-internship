<?php require 'header.php'; ?>

<?php
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die('No id');
    }

    $sql1 = 'select * from myguests where id='.$_GET['id'];
    $r = $conn->query($sql1)->fetch_assoc();
    if (!$r) die('Not Found!!!');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // die($_SERVER["PHP_SELF"]);
        $firstname = input($_POST['firstname']);
        $lastname = input($_POST['lastname']);
        $email = input($_POST['email']);

        $target_file = '';
        $myFile = $_FILES['upload'];
        if ($myFile["tmp_name"]) {
            $fileName = basename($myFile["name"]);
            $target_file = $fileName ? "assets/" . $fileName : '';
        
            if (move_uploaded_file($myFile["tmp_name"], $target_file)) {
                // echo "The file ". basename( $myFile["name"]). " has been uploaded.";
                if ($r['profile'] && file_exists($r['profile'])) {
                    unlink($r['profile']);
                }

            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }


        $sql = "update myguests set firstname='".$firstname."', lastname='".$lastname."', email='".$email."', profile='".$target_file."' where id=".$_GET['id'];
        // die($sql);
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php'); exit();
        } else {
            // When Insert fail
            die('Fail');
        }
    }

    

?>
<h1>EDIT PAGE</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="firstname" value="<?php echo $r['firstname']; ?>" placeholder="Firstname">
    <input type="text" name="lastname" value="<?php echo $r['lastname']; ?>" placeholder="Lastname">
    <input type="text" name="email" value="<?php echo $r['email']; ?>" placeholder="Email">
    <hr>
    <div>
        <img src="<?php echo $r['profile']; ?>" alt="" style="width:50px;height:50px;">
        <input type="file" name="upload" id="">
    </div>
    <hr>
    <button type="submit">Update</button>
</form>

<?php require 'footer.php'; ?>