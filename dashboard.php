<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    // ✅ Not logged in → redirect to login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Blood Donation Connect</title>
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
        <h2>Welcome, <?php echo $_SESSION['username']; ?> 👋</h2>
        <p>What would you like to do today?</p>
        
        <div class="actions">
            <a href="add_donor.php"><button>Add Donor</button></a>
            <a href="search_donor.php"><button>Search Donor</button></a>
        </div>
    </div>

    <footer>
        <p>© <?php echo date("Y"); ?> Blood Donation Connect | Developed By JYOTHIKA GIRIJALA</p>
    </footer>
</body>
</html>
