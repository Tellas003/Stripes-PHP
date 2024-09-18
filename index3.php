<?php include 'admin/store_visitor.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

    <!--Add Bootstrap css-->
    
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
      <!--The facuty swiper css-->
      <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #la {
        margin: 0;
        overflow: hidden;
        background-color: aqua;
      }
    
      #logo {
        position: fixed;
        top: -17vh;
        left: 50%;
        transform: translate(-50%, -50%);
        animation: logoAnimation 4s ease-in-out forwards; /* Change the duration to 4.1s */
      }
    
      @keyframes logoAnimation {
        0% {
          transform: translate(-50%, -50%) scale(2);
          opacity: 1;
        }
        50% {
          transform: translate(-110%, -200%) scale(1.1.7);
          opacity: 1;
        }
        71%{
            transform: translate(-128.6%, -220.8%) scale(0.8);
            opacity: 1;
            display: none;
        }
        71.1%{
            transform: translate(0%, 0%) scale(0);
            opacity: 0;
            display: none;
        }
        80%{
            transform: translate(0%, 0%) scale(0);
            opacity: 0;
            display: none;
        }
       100% {
          transform: translate(0%, 0%) scale(0);
          opacity: 0;
          display: none; /* Hide the image at the end of the animation */
        }
      }
    
      .navbar {
        display: none;
      }
    
      @media screen and (max-width: 988px) {
        #la {
          display: none;
        }
        .navbar{
            display: grid;
        }
      }
     /* @media only screen and (max-width: 768px) {
        .hero-section video {
            width:auto;
            height: auto;
        }}*/

         /* Navbar Styles */
        .navbar-nav .nav-link {
            color: #171616;
            font-weight: 700;
        }

        .navbar-nav .nav-link:hover {
            color:#007bff;/* Change the color on hover */
             /* Background color on hover */
        }

        

        .dropdown-menu .dropdown-item {
            color: #1A0C4E; /* Text color of dropdown items */
            background-color:#fff;
            
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #F3E5C4; /* Background color on hover */
            color:black;
        }
         @media (max-width: 768px) {
          .navbar-nav .nav-link:hover {
            color:#007bff;/* Change the color on hover */
             /* Background color on hover */
        }
        .dropdown-menu .dropdown-item {
            font-size:13px;
            
        }
      
         }
        
#preloader{
  background: #fff url(assets/images/preloader/giphy1.gif) no-repeat center center;
  background-size: 10%;
  height: 100vh;
  width: 100%;
  position: fixed;
  z-index: 100;
}
@media (max-width: 768px) {
  #preloader{
     background-size: 20%;
  }
}

    </style>
  
</head>

<body>

