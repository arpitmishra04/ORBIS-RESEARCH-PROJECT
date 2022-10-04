<?php

$conn = mysqli_connect('localhost','root','admin','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);
  

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email,message) VALUES('$name','$email','$msg')") or die('query failed');

   if($insert){
      $message[] = 'Thanks,we will connect with you shortly!';
   }else{
      $message[] = 'an error occured,please try again';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ORBIS RESEARCH:Home  </title>
   <link rel="shortcut icon" href="https://www.orbisresearch.com/themes/frontend/assets/img/favicon.png">
 
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <img src="/Orbis Research.png" alt="Orbis Research Logo" class="logo"/>

         <nav class="nav">
            <a href="/index.php" style="color:#00b8b8;">home</a>
            <a href="/about.php">about</a>
            <a href="/services.php">services</a>
            <a href="/categories.php">Categories</a>
            <a href="/contactUs.php">contact</a>
         </nav>

         

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">
<div class="container">
<h2>OUR VISION:</h2>
   <div class="panel-body">
       <p>Our vision is to evolve into one of the world's premier market research data centres, at which, reliable data related to the latest market trends, based on exhaustive research, by individuals with impeccable credentials, would be made easily available to the researcher and businessman alike. Our vision is to emerge into a viable one-stop shop for every conceivable market-related research that serious seekers of such information would be able to turn to with confidence.</p>
      
    </div>
    <h2>OUR MISSION:</h2>
   <div class="panel-body">
   <p>Our mission is to distribute comprehensive market-related data coupled with in-depth analyses, put together by researchers of repute and publishing houses of great standing, to any serious seeker of such critical information. We subject whatever is submitted to us to the most stringent scrutiny as it has always been our mission to ensure the highest standards of scholarship and probity. We make a conscientious effort to post on Orbis original research data, which is constantly replaced by the latest findings reflecting current trends at any given point in time. </p>
      <p>Fundamentally, it is our mission to come to the aid of the busy businessman and the overworked academician alike. Meeting the research-related requirements of our global clientele is our mission and, quite frankly, that is why we exist.</p>      
    </div>
</div>
</section>

<!-- home section ends -->



<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p> +91 895 659 5155</p>
        
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>Office Number: 208, Garden Plaza Commercial Complex, Near Five Gardens, Jagtap Dairy Signal Road, Wakad-Rahatni, Pune - 41101</p>
      </div>

      <div class="box">
      <i class="fa-brands fa-facebook-f"></i>
         <h3>Facebook:</h3>
         <p>Orbis Research</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>For all enquiries,email us on:</p>
         <a href="mailto:enquiry@orbisresearch.com"><strong>enquiry@orbisresearch.com</strong></a>
         <p>For sales,send us an email on:</p>
         <a href="mailto:sales@orbisresearch.com"><strong>sales@orbisresearch.com</strong></a>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <h3> Orbis Research. All rights reserved.<a href="https://www.orbisresearch.com/"><strong> www.orbisresearch.com</strong></a></h3>  </div>

</section>

<!-- footer section ends -->










<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>