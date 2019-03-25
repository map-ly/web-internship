<?php
$sql = "DELETE FROM myguests WHERE id=5";

if (mysqli_query($conn, $sql)){
    echo "Record deleted sucessuly";

}else{
    echo "Error: deleting record: " . mysqli_error($conn);
}
?>