<?php
include 'db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM detail WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<html>
<head>
    <title>Update Record</title>
</head>
<body>
    
   
    <h2>Update Record</h2>
    <form method="POST" action="update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <label>First Name:</label>
        <input type="text" name="fname" value="<?php echo htmlspecialchars($row['fname']); ?>" required><br>
        <label>Last Name:</label>
        <input type="text" name="lname" value="<?php echo htmlspecialchars($row['lname']); ?>" required><br>
        <label>Age:</label>
        <input type="number" name="age" value="<?php echo htmlspecialchars($row['age']); ?>" required><br>
        <label>Email:</label>
        <input type="email" name="email" value="<?php echo htmlspecialchars($row['email']); ?>" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" value="<?php echo htmlspecialchars($row['phone']); ?>" required><br>
        <label>Photo:</label>
        

        <img src='uploads/<?php echo $row["photo"] ?>' width='50'>

        <input type="file" name="photo"> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

