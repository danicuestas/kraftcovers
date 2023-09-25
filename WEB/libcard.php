<!DOCTYPE html>
<html lang="en">
<title>Kraft Covers Library</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Courier New">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Courier New", monospace}
.w3-bar,h1,button {font-family: "Couriew New", monospace}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-brown w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="KraftCovers.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Home</a>
    <a href="aboutus.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">About Us</a>
    <a href="visit.html" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Visit</a>
    <a href="services.html" class="w3-bar-item w3-button w3-padding-large w3-white">Services</a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="home.html" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="aboutus.html" class="w3-bar-item w3-button w3-padding-large">About Us</a>
    <a href="visit.html" class="w3-bar-item w3-button w3-padding-large">Visit</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-sand w3-center" style="padding:70px 30px">
  <h1 class="w3-margin w3-xxxlarge">Services</h1> 
</header>

<!-- Second Grid -->
<div class="w3-row-padding  w3-padding-64 w3-container">
  <div class="w3-content">
   <h1> <center>Get a library Card</center></h1>
      <h5 class="w3-padding-32"><center> <b>Interested in getting a library card with us <br>
		for quick and easy book checkouts?</b> </center></h5> 
	  <div class="w3-third w3-center">
      <img src= "library card.png" width = "390" height = "440" alt= "library card image">
    </div>
	  

	  
    <div class="w3-twothird">
		<center>
	<h2> Get a Library Card via Mail:</h2>
	<br>
	<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$month = $_POST['mes'];
	$day = $_POST['dia'];
	$home = $_POST['address'];
			
	if($_POST["address"]) {
    mail("akuaizu@gmail.com", "Form to email message", $_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["mes"], $_POST["dia"], $_POST["address"], "From: kraftcover@email.address");	}
	
	echo "Thank you for using this feature, " . $fname . " " . $lname . "<br>"; 
	echo "Your library card will take 3-5 business days to ship to: <br>" . $home . "<br>";
	echo "We will be sending you updates to the email: <br>" . $email . "<br>";
	echo "Thanks again!";

	
	?>

		</center>
	</form>
	  

     
    </div>
	  
  </div>
</div>
<!-- First Grid -->
<div class="w3-row-padding w3-sand w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Other</h1>
      <h5 class="w3-padding-32">We are in the process of transitioning to a digital platform. For all other concerns regarding our services, please pay us a <a href= "visit.html"> visit</a>.
      
    </div>

    <div class="w3-third w3-center">
		<br> <br> <br> <br>
      <img src="KraftCovers.png" width= "100" height = "150" alt= "logo"> </img>
    </div>
  </div>
</div>
<div class="w3-container w3-brown w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">"A cover is not the book, so open it up and take a look" </h1>
		<br> <p>- Mary Poppins</p>
</div>

<!-- Footer -->

<br>
	<br>
	<br>
 <p> <center> This is not a real organization and is strictly for educational purposes.</center> </p>
	<br>
	<br>
	<br>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>

	<?php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$month = $_POST['mes'];
	$day = $_POST['dia'];
	$home = $_POST['address'];
	
	echo "Thank you for using this feature, " . $fname . " the " . $class . "";
	
	?>
