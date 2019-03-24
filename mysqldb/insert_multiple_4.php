<?php
$ql = "INSERT INTO myguests ('firstname, lastname, email')
VALUE ('John', 'Doe', 'john@gmail.com');";
$ql = "INSERT INTO myguests ('firstname, lastname, email')
VALUE ('John1', 'Doe1', 'joh1@gmail.com');";
$ql = "INSERT INTO myguests ('firstname, lastname, email')
VALUE ('John2', 'Doe2', 'john2@gmail.com');";

if (mysqli_multi_query($conn, $sql)){
    echo "New record created sucessfuly";
}else{
    echo "Error:" . $slq . "<br>" . mysqli_error($conn);
    
}
?>