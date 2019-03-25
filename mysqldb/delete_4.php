<?php
// sql to deleted a record
$sql = "DELETE FROM myguests WHERE id=4";

if (mysqli_query($conn, $sql)){
    echo "Record deleted successfully";

}else{
    echo "Error deleteing record:" . mysqli_error($conn);
    
}
?>