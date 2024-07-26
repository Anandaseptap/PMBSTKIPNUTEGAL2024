<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $program = $_POST['program'];

    if (empty($name) || empty($email) || empty($program)) {
        echo "All fields are required.";
        exit;
    }

    $sql = "INSERT INTO registrations (name, email, program) VALUES ('$name', '$email', '$program')";

    if ($conn->query($sql) === TRUE) {
        echo "Pendaftaran berhasil!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request method.";
}
?>
