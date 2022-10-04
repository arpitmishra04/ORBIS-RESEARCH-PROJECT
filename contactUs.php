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
   <title>ORBIS RESEARCH:Contact Us</title>
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
            <a href="/index.php" >home</a>
            <a href="/about.php" >about</a>
            <a href="/services.php">services</a>
            <a href="/categories.php" >Categories</a>
            <a href="/contactUs.php" style="color:#00b8b8;">contact</a>
         </nav>


         

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">

   <h2>contact us</h2>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span> message :</span>
      <textarea name="message" placeholder="Enter your Message here..." class="box" rows="5" cols="55" required></textarea>
      <input type="submit" value="Submit" name="submit" class="link-btn">
   </form>  

   <div>
            <!-- Google Map Code for the address of the company -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1890.7603859173794!2d73.784239!3d18.595632!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x142737b241ac3f2e!2sORBIS%20RESEARCH!5e0!3m2!1sen!2sin!4v1661517055965!5m2!1sen!2sin" 
               width="600" 
               height="450" 
               style="border:0;" 
               allowfullscreen="" 
               loading="lazy" 
               referrerpolicy="no-referrer-when-downgrade">
            </iframe>
                    
        </div>
   </div>
</section>

<!-- contact section ends -->


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