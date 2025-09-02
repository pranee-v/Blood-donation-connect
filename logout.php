<?php
session_start();
session_unset();
session_destroy();

// ✅ Redirect to home after logout
header("Location: index.php");
exit();
?>
