<!DOCTYPE html>
<html lang="en">
<head>
<title>Camping Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php
   include('config.php');
?>
<style>
* {box-sizing: border-box}
body ,html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
.bg-img {
  /* The image used */
  background-image: url("img/car.jpg");

  min-height: 430px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #5F9EA0;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

/* Style the header */
.header {
  background-color: 	#ffffff;
  padding: 20px;
  text-align: center;
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: 	#5F9EA0;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
 row {
  position: absolute;
  left: 100px;
  top: 150px;
}
}
</style>
</head>
<body>
<?php

   $error = "";
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT id FROM signup WHERE email = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {        
         header("location: product.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<div class="header">
     <div class="full">
         <div class="center-desk">
                <div class="logo">
					<a href="index.php"><img src="img/logo.jpg" alt="#" width="75" height="80"/></a>
				</div>
          </div>
     </div>

<div class="navbar">
  <a class="active" href="index.php">Home</a> 
  <a href="about.php">About</a> 
  <a href="contact.php">Contact</a> 
  <a href="indexs.php">Store</a>
</div>

<div class="w3-container w3-center w3-animate-right">
<h1>GRAB YOUR NOW</h1>
</div>

<div class="bg-img">
  <form action="" method="post" class="container">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button  type="submit" value="Submit" class="btn">Login</button>
	<p> or <a href="signup1.php">Sign Up?</a>.</p>
  </form>
</div>
<br>
<br>

<h2 style="text-align:center">Colorful Camping Ahead! RM 200 OFF Camping Pass</h2>
<p style="text-align:center">Our 81 campgrounds are divided among 5 camping zones: Northwest, Southwest, Midwest, Northeast and Southeast.</p>

<div class="columns">
  <ul class="price">
    <li class="header">CAMP ALL YEAR</li>
    <li class="grey">RM 150 / year</li>
    <li>Camp for the next 12 months with no nightly fees.</li>
    <li>Free Snacks</li>
    <li class="grey"><a href="signup1.php" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#04AA6D">ONE LOW PRICE</li>
    <li class="grey">RM 350 / year</li>
    <li>Pick one of 5 zones and pay only RM100.</li>
    <li>Free Snacks</li>
    <li class="grey"><a href="signup1.php" class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">EXPLORE MORE</li>
    <li class="grey">RM 550 / year</li>
    <li>Get 100+ more campgrounds nationwide with The Trails</li>
    <li>Free Snacks</li>
    <li class="grey"><a href="signup1.php" class="button">Sign Up</a></li>
  </ul>
</div>

</body>
</html>