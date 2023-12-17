<?php
session_start();

$admin = 001;
$adminpass = 12345;

if (isset($_POST['login'])) {
    $id = $_POST['ID'];
    $pass = $_POST['pass'];

    if ($id == $admin && $pass == $adminpass) {
        // Store admin information in the session
        $_SESSION['admin_id'] = $id;
        header('Location: dashboard.php');
        exit(); // Always exit after a header redirect to prevent further script execution
    } else {
        $error_message = "Wrong info.";
    }
}
?>

<html>
<head>
    <title>Admin Log in</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Center-align the image */
        img {
            display: block;
            margin: 0 auto;
        }

        .form-container {
            max-width: 300px;
            margin: 0 auto;
        }

    </style>
    
</head>
<body>
    <h1> Admin Log in </h1>
    <img src="Admin.png" alt="Admin" width="120" height="120">

    <div class="form-container">
    <form method="post">
        <input type="number" name="ID" placeholder="ID" required><br>
        <input type="password" name="pass" placeholder="Password" required><br>
        <input type="submit" name="login" value="Login"> <br>
    </form>

    <?php
    if (isset($error_message)) {
        echo $error_message;
    }
    ?>
    

</body>
</html>
