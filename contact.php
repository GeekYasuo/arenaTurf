<?php include 'mail.php' ?>

<html>
<head>
    <meta name="viewport" content="with=device-width, initial-scale=0.1">
    <title>Sports Club Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        </
        
</head>
    
    <body>
        <section style="background-image: url(background.jpg);" class="subheader">
            <nav>
                <a href="index.html"><img src="C:\xampp\htdocs\Sports\arenalogo.png"></a>
                <div class="nav-links" id="navLinks">
                    <i class="fa fa-times" onclick="hidemenu()"></i>
                <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="About.html.html">About</a></li>
                <li><a href="sports.html">Sports</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="review.html">Review</a></li>
                </ul>
                </div>
                <i class="fa fa-bars" onclick="showMenu()"></i>
            </nav>
<div class="text_box">
    <h1>Arena Sports Club  </h1>
    <p>"WHAT SEEMS IMPOSSIBLE TODAY WILL SOON BECOME YOUR WARM-UP</p>
    </div>
            </section>
<!----------Contact--------->
        <section class="location">
            <h1>Contact Us</h1>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30092.1375169526!2d72.77217647910156!3d19.476372399999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a981619a0d81%3A0xabb2dab38f9e7202!2sTurf%20Arena-virar!5e0!3m2!1sen!2sin!4v1657636241646!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<body>
  <div class="container">  
    <form id="contact" action="" method="post">
      <h3>Contact Details</h3>
      <h4>Contact us today, and get reply with in 24 hours!</h4>
      <div class="row">
   
        <div class="col">
          <fieldset>
            <input placeholder="First Name" name="firstName" type="text" tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
          </fieldset>
          <fieldset>
            <input placeholder="Your Phone Number" name="tel" type="tel" tabindex="3" required>
          </fieldset>
          <fieldset>
            <input placeholder="Date of Booking" type="datetime-local" onfocus="(this.type='date')" name="date" tabindex="4" required>
          </fieldset>
          <fieldset>
            <input type="text" name="city" placeholder="City/State Name"  onfocus="(this.type='time')" tabindex="5" required>
          </fieldset>
        </div>
   
        <div class="col">
          <fieldset>
            <input type="text" placeholder="Last Name" name="lastName"  tabindex="1" required autofocus>
          </fieldset>
          <fieldset>
            <input type="text" name="address" placeholder="Sports" tabindex="5" required>
          </fieldset>
          
           
         <!--  <fieldset>
            <label for="file">Upload</label>
            <input type="file" id="file" name="file">
          </fieldset> -->
        </div>
     </div>
          
        <!-- Error display -->
        <div>
         <p class="success"> <?php echo $success;  ?> </p>
         <p class="failed"> <?php echo $failed;  ?> </p>
        </div>
       
      <fieldset>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>
      </fieldset>
    </form>
  </div>
</body>



 <script>
                var navLinks = document.getElementById("navLinks")
                function showMenu(){
                    navLinks.style.right="0";
                }
                function hidemenu(){
                    navLinks.style.right="-200px";
                }
            </script>

    </body>
</html>