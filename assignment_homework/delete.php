<?php
    require 'config.php';

    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die('No id');
    }

    $sql = 'delete from myguests where id='.$_GET['id'];
    $result = $conn->query($sql);

    // Error or Success Message

    $conn->close();
    header('Location: index.php'); exit();
?>