<?php
$sql = "INSERT INTO myguests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@gmail.com');";
$sql .= "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Mary', 'Moe', 'mary@gmail.com');";
$sql .= "INSERT INTO myguests (firstname, lastname, email)
VALUES ('Julie', 'Dooley', 'julie@gmail.com')";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>