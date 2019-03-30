<?php require "header.php"; ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $inputFN = $_POST['firstname'];
    $inputLN = $_POST['lastname'];
    $inputEmail = $_POST['email'];

    $st = $conn->prepare('insert into myguests (firstname, lastname, email, profile) values (?,?,?,?)');
    $st->bind_param('ssss', $fn, $ln, $em, $pr);
    $fn = $inputFN;
    $ln = $inputLN;
    $em = $inputEmail;
    $pr = '';

    if ($st->execute() === true) {
        

        if (isset($_POST['save_back'])) {
            // header('Location: index.php'); exit();
            // die('save_back');

        } elseif (isset($_POST['save_edit'])) {
            // header('Location: index.php'); exit();
            // die('save_edit');

        } elseif (isset($_POST['save_new'])) {
            // header('Location: index.php'); exit();
            // die('save_new');

        } else {
            die('What are you try to do ?');
        }

    } else {
        // Message
    }

}

?>


<h1 class="col-md-12">Add new page <a href="index.php" class="btn btn-link">Back</a></h1>

<form method="POST" enctype="multipart/form-data" class="col-md-12">
    <div class="form-row">
        <hr class="col-md-12 mb-3">
            <div class="form-group col-md-4 ">
                <label for="exampleInputEmail1">Firstname</label>
                <input type="text" name="firstname" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group col-md-4 ">
                <label for="exampleInputEmail1">Lastname</label>
                <input type="text" name="lastname" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group col-md-4 ">
                <label for="exampleInputEmail1">Email</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1">
            </div>

            <div class="form-group col-md-12">
                <label for="customFile">Profile</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
                
            </div>
        <hr class="col-md-12 mt-3">
        <button type="submit" name="save_back" class="btn btn-primary">Save & Back</button>
        <button type="submit" name="save_edit" class="btn btn-primary">Save & Edit</button>
        <button type="submit" name="save_new" class="btn btn-primary">Save * New</button>
    </div>
</form>

<?php require "footer.php"; ?>