<?php
include '../../controller/TravelOfferController.php';
$travelOfferC = new TravelOfferController();
$list = $travelOfferC->listOffre();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Accueil - TRAVEL BOOKING</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
    <body id="page-top">
      <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img cclass="navbar-brand"src="assets/img/esprit.png" alt="logo-esprit" width="30%" height="30%"/></a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Travel offers</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="./../BackOffice/offerList.php" >Dashboard</a></li>

                  </ul>
            </div>
        </div>
    </nav>
       
    <header class="masthead bg-primary text-white text-center">
      <div class="container d-flex align-items-center flex-column">
        
          <h1 class="masthead-heading text-uppercase mb-0">TRAVEL BOOKING</h1>
          <!-- Icon Divider-->
          <div class="divider-custom divider-light">
              <div class="divider-custom-line"></div>
              <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
              <div class="divider-custom-line"></div>
          </div>
          <!-- Masthead Subheading-->
          <p class="masthead-subheading font-weight-light mb-0">Family Trips - Couples' Trips - Adventure and Sports Trips</p>
      </div>
  </header>
  <section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">TRAVEL OFFERS</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
     
        <div class="row justify-content-center">
        <?php
        foreach ($list as $offer) {
        ?> 
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    
                    <img class="img-fluid" src="assets/img/circus.png" alt="..." />
                </div>
                <div class="portfolio-caption" align="center">
            <h4><?php echo $offer['destination']; ?></h4>
            <p class="text-muted"><?php echo $offer['destination']; ?></p>
            <p class="text-muted">Price: <?php echo $offer['price']; ?> $</p>
          </div>
            </div>
      
            <?php
    }
    ?>
          
           
        </div>
    </div>
</section>
<section class="page-section portfolio" id="about">
  <div class="container">
      <!-- Portfolio Section Heading-->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">About</h2>
      <!-- Icon Divider-->
      <div class="divider-custom">
          <div class="divider-custom-line"></div>
          <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
          <div class="divider-custom-line"></div>
      </div>
   
      <div class="row justify-content-center">
        <p align="center">A travel agency specializing in customized holidays wants to modernize its online booking system. Currently, customers have to contact the agency by phone or e-mail to book their trips, resulting in delays and inefficiencies. The agency needs an online solution that will enable customers to browse offers, personalize their trips and book autonomously. </p>
      
         
      </div>
  </div>
</section>
     
     
       
          <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        
                        <p>
                          You can contact us at :
                          <a href="mailto:contact@esprit.tn">contact@esprit.tn</a>
                        </p>
                        <p> 1, 2 rue André Ampère - 2083  
                            <br />
                            Technological Pole - El Ghazala</p>
                    </div>
                    
                </div>
            </div>
        </footer>
       
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; Your Website 2023</small></div>
        </div>
       
    </body>
</html>
