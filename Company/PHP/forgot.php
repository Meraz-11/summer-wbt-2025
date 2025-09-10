 
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
 

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<h4>Password reset instructions have been sent to: " . htmlspecialchars($email) . "</h4>";
    } else {
        echo "<h2>Invalid Email Address</h2>";
        echo "<a href='forgot.html'>Try Again</a>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
   <link rel="stylesheet"  href="../CSS/company.css">
</head>
<body>
    <div class="header">
        <div class="logo"><span class="x">X</span>Company</div>
        <div class="nav">
            <a href="index.html">Home</a> | 
            <a href="index.html">Login</a> | 
            <a href="register.html">Registration</a>
        </div>
    </div>
 
    <div class="login-box">
        <form action="forgot.php" method="POST">
            <h3>FORGOT PASSWORD</h3>
            <label>Enter Email :</label>
            <input type="email" name="email" required><br><br>
 
            <input type="submit" value="Submit">
        </form>
    </div>
 
    <div class="footer">
        Copyright © 2017
    </div>
</body>
</html>
 