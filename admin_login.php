<?php

session_start();

$admin= 001;
$adminpass= 12345;
?>

<html>
<head>
    <title>Admin Log in</title>
</head>
<body>
    <h1> Admin Log in <h1>
    
    
    <form method = "post">
	<input type="number" name="ID" placeholder="ID"><br>
	<input type="password" name="pass" placeholder="Password"><br>
    <input type="submit" name="login" value="Login"> <br>
   
   </form>

   <?php
   if(isset($_POST['login']))
   {
       $id=$_POST['ID'];
       $pass=$_POST['pass'];
       if($id==$admin && $pass==$adminpass)
       {
           header('Location: dashboard.php');
       } 

       echo "Wrong info.";
   }
   
   ?>



</body>
</html>