<div id="preloader"></div>


    <!--Navbar start-->
    <script>
      // Wait for the document to be fully loaded
      document.addEventListener("DOMContentLoaded", function () {
        // Delay the display of the navbar by 4.1 seconds (4100 milliseconds)
        var delayTime = window.innerWidth < 991 ? 120000 : 2000; // Check if mobile view (width < 768px)
        setTimeout(function () {
          // Get the navbar element
          var navbar = document.getElementById("navbar");
          // Change the display style to grid
          navbar.style.display = "grid";
        }, delayTime);// 4.1 seconds delay
      });
    </script>
  
    <nav class="navbar navbar-expand-lg fixed-top"id="navbar" 
    style ="justify-content: center;">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="assets/images/StripesLogo.svg" height="200px" width="200px" alt="" class="img-fluid"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel"style="background-color:#e6e4e2;">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><a href="index.php"><img src="assets/images/StripesLogo.svg" height="130px" width="130px" alt="" class="img-fluid"></a></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <!--  <li class="nav-item">
                  <a class="nav-link mx-lg-2 " aria-current="page" href="index.php"style="font-weight: 700">Home</a>-->
               
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    About Us
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.php">Stripes Academy</a></li>
                    <li><a class="dropdown-item" href="principalmessage.php">Principal's Desk</a></li>
                    <li><a class="dropdown-item" href="feed.php">Student's Speak</a></li>
                    <!--<li><a class="dropdown-item" href="team.php">Our Team</a></li>-->
                  </ul>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Courses
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="shedule.php">Three Month Course Schedule</a></li>
                    <li>&nbsp &nbsp----------------------------------------------------------------------&nbsp &nbsp</li>
                    <li><a class="dropdown-item" href="shipsimulatorrolebasedcourse2.php">The Role-Based Bridge</a></li>
                    <li><a class="dropdown-item" href="shipsimulatorcourse1.php">Ship Simulator and Bridge Teamwork</a></li>
                                        <li><a class="dropdown-item" href="shipmastercourse3.php">Shipmasters Command and Leadership Evaluvation</a></li>
                    <li><a class="dropdown-item" href="bridgewatchkeepingcourse4.php">Bridge Watchkeeping for Junior Officers  </a></li>
                    <li><a class="dropdown-item" href="bridgewatchkeepingratingscourse5.php">Bridge Watchkeeping for Ratings</a></li>
                    <li><a class="dropdown-item" href="shiptransfercourse6.php">Ship-Ship Transfer Navigational Training</a></li>
                    <li><a class="dropdown-item" href="largevesselcourse7.php">Large Vessel Manoeuvring</a> </li>
                    <li><a class="dropdown-item" href="framopumpcourse8.php">Framo Pump Operations and Maintenance</a></li>
                    <li><a class="dropdown-item" href="electricalcourse9.php">Electrical, Electronics, and Automation Course</a></li>
                    <li><a class="dropdown-item" href="bwtscourse10.php">Ballast Water Treatment Systems</a></li>
                    <li><a class="dropdown-item" href="marinecourse11.php">Marine Hydraulics Training </a></li>
                    <li><a class="dropdown-item" href="pneumaticscourse12.php">Pneumatics Training  </a></li>
                    <li><a class="dropdown-item" href="safetycourse13.php">Safety Training for Ratings </a></li>
                     <!-- <li><a class="dropdown-item" href="navigationsafty.php">Navigate Safely with Stripes</a></li>
                      <li><a class="dropdown-item" href="safecargo.php">Safe Cargo & Machinery Operations through Stripes</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="saftywellness.php">Safety & Wellness Training at Stripes</a></li>-->
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="contact.php">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" >
                      Certificate Authenticator
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="search.php">Verify Certificate</a></li>
                      <li><a class="dropdown-item" href="stafflogin.php">Staff Login</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="adminlogin.php">Admin Login</a></li>
                    </ul>
                  </li>
                <!--  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                      Tools

                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>-->
                 
               
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
   
    </script>
    
      
    
      <script>
      window.addEventListener("scroll", function () {
    var navbar = document.querySelector(".navbar");
    if (window.scrollY > 0) {
        navbar.classList.add("scrolled");
    } else {
        navbar.classList.remove("scrolled");
    }
});

      </script>
      
      <!--navbar end-->
     <!--hero section start-->
      
      <div class="hero-section">
      
        <video autoplay muted>
            <source src="assets/images/design.mp4" type="video/mp4" style="width:auto;">
           
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
        <div class="container">
            <!-- Your other content goes here -->
            
             <div id="la">
              <div id="logo">
                <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
                  <!-- Your SVG logo content goes here -->
                <!--  <img src="assets/images/Stripes Logo.svg" style="height: 100px; width: 400px;display:grid;">-->
                </svg>
              </div> </div></div>
            
              <script>
                window.onload = function() {
                  var logo = document.getElementById('logo');
                  logo.style.animationPlayState = 'running';
                }
              </script>
       
    </div>
    </div></div>
      <!--hero section end-->
      <!---The Course card Section Start-->
      <style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
        background-color: #e6e4e2;
}
.card-img-top{
    border-radius: 50px;
    padding: 20px;
}
.card{
    border-radius: 30px;
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}
.card-body{
    padding: 25px;
    margin-top: -15px;
}
.btn-primary{
    border-radius: 50px;
    width: 120px;
}
.btn-primary:hover{
    background-color: black;
    border: none;
}
h3,h5{
    color: rgb(0, 91, 228);
    
}
#im{
            height: 210px;
    
}
.card-title{
text-align:center;
}
      </style>
