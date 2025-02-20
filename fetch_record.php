<html>
<head>
    <title>Student Detail</title>
</head>
<body><h2>Student Detail</h2><br>
    <a href="create1.php">Add New Record</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Photo</th>
            <th>Action</th>
        </tr>
        

<?php
include 'db.php';

$sql = "SELECT * FROM detail";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["fname"]. "</td>
                <td>" . $row["lname"]. "</td>
                <td>" . $row["age"]. "</td>
                <td>" . $row["email"]. "</td>
                <td>" . $row["phone"]. "</td>
                <td><img src='uploads/" . $row["photo"] . "' width='50'></td>
                <td>
                    <a href='update1.php?id=" . $row["id"] . "'>Edit</a> |
                    <a href='delete.php?id=" . $row["id"] . "'>Delete</a>
                </td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No records found</td></tr>";
}
$conn->close();
?>
    


</table>


    
</body>
</html>
