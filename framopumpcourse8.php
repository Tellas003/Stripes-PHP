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
                        <img src="assets/images/framo.png" alt="" class="img-fluid" id="im">
                        
                    </div>
                    </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                          <h2 style="font-weight: bold; ">Framo Pump Operations and Maintenance <br/> </h2><br>
                          <p align="left">This course is designed to familiarizes the participant with all aspects of the system and enables them to operate and maintain it safely and efficiently.
<br><br>The participants are exposed to the layout of the hydraulic circuit; explanation of the working of the power packs; oil cleanliness aspects and its importance; troubleshooting aspects – dealt with logically, systematically and in detail; the various safety features of the circuit – various alarms / trips and the emergency overrides.
<br><br>The working of centrifugal pumps, both in parallel and in series, are also covered along with the capacity curves for the pumps and their interpretation and use for optimal cargo discharge.
<br><br>Stripping operation, cargo pump performance evaluation curves, analysis of purging results and use of the emergency portable pumping equipment also form part of this course.
<br><br>The construction of the cargo pump is demonstrated in detail with SD-125 Model Cargo pump and replacement of Cargo seal, Wear Ring, Impeller, Mechanical Seal and Back stop unit alongwith Ceramic sleeve is demonstrated and due precautions are discussed at length.
<br><br>The videos detailing cargo pump maintenance and the  operational aspects (loading / discharging / stripping / tank cleaning etc) are demonstrated with explainations.
<br><br>Finally, the participants are given the actual shipboard problems/case study and detail discussion in logical sequence to troubleshoot the STC malfunction.</p>
                         
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