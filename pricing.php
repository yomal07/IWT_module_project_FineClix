<?php
	include 'subconfig.php';
?>



<!DOCTYPE html>
<html>


<head>
<title>Fineclix - Pricing</title>

<link rel="stylesheet" href="css/headerfooter.css">
<link rel="stylesheet" href="css/project.css">
<link rel="stylesheet" href="css/pricing.css">
<script src="js/project.js"> </script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body>

  <div class="header">
    <a href="index.php" ><img src="images/Fineclix.png"   class="logo"></a>
      <div class="header-right">
        <a class="offline"  href="index.php">Home</a>
        <a class="offline" href="login.html">Log in/Sign Up</a>
        <a class="offline" href="services.html">Services</a>
        <a class="offline" href="printalbum.html">Print and Services</a>
        <a class="offline" href="about.html">About Us</a>
        <a class="offline" href="contactUs.html">Contact Us</a>
        <a class="offline" href="joinourteam.php">Join Our Team</a>
          <div class="headeruser">
            <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
          </div>

    
  </div>
</div>
<div class="price-bg">
  <div class="heading-div">
    <h1 style="margin: 0;">Get a worthy service to the amount you pay!!!</h1>
    <p>Our end goal is to keep our customers happy and smiling. We, here at FinecliX offer our customers a valueable set of services to a considerable price that our customers can afford. 
      <br>So go ahead <a href="servicesForm.html"><b>Experienece our services</b></a> by filling our services form.</p>
  </div> 

  <div>
      <table>
        <tr>
          <th>Type of the Event</th>
          <th>Charges per event</th>
        </tr>
		<?php
			$sql = "select * from  eventprice";
			$result = $conn->query($sql);
			
			if($result->num_rows> 0){
				while($row = $result->fetch_assoc()){
					echo "<tr><td>".$row["event_type"]."</td><td>".$row["event_prices"]."</td></tr>";
				}
			}
			else{
				echo "No results";
			}
			
			echo "</table>";
			$conn->close();
		?>
      </table>
  </div><br><br><br>

  <div class = "bottom-a">
    <a class="bottom-a-price" class="lst" href="pricingQuotation.html">Get a quotation</a>
  </div>

  <div class = "bottom-a">
    <a class="bottom-a-price" class="lst" href="contactUs.html">Feel free to contact us</a>
  </div>
</div>              
</div>

<hr class="line">

<div class="footer">
  <div class="verticalDiscover">
    
    <h3>Discover</h3>
    <a href="#">Customer Stories</a>
    <a href="services.html" >Gift a photoshoot</a>
    <a href="pricing.php">Pricing</a>
    <a href="#">Review</a>
  </div>
  <div class="verticalPhotographer">
    
    <h3>Photographer?</h3>
    <a href="joinourteam.php">Join our team</a>
    <a href="photographerlogin.php">Photographer Login</a>
    
  </div>
  <div class="verticalCompany">
    
    <h3>Company</h3>
    <a href="about.html">About Us</a>
    <a href="contactUs.html">Contact Us</a>
    
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