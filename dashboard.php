<?php
session_start();

// Check if the admin is not logged in, redirect to login page
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}
?>

<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <img src="Dashboard.png" alt="Dashboard" width="100" height="100"><br>
    
    <a href="FacultyManagement.php"  >Faculty Management</a><br><br>
    <a href="StudentManagement.php">Student Management</a><br><br>
    <a href="StuffManagement.php">Stuff Management</a><br><br>

    <form method="post" action="LogOut.php">
        <input type="submit" name="submit" value="Log Out">
    </form>
</body>
</html>
