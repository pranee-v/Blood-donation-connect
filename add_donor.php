<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Donor</title>
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
        <h2>Register as a Donor</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Full Name" required>
            <select name="blood_group" required>
                <option value="">-- Select Blood Group --</option>
                <option>A+</option><option>A-</option>
                <option>B+</option><option>B-</option>
                <option>AB+</option><option>AB-</option>
                <option>O+</option><option>O-</option>
            </select>
            <input type="text" name="contact" placeholder="Contact Number" required>
            <input type="text" name="city" placeholder="City" required>
            <button type="submit" name="submit">Add Donor</button>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $blood_group = $_POST['blood_group'];
            $contact = $_POST['contact'];
            $city = $_POST['city'];

            $sql = "INSERT INTO donors (name, blood_group, contact, city) 
                    VALUES ('$name','$blood_group','$contact','$city')";
            if ($conn->query($sql) === TRUE) {
                echo "<p style='color:green; font-weight:bold;'>✅ Donor added successfully!</p>";
            } else {
                echo "<p style='color:red;'>❌ Error: " . $conn->error . "</p>";
            }
        }
        ?>
    </div>
    <footer>
    <p>© <?php echo date("Y"); ?> Blood Donation Connect | Made with ❤️</p>
</footer>

</body>
</html>
