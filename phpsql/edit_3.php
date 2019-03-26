<?php require 'header.php'; ?>

<?php
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die('No id');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // die($_SERVER["PHP_SELF"]);
        $firstname = input($_POST['firstname']);
        $lastname = input($_POST['lastname']);
        $email = input($_POST['email']);
        
        $sql = "update myguests set firstname='".$firstname."', lastname='".$lastname."', email='".$email."' where id=".$_GET['id'];
        // die($sql);
        if ($conn->query($sql) === TRUE) {
            header('Location: index.php');
        } else {
            // When Insert fail
            die('Fail');
        }
    }

    $sql1 = 'select * from myguests where id='.$_GET['id'];
    $r = $conn->query($sql1)->fetch_assoc();
    if (!$r) die('Not Found!!!');

?>
<h1>EDIT PAGE</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>?id=<?php echo $_GET['id']; ?>" method="post">
    <input type="text" name="firstname" value="<?php echo $r['firstname']; ?>" placeholder="Firstname">
    <input type="text" name="lastname" value="<?php echo $r['lastname']; ?>" placeholder="Lastname">
    <input type="text" name="email" value="<?php echo $r['email']; ?>" placeholder="Email">
    <button type="submit">Update</button>
</form>

<?php require 'footer.php'; ?>