<?php
$sqli = "UPDATE myguests SET id=5";
if(mysqli_query($conn, $sql)){

    echo "Record updated successfully";
}else{
    echo "Error updating record: " . mysqli_error($conn);
    
}
?>