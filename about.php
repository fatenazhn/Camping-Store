<!DOCTYPE html>
<html lang="en">
<head>
<title>Camping Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
* {box-sizing: border-box}
body ,html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
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
</style>
</head>
<body>

<div class="header">
     <div class="full">
         <div class="center-desk">
                <div class="logo">
					<a href="index.php"><img src="img/logo.jpg" alt="index.php" width="75" height="80"/></a>
				</div>
          </div>
     </div>

<div class="navbar">
  <a href="index.php">Home</a> 
  <a class="active"href="about.php">About</a> 
  <a href="contact.php">Contact</a> 
  <a href="product.php">Store</a>
</div>

<div class="container">       
  <img src="img/three.jpg" class="img-rounded" alt="Cinque Terre" width="750" height="500"> 
</div>

<div class="container">
  <h1>Who We Are</h1>
  <h3>SATISFIED OR SATISFIED?</h3>       
  <p><mark>SATISFIED CAMPER</mark>, <mark>IT'S OUR JOB</mark></p>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>We've been firm believers in benefit of sports since 1976.</th>
        <th>Most products come with a 365 day return policy.</th>
        <th>Shipping is now available across Malaysia for most of our products.</th>
		<th>Order online and choose Click And Collect / Drive-In option.</th>
      </tr>
    </thead>
  </table>
</div>
</body>
</html>