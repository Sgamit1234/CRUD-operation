<?php
include 'db.php';

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $photo = $_FILES['photo']['name'];

    if ($photo) {
        // Upload new photo
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo);
        move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

        $sql = "UPDATE detail SET fname='$fname', lname='$lname', age='$age', email='$email', phone='$phone', photo='$photo' WHERE id=$id";
    } else {
        $sql = "UPDATE detail SET fname='$fname', lname='$lname', age='$age', email='$email', phone='$phone' WHERE id=$id";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    header('Location: view.php');
}
?>