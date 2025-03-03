<?php
include 'db.php'; // Ensure this file exists

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST["fullname"];
    $age = $_POST["age"];
    $organ = $_POST["organ"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    $sql = "INSERT INTO donors (fullname, age, organ, email, address) 
            VALUES ('$fullname', '$age', '$organ', '$email', '$address')";

    if ($conn->query($sql) === TRUE) {
        echo "Donation request submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
