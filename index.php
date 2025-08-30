<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Blood Donation Connect 🩸</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>Blood Donation Connect 🩸</header>
    <nav>
        <a href="index.php">Home</a>
        <a href="add_donor.php">Add Donor</a>
        <a href="search_donor.php">Search Donor</a>
    </nav>

    <div class="container" style="text-align: center;">
        <h2>Welcome to Blood Donation Connect</h2>
        <p>🩸 Saving lives made easier. Connect donors and those in need, faster and simpler.</p>

        <?php
        $result = $conn->query("SELECT COUNT(*) AS total FROM donors");
        $row = $result->fetch_assoc();
        echo "<h3>📊 Total Registered Donors: " . $row['total'] . "</h3>";
        ?>

        <div style="margin-top:20px;">
            <a href="add_donor.php"><button>Add Donor</button></a>
            <a href="search_donor.php"><button>Search Donor</button></a>
        </div>
    </div>

    <footer>
        <p>© <?php echo date("Y"); ?> Blood Donation Connect | Made with ❤️</p>
    </footer>
</body>
</html>
