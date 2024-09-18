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
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="assets/about-img">
                        <img src="assets/images/vessalcourse7.bmp" alt="" class="img-fluid" id="im">
                        
                    </div>
                    </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                          <h2 style="font-weight: bold; ">Large Vessel Manoeuvring  <br/></br></h2><br>
                          <p align="left"> This 2-day course covers the basics of ship handling and includes practical simulator exercises specific to the participant’s lined-up ship type such as VLCC, Aframax, 20K TEU vessel, and VLGC. 
<br><br>The training uses a state-of-the-art Full Mission Simulator.

<br><br>It requires a minimum of 4 and a maximum of 8 participants.  </p>
                         
                         <br><br><br><br><br><br><br>
                            <!--<a href="#" class="btn btn-warning">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div></div>
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