<div>
      <div class="container py-5">
        <h1 class="text-center" style="font-weight:bold;">Popular Courses</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <div class="card">
                    <img src="assets/images/rolebased1.jpg" class="card-img-top" alt="..." id="im">
                    <div class="card-body">
                      <center> <h5 class="card-title">The Role-Based Bridge</h5><br></center> 
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="shipsimulatorrolebasedcourse2.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/courses_1.png" class="card-img-top" alt="..." id="im">
                    <div class="card-body">
                      <center> <h5 class="card-title">Ship Simulator and Bridge Teamwork</h5><br></center> 
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="shipsimulatorcourse1.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/shipcourse3.png" class="card-img-top" alt="..."id="im" >
                    <div class="card-body">
                      <center> <h5 class="card-title">Shipmasters Command and Leadership Evaluation</h5></center>
                       
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                    <a href="shipmastercourse3.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card">
                  <img src="assets/images/bridgecourse4.png" class="card-img-top" alt="..."id="im">
                  <div class="card-body">
                    <center> <h5 class="card-title">Bridge Watchkeeping for Junior Officers</h5><br></center>
                     
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
      
                  <a href="bridgewatchkeepingcourse4.php">
                        <button class="btn btn-primary">Learn More</button></a>
                  </div>
              </div>
          </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/shiptransfercourse6.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Ship-Ship Transfer Navigational Training</h5><br>
                       
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="shiptransfercourse6.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/vessalcourse7.bmp" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Large Vessel Manoeuvring</h5><br>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="largevesselcourse7.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/framo.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Framo Pump Operations and Maintenance</h5>
                                            </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="framopumpcourse8.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

           <div class="col">
                <div class="card">
                    <img src="assets/images/courses_2.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Electrical, Electronics, and Automation Course</h5>
                                            </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="electricalcourse9.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

<div class="col">
                <div class="card">
                    <img src="assets/images/btrm.jpg" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Ballast Water Treatment Systems</h5><br>
                                            </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="bwtscourse10.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>


<!--<div class="col">
                <div class="card">
                    <img src="assets/images/course13.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Marine Hydraulics Training</h5><br>
                                            </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="marinecourse11.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>-->

                    </div>
    </div></div>
    <!---The Course card Section End-->
  
   <!-- <style>
    #container1{
      height: 80vh;
    }
  </style>
   <!--The swiper faculty card start-->

    <!-- Boxicons CSS -->
    <!--<link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <section class="container1" id=container1>
      <div class="testimonial mySwiper">
        <div class="testi-content swiper-wrapper">
          <div class="slide swiper-slide">
            <img src="assets/images/Untitled.jpeg" alt="" class="image" />
            <p>
              Principal/ Director at Stripes Academy.
              Previously Vice Principal at Samundra Institute of Maritime Studies (a part of the Executive Group) where I worked for 9 years.
              Author of "The ECDIS Blues - A practical guide to safe passage planning on ECDIS".
              My career at sea spanning over 21 years has been mainly on crude oil and product tankers with the last 9 years being in command.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Capt.Vincent Fernandas</span>
              <span class="job">Principal</span>
            </div>
          </div>
          <div class="slide swiper-slide">
          <img src="assets/images/a.jpeg" alt="" class="image" />
           
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Maria Tellas A</span>
              <span class="job">Web Developer</span>
            </div>
          </div>
         <!-- <div class="slide swiper-slide">
            <img src="assets/images/Untitled.jpeg" alt="" class="image" />
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
              saepe provident dolorem a quaerat quo error facere nihil deleniti
              eligendi ipsum adipisci, fugit, architecto amet asperiores
              doloremque deserunt eum nemo.
            </p>

            <i class="bx bxs-quote-alt-left quote-icon"></i>

            <div class="details">
              <span class="name">Marnie Lotter</span>
              <span class="job">Web Developer</span>
            </div>
          </div>-->
        <!--</div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- Swiper JS -->
   <!-- <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <!--<script src="assets/js/script.js"></script>
 

     <!--The Faculty End-->
 <!-- </div>
<script>
  var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

</script>    --> 
<!-- Our Partners code start-->
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background: #f2f2f2;
}

@keyframes slide {
  from {
    transform: translateX(0);
  }
  to {
    transform: translateX(-100%);
  }
}

.logos {
  overflow: hidden;
  padding: 60px 0;
  background: white;
  white-space: nowrap;
  position: relative;
}

.logos:before,
.logos:after {
  position: absolute;
  top: 0;
  width: 250px;
  height: 100%;
  content: "";
  z-index: 2;
}

.logos:before {
  left: 0;
  background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
}

.logos:after {
  right: 0;
  background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
}

.logos:hover .logos-slide {
  animation-play-state: paused;
}

.logos-slide {
  display: inline-block;
  animation: 35s slide infinite linear;
}

.logos-slide img {
  height: 50px;
  margin: 0 40px;
}

