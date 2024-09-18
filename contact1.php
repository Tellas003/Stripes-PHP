<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stripes Academy</title><LINK REL="SHORTCUT ICON"  HREF="assets/images/StripesLogo.svg">
      <meta name="author" content="A Maria Tellas Bsc.,MCA">

    <link rel="stylesheet" href="assets/about-style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!--Navbar start-->
    
  <?php include 'navbar.php';?>
    
    <!--navbar end-->
    <style>
        
.background-image {
      background-image: url('assets/images/scorpio.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center;
      height: 100%;
      position: relative;
      margin-top:-120px;
      
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 1) 80%);
    }

    .content {
        flex: 1;
      position: sticky;
      color: #333;
      text-align: center;
      font-size:16px;
      padding: 20px;
    }
    h2{
      font-weight: bold;
    }

    #con {
     
      top:400px;
      background-color: rgba(255,255,255,0.5);
      margin-top: 20px;
      border-radius: 10px;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    @media (max-width: 768px) {
      .content {
                padding: 10px;
            }

            #con {
                margin-top: 20px;
            }

            .col-lg-8 {
                margin-top: 20px;
      }
    }
    
    </style>
       <!-- about section starts -->
      
      <div>
      <div class="background-image">
    <div class="overlay"></div>
    <div class="content">
       <section id="about" class="about section-padding">
    
        <div class="container">
        
            <div class="row" id="con" style=" margin-top:300px;">
            <h2 style="font-weight: bold; ">Contact Us<br/>
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="assets/about-img">
                        <img src="assets/images/stripes.jpg" alt="" class="img-fluid" id="im">
                        
                    </div>
                    
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                           </h2><br><br><br><br>
                          <p align="left"> 022 4749 9225
training@stripesacademy.net<br>
St. Xavier's Campus,<br>
Shilpalaya,<br>
Vinayalaya Compound,<br>
Mahakali Caves Road,<br>
Behind Holy Family Church,<br>
Andheri(East),<br>
Mumbai 400 093, INDIA</p>
<div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>&nbsp
                    <a href=""><i class="bi bi-instagram"></i></a>&nbsp
                    <a href="https://www.linkedin.com/company/stripesacademy/."><i class="bi bi-linkedin"></i></a>&nbsp
                    <a href="https://wa.me/+918454020093"> <i class="bi bi-whatsapp"></i> </a><br>


                  </div><br>

                         <br><br><br><br><br><br><br>
                            <!--<a href="#" class="btn btn-warning">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div><center><div class="contact-map">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7853079116007!2d72.85735531209892!3d19.117072182021204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c93b7056ae8d%3A0x860cc6e979b8d4bb!2sStripes%20Academy!5e0!3m2!1sen!2sin!4v1706091763060!5m2!1sen!2sin" width="400px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div></center>
</div>
  </div><br><br>
    <!-- about section Ends -->
    <!-- FOOTER -->

<?php include'footer.php';?>

<!-- Footer End -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>