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
    <title>Add Donor</title>
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
            <input type="text" name="phone" placeholder="Contact Number" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="number" name="age" placeholder="Age" required>
            <select name="alcohol" required>
                <option value="">Alcohol Consumption?</option>
                <option>No</option>
                <option>Yes</option>
            </select>
            <select name="heart_disease" required>
                <option value="">Heart Disease?</option>
                <option>No</option>
                <option>Yes</option>
            </select>
            <select name="genetic_disease" required>
                <option value="">Genetic Disease?</option>
                <option>No</option>
                <option>Yes</option>
            </select>
            <button type="submit" name="submit">Add Donor</button>
        </form>

        <?php
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $blood_group = $_POST['blood_group'];
            $phone = $_POST['phone'];
            $city = $_POST['city'];
            $age = $_POST['age'];
            $alcohol = $_POST['alcohol'];
            $heart_disease = $_POST['heart_disease'];
            $genetic_disease = $_POST['genetic_disease'];

            // ✅ Eligibility check
            if ($age < 18 || $alcohol == "Yes" || $heart_disease == "Yes" || $genetic_disease == "Yes") {
                echo "<p style='color:red;'>❌ Donor is not eligible to donate blood.</p>";
            } else {
                $sql = "INSERT INTO donors (name, blood_group, phone, city, age, alcohol, heart_disease, genetic_disease) 
                        VALUES ('$name','$blood_group','$phone','$city','$age','$alcohol','$heart_disease','$genetic_disease')";
                if ($conn->query($sql) === TRUE) {
                    echo "<p style='color:green; font-weight:bold;'>✅ Donor added successfully!</p>";
                } else {
                    echo "<p style='color:red;'>❌ Error: " . $conn->error . "</p>";
                }
            }
        }
        ?>
    </div>
    <footer>
        <p>© <?php echo date("Y"); ?> Blood Donation Connect | Developed By JYOTHIKA GIRIJALA</p>
    </footer>
</body>
</html>