</style>
<div class="container py-5"><h1 class="text-center" style="font-weight:bold;">Our Training Partners</h1></div><br>
<div class="logos">
      <div class="logos-slide">
           <img src="./assets/images/partners/Pacificbasin.png" style="height:70px;width:190px;"/>
        <img src="./assets/images/partners/Scorpio.png" style="height:80px;width:210px;" />
        <img src="./assets/images/partners/zenith.png" style="height:70px;width:190px;"/>
        <img src="./assets/images/partners/optimum.png"style="height:60px;width:210px;"/>
        <img src="./assets/images/partners/valles.jpeg"  style="height:100px; width:300px;"/ >
        <img src="./assets/images/partners/torm.svg" />
        <img src="./assets/images/partners/mmsi.jpg" style="height:60px;width:210px;"/>
       
        
      </div>
    </div><br><br><br><br>

    <script>
      var copy = document.querySelector(".logos-slide").cloneNode(true);
      document.querySelector(".logos").appendChild(copy);
    </script>
    <!--Our Partners Code End-->
 <!-- Footer -->
  <style>
       
        footer {
            background-color: #e6e4e2;
            color: black;
            padding: 20px 0;
        }

        .footer-logo {
            max-width: 100px; /* Adjust logo size */
        }

        .social {
            font-size: 24px;
            margin-top: 10px;
            
        }

        .quick-links,
        .admin-links,
        .contact-info {
            margin-bottom: 25px;
            margin-top: 10px;
        }
.h5{
    font-weight:bold;
}
        .copyright {
            margin-top: 20px;
        }

        a {
            color: black;
            text-decoration: none; /* Remove underline from links */
        }

        a:hover {
            color: #007bff; /* Change link color on hover if needed */
        }
         .text-center{
            background-color:#221d5c;color:#fff;margin-top:-17px;margin-bottom:-17px;
        }
        @media (max-width: 991px) {
            p{
                font-size:13px;
            }
         }
    </style>
</head>
<body>

    <!-- Content goes here -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- First Column: Company Logo and Social Media -->
                <div class="col-md-3">
                    <img src="assets/images/StripesLogo.svg" alt="Company Logo" class="footer-logo mb-3">
                    <p>
                        <br> St. Xavier's Campus
                        <br> Shilpalaya, Vinayalaya
                        <br> Mahakali Caves Road
                        <br> Behind Holy Family Church
                        <br> Mumbai 400 093, INDIA
                    </p>
                   
                </div>

                <!-- Second Column: Quick Links -->
                <div class="col-md-3 quick-links">
                    <h5 class="h5">Quick Links</h5></br>
                       <p> <a href="index.php">Home</a></p>
                       <p> <a href="about.php">About Stripes</a></p>
                      <p> <a href="gallery.php">Gallery</a></p>
                      <p> <a href="search.php">Certificate Verification</a></p>
                        <!-- Add more quick links as needed -->
                    </ul>
                </div>

                <!-- Third Column: Admin Links -->
                <div class="col-md-3 quick-links">
                <h5 class="h5">Contact</h5><br>
                    <p>Stripes Academy</p>
                    <p><i class="bi bi-telephone-fill"></i>&nbsp 022 4749 9225 </p>
                    <p><i class="bi bi-envelope-fill"></i>&nbsp training@stripesacademy.net</p>
                      
                        <!-- Add more admin links as needed -->
                
                </div>

                <!-- Fourth Column: Contact Information -->
                <div class="col-md-3 contact-info">
                                    <h5 class="h5">Social</h5><br>
                                    <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>&nbsp
                    <a href=""><i class="bi bi-instagram"></i></a>&nbsp
                    <a href="https://www.linkedin.com/company/stripesacademy/."><i class="bi bi-linkedin"></i></a>&nbsp
                    <a href="https://wa.me/+918454020093"> <i class="bi bi-whatsapp"></i> </a>
                  </div>
                </div>
            </div>
        </div>
         </footer>
        <!-- Copyright Section -->
        <div class="text-center copyright"><hr>
            <p>&copy; 2024 All rights reserved | Designed and Powered by Tellas Technologies</p><hr>
        </div>

        <!--preloader script-->
        <script>
window.addEventListener("load", function() {
    setTimeout(function(){
        var loader = document.getElementById("preloader");
        loader.style.display = "none";
    }, 2000); // 2000 milliseconds = 2 seconds
});
</script>
     <!--   <script>
        var loader = document.getElementById("preloader");
        window.addEventListener("load",function()
        {loader.style.display="none"})
        </script>-->
   
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!--Bootstrap Script Source-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>
</body>
</html>
    
