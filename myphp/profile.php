<?php
//edit the last data in the database from the form
//define the variables
$Username = $_POST['Username'];
$age = $_POST['age'];
$dob = $_POST['dob'];
$contact = $_POST['contact'];
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "register";
// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//post the data to the form from the database
$sql = "UPDATE register SET Username='$Username', age='$age', dob='$dob', contact='$contact' ";
if ($conn->query($sql) === TRUE) {
  //alert("you have updated successfully");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
//on successful update alert the user
echo "<script>alert('you have updated your profile successfully')</script>";
//go to the profile page
//delay the page for 2 seconds

?>