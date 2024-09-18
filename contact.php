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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!--Navbar start-->
    
  <?php include 'navbar.php';?>
    
    <!--navbar end-->
    <style>
        body{
            font-family: 'Poppins', sans-serif;
        }
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
      font-size:16px;
      padding: 20px;
    }
    h2{
      font-weight: bold;
    }

    #con {
     
      top:400px;
      background-color: rgba(255,255,255,0.4);
      margin-top: 20px;
      border-radius: 10px;
    }

    .image-container img {
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }
    #im{
      margin-top:80px
    }

    @media (max-width: 768px) {
      .contact-align{
 margin-left:-100px;
}
      .content {
                padding: 10px;
            }

            #con {
                margin-top: 20px;
            }

            .col-lg-8 {
            
            margin-top: 20px;
      }
     iframe{
        height:100%;
        width:300px;
     }
     #im{
      margin-top:50px;
      height:200px;
      width:400px;
     }
     
    }

   
.contact-map
{

	
	flex: 100%;
}
.contact-map iframe
{
	width: 100%;
	height: 300px;
	
	border-radius: 20px;
	border-color: #000;
	
	align-items: center;
}
.contact-form
{
	width: 100%;
	height: auto;
	padding: 30px;
	text-align: center;
}
     .social {
            font-size: 24px;
            margin-top: 10px;
            
        }
       p {
  font-family: 'Poppins',sans-serif;

}
p
{
  
  font-size: 1rem;
  font-weight: 400;
  
  color: #212529;
  
}
p
{
  line-height: 24px;
  margin-bottom: 20px;
}
.contact-align{
 margin-left:160px;
}
@media (max-width: 1381px) {
  .contact-align{
 margin-left:100px;
}
}
 @media (max-width: 991px) {
      .contact-align{
 margin-left:55px;
}
.contact-form{
  margin-top:-50px;
}}
    </style>
       <!-- about section starts -->
      
      <div>
      <div class="background-image">
    <div class="overlay"></div>
    <div class="content">
       <section id="about" class="about section-padding">
    
        <div class="container">
        <center><p style="font-weight:bold;align-item:center;color:#12294d; margin-top:250px;font-size:40px;"><br>Contact Us</p></center>
            <div class="row" id="con" style=" margin-top:50px;">
            <!--<center><h2 style="font-weight:bold;align-item:center;""><br>Contact Us</h2></center>-->
            <!--<h1 style="font-weight:bold; text-align:center;margin-top:40px;">Contact Us</h1><br>-->
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="assets/about-img">
                        <img src="assets/images/stripes.jpg" alt="" class="img-fluid" id="im">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                         <div class="contact-in">
			
			<div class="contact-form">
				
				<h3 style="font-weight:bold";>Stripes Academy</h3>
                    <p class="contact-align" style="text-align:justify;">
                     <br><i class="bi bi-telephone-fill"></i>&nbsp 022 4749 9225
                    <br><i class="bi bi-envelope-fill"></i>&nbsp training@stripesacademy.net
                    <br>&nbsp &nbsp &nbsp St. Xavier's Campus,
                        <br>&nbsp &nbsp &nbsp Shilpalaya, 
                        <br>&nbsp &nbsp &nbsp Vinayalaya Compound,
                        <br>&nbsp &nbsp &nbsp Mahakali Caves Road,
                        <br>&nbsp &nbsp &nbsp Behind Holy Family Church,
                        <br>&nbsp &nbsp &nbsp Andheri(East),
                        <br>&nbsp &nbsp &nbsp Mumbai 400 093, INDIA
                    </p>
                    <div class="social">
                    <a href=""><i class="bi bi-facebook"></i></a>&nbsp
                    <a href=""><i class="bi bi-instagram"></i></a>&nbsp
                    <a href="https://www.linkedin.com/company/stripesacademy/."><i class="bi bi-linkedin"></i></a>&nbsp
                    <a href="https://wa.me/+918454020093"> <i class="bi bi-whatsapp"></i> </a>
                  </div><br>
					<div class="contact-map">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.7853079116007!2d72.85735531209892!3d19.117072182021204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c93b7056ae8d%3A0x860cc6e979b8d4bb!2sStripes%20Academy!5e0!3m2!1sen!2sin!4v1706091763060!5m2!1sen!2sin" width="400px" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
                </div>

			</div>
		</div>
                            <!--<a href="#" class="btn btn-warning">Learn More</a>-->
                    </div>
                </div>
            </div>
        </div>
</div>
    </section>
</div></div>
  </div><br><br><br><br><br>
    <!-- about section Ends -->
    <!-- FOOTER -->

<?php include'footer.php';?>

<!-- Footer End -->

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    
    
    
</body>
</html>