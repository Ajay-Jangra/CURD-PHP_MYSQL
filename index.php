<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>
    <h2>User Management</h2>
    
    <form action="process.php" method="POST">
        <label for="name">First Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="gender">Gender:</label><br>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select><br><br>

        <label for="contact_num">Contact Number:</label><br>
        <input type="text" id="contact_num" name="contact_num" required><br><br>

        <label for="address">Address:</label><br>
        <textarea id="address" name="address" required></textarea><br><br>

        <input type="submit" name="submit" value="Submit">
    </form>

    <h3>Existing Users</h3>
    <?php
        include 'db.php';
        $sql = "SELECT * FROM users";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<table border='1'><tr><th>Name</th><th>Last Name</th><th>Gender</th><th>Contact</th><th>Address</th><th>Actions</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>".$row['name']."</td>
                        <td>".$row['last_name']."</td>
                        <td>".$row['gender']."</td>
                        <td>".$row['contact_num']."</td>
                        <td>".$row['address']."</td>
                        <td>
                            <a href='update.php?id=".$row['id']."'>Edit</a> | 
                            <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                        </td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No users found.";
        }
    ?>
</body>
</html>
