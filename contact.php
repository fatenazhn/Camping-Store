<!DOCTYPE html>
<html lang="en">
<head>
<title>Camping Store</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box}
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #5F9EA0;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #5F9EA0;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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

<div class="header">
     <div class="full">
         <div class="center-desk">
                <div class="logo">
					<a href="index.php"><img src="img/logo.jpg" alt="#" width="75" height="80"/></a>
				</div>
          </div>
     </div>

<div class="navbar">
  <a href="index.php">Home</a> 
  <a href="about.php">About</a> 
  <a class="active" href="#">Contact</a> 
  <a href="product.php">Store</a>

</div>
<h1>START A CONVERSATION</h1>

<div class="container">
  <div style="text-align:center">
    <h2>How can we help you?</h2>
    <p> Contact us, we want to know your favorite sport and who knows, maybe help you discover new ones!</p>
  </div>
  <div class="row">
    <div class="column">
      <p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.60534470343!2d101.60770001475746!3d3.1979175976716236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc45fbeced20b9%3A0xabe1cf59d6412d9!2sDecathlon%20Sri%20Damansara!5e0!3m2!1sen!2smy!4v1632911020801!5m2!1sen!2smy" 
		width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
		<label for="email">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email..">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="malaysia">Malaysia</option>
          <option value="kazakhstan">Kazakhstan</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>


</body>
</html>