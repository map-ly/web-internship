<?php
$sql = "UPDATE myguests SET lastname ='Doe' WHERE id=3";

if(mysqli_query($conn, $sql)){
    echo "Record update sucessfuly";

}else{
    echo "Error updating record:" . mysqli_error($conn);

}
?>