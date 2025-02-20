<?php
include 'db.php';

$id = $_GET['id'];

// Get photo name to delete the file
$sql = "SELECT photo FROM detail WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$photo = $row['photo'];

$sql = "DELETE FROM detail WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    // Delete photo file
    if ($photo) {
        unlink("uploads/" . $photo);
    }
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: fetch_record.php');
?>