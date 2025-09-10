<?php
session_start();
 

if (!isset($_SESSION['username'])) {

    header("Location: index.html");
    exit();
} 
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet"  href="../css/dashbord.css">
</head>
<body>
    <div class="header">
        <div class="logo"><span class="x">X</span>Company</div>
        <div class="nav">
            Logged in as <b><?php echo htmlspecialchars($username); ?></b> |
            <a href="logout.php">Logout</a>
        </div>
    </div>
 
    <div class="content">
        <div class="sidebar">
            <h3>Account</h3>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">View Profile</a></li>
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Change Profile Picture</a></li>
                <li><a href="#">Change Password</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
 
        <div class="main">
            <h2>Welcome <?php echo htmlspecialchars($username); ?></h2>
        </div>
    </div>
 
    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>