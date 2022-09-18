<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="align.css" />
  </head>
  <body>
    <form action="http://localhost/myphp/profile.php" method="post">
    <div>
      <head><h1>PROFILE </h1></head>
    </div>
    <div >
      <label for="Username">Username</label>  <input type="text" name="Username" id="" placeholder="ENTER YOUR NAME" value = <?php echo "$Username"?> />
    </div>
    <div>
      <label for="age">age</label> <input type="text" name="age" id="" placeholder="ENTER YOUR AGE" value = <?php echo "$age"?> />
    </div>
    <div>
      <label for="dob">dob</label> <input type="text" name="dob" id="" placeholder="ENTER YOUR DOB"  value = <?php echo "$dob"?> />
    </div>
    <div>
      <label for="contact">contact</label>
      <input type="text" name="contact" id="" placeholder="ENTER YOUR contact" value = <?php echo "$contact"?> />
    </div>
   
    <div class="small">
      <input type="submit" 
      value="edit"
              name="edit"
              id="" >
            </form>
  </div class="top">
  <a href="googly.html"><h2>GO back to login page</h2></a>
  </body>
</html>


