<?php
$sql = "SELECT id, firstname, lastname, FROM myguests";
$result = $conn->query($sql);

if ($result->num_row > 0){
    // output data of each row
    while($row = $result->fetch_assoc()){
        echo "id:" . $row["id"]. " - Name:" . $row["firstname"]. " " . $row["lastname"]. "<br>";

    }
} else{
    echo "0 results";
}
?>