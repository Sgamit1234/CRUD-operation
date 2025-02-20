<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $photo = $_FILES['photo']['name'];

    // Upload photo
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($photo);
    move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

    $sql = "INSERT INTO detail (fname, lname, age, email, phone, photo) VALUES ('$fname', '$lname', '$age', '$email', '$phone', '$photo')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: view.php');
}
?>