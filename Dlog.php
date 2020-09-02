<?php
  $page="index";
  $title="Home";
  require_once('header3.php');
?>  

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style="text-align: center;">Daily Login</h2>
 <div class="container">
   <div class="col-md-6 col-md-offset-3">
<form action="Dlogcon.php"  method="post">
  <div class="imgcontainer">
    <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
  </div>

    <div class="col-md-12">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
  </div>
   <div class="col-md-12">

    <label for="Passwor"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Passwor" required>
  </div>
     <div class="col-md-12">     
    <button  type="submit">Login</button>
    </div>
  

  <div class="col-md-6" style="background-color:#ffff">
     <a href="#"> <span class="Passwor" style="color: blue;text-align: center;">Forget password?</span></a></div>

  
</form>
</div>
</div>

</body>
</html>
