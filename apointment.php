<?php

$yourName = $_POST['yourName'];
$phoneNumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$date = $_POST['date'];
$subject = $_POST['subject'];


// Data Base Connection

$conn = new mysqli('127.0.0.1:3306', 'u411069633_skclinic7415', '@pajN4L1', 'u411069633_physiodatabase');
if($conn->connect_error){
    die('Connection Failed : ' . $conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into apointment(yourName, phoneNumber, email, date, subject) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $yourName, $phoneNumber, $email, $date, $subject);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}





?>