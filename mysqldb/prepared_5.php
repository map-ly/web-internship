<?php
$stmt = $conn->prepare("INSERT INTO myguests (firstname, lastname, email) VALUE (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

$firstname = "Korn";
$lastname = "Ratha";
$email = "korn ratha@gmail.com";
$stmt->execute();

$firstname = "Huy ";
$lastname = "manith";
$email = "Hoy Manith@gmail.com";
$stmt->execute();

$firstname = "Sombo";
$lastname = "Samrogn";
$email = "sombosomrotng@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
?>