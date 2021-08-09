<!DOCTYPE html>
<html><!--Start of html page-->

<!--Start of head tag-->
<head>
<title>Fineclix - Services</title>

<link rel="stylesheet" href="css/headerfooter.css"><!--linking the CSS file responsible for header and footer-->
<link rel="stylesheet" href="css/project.css"><!--linking the CSS file responsible for content-->
<script src="js/project.js"> </script><!--Linking the JS file-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">



</head>
<body><!--Start of the body tag-->

  <div class="header"><!--div tag to the navigation bar-->
    <a href="index.php" ><img src="images/Fineclix.png"   class="logo"></a>
      <div class="header-right">
        <a class="offline"  href="index.php">Home</a>
        <a class="offline" href="#">Log in/Sign Up</a>
        <a class="active" href="services.html">Services</a>
        <a class="offline" href="#">Print and Services</a>
        <a class="offline" href="#">About Us</a>
        <a class="offline" href="#">Contact Us</a>
        <a class="offline" href="#">Join Our Team</a>
          <div class="headeruser">
            <a href="myAccount.php" ><img src="images/user.png"   class="logo1"></a>
          </div>

    
  </div>
</div>
<div class="form-div">
    <?php

        //include 'subconfig.php';

        session_start();
        echo "<h1>"."Dear Mr.".$_SESSION['qname']."</h1>";
        echo "<br>";
        echo "We are pleased to announce you that we have given you a quotaion to our prevailing price ranges.";
        echo "<br>";
        echo "Experience our services for the quotaion you recieved at any time. Your quotation details are mentioned below";
        echo "<br>";
        echo "<br>";
        echo "The E-mail you entered is: "."<h3>".$_SESSION['qmail']."</h3>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "Event type you selected was: "."<h3>".$_SESSION['event']."</h3>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<h3>".$_SESSION['sugvenue']."</h3>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        



?>
<a href="services.html"><h2>Explore Our Services</h2></a>
</div>              
          			
<hr class="line">
<!--Footer-->
<div class="footer">
  <div class="verticalDiscover">
    
    <h3>Discover</h3>
    <a href="#">Customer Stories</a>
    <a href="servicesForm.html">Gift a photoshoot</a>
    <a href="pricing.php">Pricing</a>
    <a href="#">Review</a>
  </div>
  <div class="verticalPhotographer">
    
    <h3>Photographer?</h3>
    <a href="#">Join our team</a>
    <a href="#">Photographer Login</a>
    
  </div>
  <div class="verticalCompany">
    
    <h3>Company</h3>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
    
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