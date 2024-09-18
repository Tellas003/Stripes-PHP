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
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #la {
        margin: 0;
        overflow: hidden;
        background-color: aqua;
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
    </style>
</head>
<body>
  
    <!--Navbar start-->
    <script>
      // Wait for the document to be fully loaded
      document.addEventListener("DOMContentLoaded", function () {
        // Delay the display of the navbar by 4.1 seconds (4100 milliseconds)
        var navbar = document.getElementById("navbar");
        var h=window.innerHeight;
        navbar.style.height=h+"px";
        setTimeout(function () {
          // Get the navbar element
          var logo = document.getElementById("logo");
          logo.style.height="200px";
          logo.style.width="200px";

         
          // Change the display style to grid
          navbar.style.display = "grid";
          navbar.style.height="90px";
          
        }, 1000); // 4.1 seconds delay
        setTimeout(function () {
          var nav = document.getElementById("nav");
          nav.hidden=false;
        },3000);


      });
      
    </script>
    
    <nav class="navbar navbar-expand-lg fixed-top"id="navbar" 
    style =" display:grid; justify-content: center; align-item:center; transition:2s;">
        <div class="container-fluid" style="margin-top:-70px;">
          <a class="navbar-brand"  href="#"><img src="assets/images/StripesLogo.svg" id="logo" style="height:400px; width:400px; transition:2s;" alt="" class=""></a>
          <div  id="nav" hidden  style="transition:2s;">
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="assets/images/StripesLogo.svg" height="130px" width="130px" alt="" class="img-fluid"></h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link mx-lg-2 " aria-current="page" href="index.php"style="font-weight: 700">Home</a>
               
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"style="color: #171616;font-weight: 700">
                    About Us
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="about.php">Stripes Academy</a></li>
                    <li><a class="dropdown-item" href="#">Principal's Desk</a></li>
                    <li></li>
                    <li><a class="dropdown-item" href="team.php">Our Team</a></li>
                  </ul>
                </li>
                 <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #171616;font-weight: 700;">
                      Courses
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="shipsimulatorcourse1.php">Ship Simulator and Bridge Teamwork</a></li>
                    <li><a class="dropdown-item" href="shipsimulatorrolebasedcourse2.php">Ship Simulator and Bridge Teamwork:Role-Based Bridge</a></li>
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
                    <a class="nav-link mx-lg-2"  href="gallery.php"style="color: #171616;font-weight: 700">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link mx-lg-2"  href="contact.php"style="color: #171616;font-weight: 700">Contact</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #171616;font-weight: 700;">
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
      </style>
<div>
      <div class="container py-5">
        <h1 class="text-center">Popular Courses</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">

            <div class="col">
                <div class="card">
                    <img src="assets/images/courses_1.png" class="card-img-top" alt="..." id="im">
                    <div class="card-body">
                      <center> <h5 class="card-title">Navigate Safely with Stripes</h5></center> 
                        
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        <a href="navigationsafty.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/courses_2.png" class="card-img-top" alt="..."id="im" >
                    <div class="card-body">
                      <center> <h5 class="card-title">Safe Cargo & Machinery Operations through Stripes</h5></center>
                       
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                    <a href="safecargo.php">
                        <button class="btn btn-primary">Learn More</button></a>
                    </div>
                </div>
            </div>
            <div class="col">
              <div class="card">
                  <img src="assets/images/courses_3.jpg" class="card-img-top" alt="..."id="im">
                  <div class="card-body">
                    <center> <h5 class="card-title">Safety & Wellness Training at Stripes</h5></center>
                     
                  </div>
                  <div class="mb-5 d-flex justify-content-around">
      
                  <a href="saftywellness.php">
                        <button class="btn btn-primary">Learn More</button></a>
                  </div>
              </div>
          </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/courses_3.jpg" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/1.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <img src="assets/images/1.png" class="card-img-top" alt="..."id="im">
                    <div class="card-body">
                        <h5 class="card-title">Popular Courses</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam
                            dignissimos accusantium amet similique velit iste.</p>
                    </div>
                    <div class="mb-5 d-flex justify-content-around">
        
                        <button class="btn btn-primary">Learn More</button>
                    </div>
                </div>
            </div>

           

        </div>
    </div></div>
    <!---The Course card Section End-->
  
    <style>
    #container1{
      height: 80vh;
    }
  </style>
   <!--The swiper faculty card start-->

    <!-- Boxicons CSS -->
    <link
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
            <img src="assets/images/1.png"alt="" class="image" />
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
          <div class="slide swiper-slide">
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
          </div>
        </div>
        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
      </div>
    </section>

    <!-- Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="assets/js/script.js"></script>
 

     <!--The Faculty End-->
  </div>
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

</script>      
 <!-- Footer -->
  <style>
        /* Add your custom styles here */

      
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            margin-top: 20px; /* Adjust margin to create space between content and footer */
        }

        .footer-logo {
            max-width: 100px; /* Adjust logo size */
        }

        .social-icons {
            font-size: 24px;
            margin-top: 10px;
        }

        .quick-links,
        .admin-links,
        .contact-info {
            margin-bottom: 20px;
        }

        .copyright {
            margin-top: 20px;
        }

        a {
            color: white;
        }
    </style>
 <footer>
        <div class="container">
            <div class="row">
                <!-- First Column: Company Logo and Social Media -->
                <div class="col-md-3">
                    <img src="assets/images/StripesLogo.svg" alt="Company Logo" class="footer-logo mb-3">
                    <p><br> St. Xavier's Campus
                        <br> Shilpalaya, Vinayalaya
                        <br> Mahakali Caves Road
                        <br> Behind Holy Family Church
                        <br> Mumbai 400 093, INDIA</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com">
                            <i class="fab fa-facebook-f fa-2x" style="color: #3b5998;"></i>
                        </a>
                        <a href="https://www.twitter.com">
                            <i class="fab fa-twitter fa-2x" style="color: #55acee;"></i>
                        </a>
                        <a href="https://www.linkedin.com">
                            <i class="fab fa-linkedin-in fa-2x" style="color: #0082ca;"></i>
                        </a>
                        <!-- Add more social media icons as needed -->
                    </div>
                </div>

                <!-- Second Column: Quick Links -->
                <div class="col-md-3 quick-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Stripes</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <!-- Add more quick links as needed -->
                    </ul>
                </div>

                <!-- Third Column: Admin Links -->
                <div class="col-md-3 admin-links">
                    <h5>Admin Links</h5>
                    <ul>
                        <li><a href="admin.php">Admin Login</a></li>
                        <li><a href="stafflogin.php">Staff Login</a></li>
                        <li><a href="search.php">Certificate Verification</a></li>
                        <!-- Add more admin links as needed -->
                    </ul>
                </div>

                <!-- Fourth Column: Contact Information -->
                <div class="col-md-3 contact-info">
                    <h5>Contact</h5>
                    <p>Stripes Academy</p>
                    <p>Phone: +1 234 567 890</p>
                    <p>Email: training@stripesacademy.net</p>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="text-center copyright">
            <p>&copy; 2024 All rights reserved | Designed and Powered by Tellas Technologies</p>
        </div>
    </footer>


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
    
