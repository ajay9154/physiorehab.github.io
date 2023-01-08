<?php

$yourName = $_POST['yourName'];
$youremail = $_POST['youremail'];
$phoneNumber = $_POST['phoneNumber'];
$subject = $_POST['subject'];


// Data Base Connection

$conn = new mysqli('localhost', 'u411069633_skclinic7415', '@pajN4L1', 'u411069633_physiodatabase');
if($conn->connect_error){
    die('Connection Failed : ' . $conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into contactdb(yourName, yourEmail, phoneNumber, subject) values(?, ?, ?, ?)");
    $stmt->bind_param("ssss", $yourName, $yourEmail,  $phoneNumber, $subject);
    $stmt->execute();
    echo "registration Successfully...";
    $stmt->close();
    $conn->close();
}

?>
