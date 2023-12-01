<?php



echo"<h1>This page is under construction</h1>";
echo"<a href=FacultyManagement.php>Faculty Management </a>";



?>

<!--
  
<html>
<head>	
	<title>Edit Faculty Data</title>
</head>
<body>

<h1>Faculty Data Update</h1>

<p>
	<a href="FacultyManagement.php"> Faculty Management </a>
</p>

<?php /*
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

// Get id parameter value from URL
$User_ID = $_GET['User_ID'];

echo "User ID is: $User_ID";

// Delete row from the database table
$sql = "SELECT * FROM faculty WHERE User_ID = $User_ID";
$result = $conn->query($sql);

$fstname = $lstname = $gender = $DoB = $bg = $religion = $nid = $fname = $mname = $ssc_gpa = $hsc_gpa = $bsc_cgpa = $msc_cgpa = $email = $pwd = $faculty =  "";
$fstnameErr = $lstnameErr = $genderErr = $DoBErr = $bgErr = $religionErr = $nidErr = $fnameErr = $mnameErr = $ssc_gpaErr = $hsc_gpaErr = $bsc_cgpaErr = $msc_cgpaErr = $emailErr = $pwdErr = $facultyErr =  "";



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

*/
?>



<table>
    <fieldset>
        <legend>Update Faculty Information</legend>

        <form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="fstname">First name:</label>
  <input type="text" name="fstname" id="fstname" value="<?php //echo $fstname; ?>">
  <span class="error"><?php //echo $fstnameErr; ?></span>
  <br><br>

  <label for="lstname">Last name:</label>
  <input type="text" name="lstname" id="lstname" value="<?php //echo $lstname; ?>">
  <span class="error"><?php //echo $lstnameErr; ?></span>
  <br><br>

  <p><b>Gender : </b></p>
  <input type="radio" id="Male" name="gender" value="Male" <?php //if ($gender === "Male") echo "checked"; ?>>
  <label for="Male">Male</label><br>
  <input type="radio" id="Female" name="gender" value="Female" <?php //if ($gender === "Female") echo "checked"; ?>>
  <label for="Female">Female</label><br>
  <input type="radio" id="Others" name="gender" value="Others" <?php //if ($gender === "Others") echo "checked"; ?>>
  <label for="Others">Others</label><br>
  <span class="error"><?php //echo $genderErr; ?></span>
  <br><br>

  <label for="date">Date of birth:</label>
  <input type="date" name="DoB" id="DoB" value="<?php //echo $DoB; ?>">
  <span class="error"><?php //echo $DoBErr; ?></span>
  <br><br>

  <label for="bg">Blood Group: </label>
    <select name="bg" id="bg" placeholder="Select..." required>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O-">O-</option>
    <option value="O+">0+</option>
    </select><br>

  <label for="Religion"><b>Religion :</b></label>
    <select id="religion" name="religion" placeholder="Select..." required>
    <option value="Muslim">Muslim</option>
    <option value="Hindu">Hindu</option>
    <option value="Christian">Christian</option>
    <option value="Buddha">Buddha</option>
    <option value="Others">Others</option>
    </select>


  <label for="nid">NID :</label>
  <input type="number" name="nid" id="nid" value="<?php //echo $nid; ?>">
  <span class="error"><?php //echo $nidErr; ?></span>
  <br><br>

  <label for="fname">Father's name:</label>
  <input type="text" name="fname" id="fname" value="<?php //echo $fname; ?>">
  <span class="error"><?php //echo $fnameErr; ?></span>
  <br><br>

  <label for="mname">Mother's name:</label>
  <input type="text" name="mname" id="mname" value="<?php //echo $mname; ?>">
  <span class="error"><?php //echo $mnameErr; ?></span>
  <br><br>

  <label for="ssc_gpa">SSC Result:</label>
  <input type="text" name="ssc_gpa" id="ssc_gpa" value="<?php //echo $ssc_gpa; ?>">
  <span class="error"><?php //echo $ssc_gpaErr; ?></span>
  <br><br>

  <label for="hsc_gpa">HSC Result:</label>
  <input type="text" name="hsc_gpa" id="hsc_gpa" value="<?php //echo $hsc_gpa; ?>">
  <span class="error"><?php //echo $hsc_gpaErr; ?></span>
  <br><br>

  <label for="bsc_cgpa">BSc Result:</label>
  <input type="text" name="bsc_cgpa" id="bsc_cgpa" value="<?php //echo $bsc_cgpa; ?>">
  <span class="error"><?php //echo $bsc_cgpaErr; ?></span>
  <br><br>

  <label for="msc_cgpa">MSc Result:</label>
  <input type="text" name="msc_cgpa" id="msc_cgpa" value="<?php //echo $msc_cgpa; ?>">
  <span class="error"><?php //echo $msc_cgpaErr; ?></span>
  <br><br>

  <label for="email">Email:</label>
  <input type="email" name="email" id="email" value="<?php //echo $email; ?>">
  <span class="error"><?php //echo $emailErr; ?></span>
  <br><br>

  <label for="pwd">Password:</label>
  <input type="password" name="pwd" id="pwd" value="<?php //echo $pwd; ?>">
  <span class="error"><?php //echo $pwdErr; ?></span>
  <br><br>

  <label for="Faculty"><b>Faculty :</b></label>
    <select id="faculty" name="faculty" placeholder="Select..." required>
    <option value="FACULTY OF SCIENCE & TECHNOLOGY">FACULTY OF SCIENCE & TECHNOLOGY</option>
    <option value="FACULTY OF BUSINESS ADMINISTRATION">FACULTY OF BUSINESS ADMINISTRATION</option>
    <option value="FACULTY OF ENGINEERING">FACULTY OF ENGINEERING</option>
    <option value="FACULTY OF ARTS & SOCIAL SCIENCES">FACULTY OF ARTS & SOCIAL SCIENCES</option>
    </select><br><br>

    
		<td><input type="submit" name="update" value="Update"></td>
        </form>
    </fieldset>


</table>
</body>
</html>
	
-->