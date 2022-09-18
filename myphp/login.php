<?php

if(empty($_POST['Email']) || empty($_POST['password'])){
  echo "<script>alert('fill all the fields')</script>";
  //delay for 2 seconds
  header("refresh:1;url=googly.html");
 
  exit();

}
//check if email matches with 
$Email=$_POST['Email'];
$Password=$_POST['password'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signup";

$conn = new mysqli($servername, $username, $password, $dbname);
//select email and password from the database
$select = mysqli_query($conn, "SELECT * FROM signup WHERE email = '".$_POST['Email']."' AND password = '".$_POST['password']."'");
if(mysqli_num_rows($select)) {
    //if email and password matches then move to the next page
    header("Location:register.html");

}
else{
  echo "<script>alert('wrong email or password')</script>";
  //delay for 2 seconds
  header("refresh:1;url=googly.html");
  exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <style>body
{
    background-image: url("/imgs/boruto-uzumaki-minimal-art.jpg");
    background-color: rgb(255, 0, 157);
    background-size: 2000px;
    height: 100vh;
    width: 110%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    font-size: large;
    
}
label{
    color:rgb(0, 0, 0);
    display: flex;
    flex-direction: column;
    font-style: normal;
    font-weight: bolder;
    font-size: xx-large;
    text-align: center;
}
input
{
    border-radius: 100px;
    border-color: rgb(233, 1, 78);
    font-size: xx-large;
    width: 450px;
    text-align: center;
}
form
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    border-radius: 100px;
    width: 500px;
    height: 500px;
    padding: 20px;
}
center
{
  display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: white;
    border-radius: 100px;
    width: 500px;
    height: 500px;
    padding: 20px;
}
</style>
</head>
<body>

<H1>PROFILE</H1>
<form action="http://localhost/myphp/check.php" method="post">
<div >
  <label for="Username">Username</label>  <input type="text" name="Username"  > 
    </div>
    <div>
      <label for="age">age</label> <input type="text" name="age"   >
    </div>
    <div>
      <label for="dob">dob</label> <input type="text"  name="dob"    >
    </div>
    <div>
      <label for="contact">contact</label>
      <input type="text" name="contact"       >
    </div>
    <div>
    <input type="submit" 
      value="update"
              name="update"
              id="" >
    </div>

</body>
</html>


