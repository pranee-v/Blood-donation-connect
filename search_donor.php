<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Search Donor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Blood Donation Connect 🩸</header>
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="add_donor.php">Add Donor</a>
        <a href="search_donor.php">Search Donor</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div class="container">
        <h2>Search Donors</h2>
        <form method="POST">
            <select name="blood_group" required>
                <option value="">-- Select Blood Group --</option>
                <option>A+</option><option>A-</option>
                <option>B+</option><option>B-</option>
                <option>AB+</option><option>AB-</option>
                <option>O+</option><option>O-</option>
            </select>
            <input type="text" name="city" placeholder="Enter City" required>
            <button type="submit" name="search">Search</button>
        </form>

        <?php
        if(isset($_POST['search'])) {
            $blood_group = $_POST['blood_group'];
            $city = $_POST['city'];

            $sql = "SELECT * FROM donors 
                    WHERE blood_group='$blood_group' AND city='$city'
                    AND age >= 18 AND alcohol='No' AND heart_disease='No' AND genetic_disease='No'";
            $result = $conn->query($sql);

            if($result->num_rows > 0) {
                echo "<h3>Available Donors</h3>";
                echo "<table border='1'>
                        <tr>
                            <th>Name</th>
                            <th>Blood Group</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Age</th>
                        </tr>";
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row['name']."</td>
                            <td>".$row['blood_group']."</td>
                            <td>".$row['phone']."</td>
                            <td>".$row['city']."</td>
                            <td>".$row['age']."</td>
                          </tr>";
                }
                echo "</table>";
            } else {
                echo "<p style='color:red;'>❌ No eligible donors found in $city with blood group $blood_group.</p>";
            }
        }
        ?>
    </div>

    <footer>
        <p>© <?php echo date("Y"); ?> Blood Donation Connect | Developed By JYOTHIKA GIRIJALA</p>
    </footer>
</body>
</html>
