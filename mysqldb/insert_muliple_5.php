<?php
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@gmail.com');";
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John1', 'Doe1', 'john1@gmail.com');";
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John2', 'Doe2', 'john2@gmail.com');";

if (mysqli_multi_quesry($conn, $sql)){
    echo "New record careted suscessfuly";
}else{
    echo "Error:" .$sql . "<br>" . mysqli_error($conn);
}
?>