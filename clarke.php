<?php
  session_start();//start of the session
  include 'subconfig.php';//linking the connection object

  $ffname = $_SESSION['name'];
  if(isset($_POST['updatebtn'])){
    $uevent = $_POST["updateevents"];
    $sql = "update event SET eventtype = '$uevent' WHERE firstname = '$ffname' ";

    mysqli_query($conn,$sql);
    header("location:servicesForm.html");
  }

  $conn->close();
?>





<!DOCTYPE html>
<html>


<head>
<title>Fineclix - Services</title>

<link rel="stylesheet" href="css/headerfooter.css">
<link rel="stylesheet" href="css/project.css">
<script src="js/project.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>

  <div class="header">
    <a href="index.php" ><img src="images/Fineclix.png"   class="logo"></a>
      <div class="header-right">
        <a class="offline"  href="index.php">Home</a>
        <a class="offline" href="">Log in/Sign Up</a>
        <a class="active" href="services.html">Services</a>
        <a class="offline" href="">Print and Services</a>
        <a class="offline" href="">About Us</a>
        <a class="offline" href="">Contact Us</a>
        <a class="offline" href="">Join Our Team</a>
          <div class="headeruser">
            <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
          </div>

    
  </div>
</div>

	<div style="color:#802BB1; text-align:center;" class="mybody">
		<?php
	
			//session_start();
			echo "<h1>"."WELCOME ".$_SESSION['$fname']." ".$_SESSION['$lname']."</h1>";
			echo "<br>";
			echo "<br>";
	
			echo "<h3>"."Mobile Number: ".$_SESSION['$phone']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."National Identity card Number: ".$_SESSION['$nic']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."Address: ".$_SESSION['$address']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."Email: ".$_SESSION['$mail']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."Event Type: ".$_SESSION['$type']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."Card Number: ".$_SESSION['$cardN']."</h3>";
      echo "<br>";
      echo "<br>";
			echo "<h3>"."CVC: ".$_SESSION['$cvc']."</h3>";
      echo "<br>";
      echo "<br>";
			

    ?>
    <form method="POST" action="clarke.php">
      <label for="uevents"><h2>Update the event type selected:</h2></label>
        <select name="updateevents" id="events">
            <option value="Wedding Photography">Wedding Photography</option>
            <option value="Preshoot">Pre-Shoots</option>
            <option value="Birthday">Birthday Parties</option>
            <option value="Convocation">Convocations</option>
            <option value="BrideToBe">Bride-To-Be</option>
            <option value="Prize Giving">Prize Givngs</option>
            <option value="Opening Ceromony">Opening Ceromony</option>
            <option value="Meeting">Formal Meetings</option>
            <option value="Dinner Dance">Dinner Dance</option>
            <option value="Festival">Festivals</option>
           
        </select><input type="submit" name="updatebtn" value="Update">
    </form>
		<a href="extra.php" style="text-decoration:none;"><button style="border-radius:8px;"> Reserve Another Event </button></a>
    </div>
              
          			
<hr class="line">

<div class="footer">
  <div class="verticalDiscover">
    
    <h3>Discover</h3>
    <a href="#">Customer Stories</a>
    <a href="services.html">Gift a photoshoot</a>
    <a href="pricing.php">Pricing</a>
    <a href="#">Review</a>
  </div>
  <div class="verticalPhotographer">
    
    <h3>Photographer?</h3>
    <a href="">Join our team</a>
    <a href="">Photographer Login</a>
    
  </div>
  <div class="verticalCompany">
    
    <h3>Company</h3>
    <a href="">About Us</a>
    <a href="">Contact Us</a>
    
  </div>
  <div class="verticalNeedHelp">
    
    <h3>Need Help?</h3>
    <a href="#">+774020028</a>
    <p class="opentime">Mon-Fri 9.30am-7.00pm sat-sun 11.30am-5.00pm</p>
    
    
  </div>
  <div class="footerlogos">
    
    <a href="https://www.certify.com/" ><img src="images/certified.png"   class="logo2"></a>
    <a href="https://www.paypal.com/lk/home" ><img src="images/payment.png"   class="logo3"></a>
    
  </div>
  <hr class="line1">
  <div class="footercompanylogo">
  <a href="index.html" ><img src="images/Fineclix.png"   class="logo4"></a>
  <p class="create">Created by MLB_PG.04.02_07</p>
  </div>
  <div class="footersocialmedialogos">
    
    <a href="https://www.facebook.com/" ><img src="images/facebook.png"   class="logo5"></a>
    <a href="https://twitter.com/" ><img src="images/twitter.png"   class="logo6"></a>
    <a href="https://www.instagram.com/" ><img src="images/instagram.png"   class="logo7"></a>
    <a href="https://www.youtube.com/" ><img src="images/youtube.png"   class="logo8"></a>
    
  </div>
  <hr class="line2">


</div>


</body>


</html>