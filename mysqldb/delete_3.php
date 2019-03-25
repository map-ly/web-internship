<?php
$sql = "DELETE FROM myguests WHERE id=4";

if (mysqli_query ($conn, $sql)){
    echo "Record deleted sucessfuly";

}else{
    echo "Error deleting record: " . mysqli_error($conn);
    
}
?>