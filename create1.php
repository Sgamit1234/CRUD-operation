<!DOCTYPE html>
<html>
<head>
    <title>Create Record</title>
</head>
<body>
   
    <form method="post" action="create.php" enctype="multipart/form-data" method="post">
        <label>First Name:</label>
        <input type="text" name="fname" required><br>
        <label>Last Name:</label>
        <input type="text" name="lname" required><br>
        <label>Age:</label>
        <input type="number" name="age" required><br>
        <label>Email:</label>
        <input type="email" name="email" required><br>
        <label>Phone:</label>
        <input type="text" name="phone" required><br>
        <label>Photo:</label>
        <input type="file" name="photo" required><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
