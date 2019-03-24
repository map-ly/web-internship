<?php
// sql to delete a record
$sql = "DELETE FROM myguests WHERE id=3";

if (mysqli_query($conn, $sql)){
    echo "Record deleted successfully";
    
}else{
    echo "Error deleteing record:" . mysqli_error($conn);
    
}
?>