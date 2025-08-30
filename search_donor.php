<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Donor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Blood Donation Connect 🩸</header>
    <nav>
        <a href="index.php">Home</a>
        <a href="add_donor.php">Add Donor</a>
        <a href="search_donor.php">Search Donor</a>
    </nav>

    <div class="container">
        <h2>Find a Donor</h2>
        <form method="POST">
            <select name="blood_group" required>
                <option value="">-- Select Blood Group --</option>
                <option>A+</option><option>A-</option>
                <option>B+</option><option>B-</option>
                <option>AB+</option><option>AB-</option>
                <option>O+</option><option>O-</option>
            </select>
            <input type="text" name="city" placeholder="Enter City">
            <button type="submit" name="search">Search</button>
        </form>

        <?php
        if(isset($_POST['search'])) {
            $blood_group = $_POST['blood_group'];
            $city = $_POST['city'];

            $sql = "SELECT * FROM donors WHERE blood_group='$blood_group'";
            if (!empty($city)) {
                $sql .= " AND city LIKE '%$city%'";
            }
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Name</th><th>Blood Group</th><th>Contact</th><th>City</th></tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['blood_group']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['city']."</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='color:red;'>❌ No donors found.</p>";
            }
        }
        ?>
    </div>
    <footer>
    <p>© <?php echo date("Y"); ?> Blood Donation Connect | Made with ❤️</p>
</footer>

</body>
</html>
