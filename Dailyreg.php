<?php
  $page="index";
  $title="Home";
  require_once('header3.php');
?>  




<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>
  <div class="container">
        <h1 style="text-align: center">Daily Registration</h1>
    <p style="text-align: center;">Please fill in this form to create an account.</p>
    <hr>
    <div class="col-md-6 col-md-offset-3">

<form method="POST" action="Dregcon.php" style="margin: 0px;">
    <div class="form-group">  
    <label for="Fname" for ="Fname"><b>First Name </b></label>
    <input type="text" input class="form-control" id="Fname" type="text" style="margin-bottom:  0px;" placeholder="Enter First Name" name="Fname" required>
</div>

<div class="form-group">  
    <label for="Lname" for ="Lname"><b>Last Name</b></label>
    <input type="text" input class="form-control" id="Lname" type="text" style="margin-bottom:  0px;" placeholder="Enter Last Name" name="Lname" required>
</div>

<div class="form-group">  
    <label for="email" for ="email"><b>Email</b></label>
    <input type="text" input class="form-control" id="email" type="text" style="margin-bottom:  0px;" placeholder="Enter Email" name="email" required>
</div>

<div class="form-group">  
    <label for="phone" for ="phone"><b>Phone</b></label>
    <input type="text" input class="form-control" id="phone" type="text" style="margin-bottom:  0px;" placeholder="Enter Phone Number" name="phone" required>
</div>

<div class="form-group">  
    <label for="Passwor" for ="Passwor"><b>Password</b></label>
    <input type="text" input class="form-control" id="Passwor" type="text" style="margin-bottom:  0px;" placeholder="Enter Password" name="Passwor" required>
</div>



    
    
    

    <button type="submit" class="registerbtn">Register</button>
  
 
</form>
  </div>

</div>
</body>
</html>
