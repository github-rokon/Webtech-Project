<?php
$admin= 001;
$adminpass= 12345;
?>

<html>
<head>
    <title>Dashboard</title>
    
</head>
<body>
    <h1> Welcome to the Dashboad <h1>
    
    
    <a href="FacultyManagement.php">Faculty Management</a><br>
    <a href="StudentManagement.php">Student Management</a><br>
    <a href="StuffManagement.php">Stuff Management</a><br>

    <form method="post" action=admin_login.php>

    <input type="submit" name="submit" value="Log Out">

    </form>



</body>
</html>