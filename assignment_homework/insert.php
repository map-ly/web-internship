<?php require 'header.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // var_dump($_FILES['upload']);
    // die();
    $firstname = input($_POST['firstname']);
    $lastname = input($_POST['lastname']);
    $email = input($_POST['email']);

    $myFile = $_FILES['upload'];

    if ($myFile["tmp_name"]) {
        $fileName = basename($myFile["name"]);
        $target_file = $fileName ? "assets/" . $fileName : '';
    
        if (move_uploaded_file($myFile["tmp_name"], $target_file)) {
            // echo "The file ". basename( $myFile["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    // die($target_file);
    // $sql = "INSERT INTO myguests (firstname, lastname, email, profile) VALUES ('".$firstname."','".$lastname."', '".$email."', '".$target_file."')";
    // die($sql);

    $stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email, profile) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $fn, $ln, $em, $pr);
    
    // set parameters and execute
    $fn = $firstname;
    $ln = $lastname;
    $em = $email;
    $pr = $target_file;
   if ($stmt->execute() === TRUE) {
        header('Location: index.php');
    } else {
        die('asd');
    }
    // if ($conn->query($sql) === TRUE) {
        // header('Location: index.php');
    // } else {
        // When Insert fail
        // die('asd');
    // }
}

?>
<h1>INSERT PAGE</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
    <input type="text" name="firstname" id="" placeholder="Firstname">
    <input type="text" name="lastname" id="" placeholder="Lastname">
    <input type="text" name="email" id="" placeholder="Email">
    <input type="file" name="upload" >
    <button type="submit">Insert</button>
</form>

<?php require 'footer.php'; ?>