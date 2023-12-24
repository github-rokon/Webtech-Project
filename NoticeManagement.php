<?php
session_start();

// Check if the admin is not logged in, redirect to login page
if (!isset($_SESSION['admin_id'])) {
    header('Location: admin_login.php');
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="js/regStu.js"></script> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Notice Management</h1>
<img src="notice.png" alt="Notice" width="120" height="120">


<form method="post" action="LogOut.php">
<input type="submit" name="submit" value="Log Out" class="button" >
</form>

<form method="post" action=dashboard.php>
<input type="submit" name="submit" value="Go to Dashboard" class="button">
</form>


<table align="center" cellpadding="25" cellspacing="0" width="auto" border="1" >

<tr>
    <th>Notice ID</th>
    <th>Notice Name</th>
    <th>Notice File</th>
    <th>Action</th>
   

</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admincontrol";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT User_ID, Notice_Name, NoticeFile FROM notice";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>". $row["User_ID"]."</td><td>". $row["Notice_Name"]."</td><td>". $row["NoticeFile"]."</td>";
        echo "<td><a href=\"updateNotice.php?User_ID=$row[User_ID]\">Edit</a> | 
        <a href=\"delNotice.php?User_ID=$row[User_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
    } 
echo"</table>";
}
else {
    echo "0 results";
}


$fstname  =  $noticefile = "";
$fstnameErr =  $noticefileErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate the first name
    $fstname = test_input($_POST["fstname"]);
    if (empty($fstname)) {
        $fstnameErr = "Notice name is required";
    }

    // Validate the file upload
    $noticefile = test_input($_POST["noticefile"]);
    if (empty($noticefile)) {
        $noticefileErr = "Notice name is required";
    }


   


}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>


<table>
<fieldset>
<legend>Insert Notice</legend>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return registration()" novalidate>
  <label for="fstname">Notice name:</label>
  <input type="text" name="fstname" id="fstname" value="<?php echo $fstname; ?>">
  <span class="error"><?php echo $fstnameErr; ?></span>
  <br><br>

  <label for="noticefile">Upload notice:</label>
  <input type="file" id="myFile" name="noticefile" value="<?php echo $noticefile; ?>">
  <br><br>




  <input type="submit" name="submit" value="Insert Notice" class="button">
</form>
</table>
</fieldset>




<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $fstnameErr == "" && $noticefileErr == "" ) {

    // Insert data into the database
    $sql = "INSERT INTO notice ( Notice_Name, NoticeFile) VALUES ('$fstname', '$noticefile')";
    if ($conn->query($sql) === true) {
        echo "Data inserted sucessfully";
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>



</table>
</body>
</html