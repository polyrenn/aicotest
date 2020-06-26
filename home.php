<?php

/**
 * This is an example of a front controller for a flat file PHP site. Using a
 * Static list provides security against URL injection by default. See README.md
 * for more examples.
 */
# [START gae_simple_front_controller]
/*
switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {
    case '/portal.php':
        require 'portal.php';
        break;
    default:
        http_response_code(404);
        exit('Not Found');
}
# [END gae_simple_front_controller]
*/
?>

<!doctype html>
<html>
<head>
    <title>Almarence International Company Limited</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400|Playfair+Display:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <style>
      #carouselExampleControls{
        height:450px;
      }
  </style>
<body>
<nav class="navbar navbar-expand-lg navbar-light border border-bottom-3 sticky-top" style="background-color: #f7f7f5">
   <a class="navbar-brand" href="index.php">
    <img class="mr-5" src="img/logo.jpeg" width="300px" height="65px">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <ul class="nav navbar-nav navbar-right pull-right float-right">
        <li class="text-white mr-3"><a class="text-primary" href="team.php"><b>Our Team</b></a></li>
        <li class="text-white mr-3"><a class="text-primary" href="contact.php"><b>Contact Us</b></a></li>
        <li class="text-white mr-3"><a class="text-primary" href="portal.php"><b>Goto portal</b></a></li>
    </ul>
        
    </ul>
  </div>
</nav>
 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
    <img class="d-block w-100" src="images/gas2.jpeg" height="500px"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Home Office</h5>
        <p>.jdfhbvlejhbfejrijire</p> -->
      </div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/gas4.jpeg" height="500px"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Home Office</h5>
        <p>.jdfhbvlejhbfejrijire</p> -->
      </div>
  </div>
  <div class="carousel-item">
    <img class="d-block w-100" src="images/gas3.jpeg" height="500px"  alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Home Office</h5>
        <p>.jdfhbvlejhbfejrijire</p> -->
      </div>
  </div>
<div class="carousel-item">
  <img class="d-block w-100" src="images/gas5.jpeg" height="500px"  alt="First slide">
  <div class="carousel-caption d-none d-md-block">
    <!-- <h5>Aico Gas</h5>
    <p>jhdbfliebrjveblrijvre</p> -->
  </div>
</div>
<div class="carousel-item">
  <img class="d-block w-100" src="images/gas9.jpeg" height="500px"  alt="First slide">
  <div class="carousel-caption d-none d-md-block">
    <!-- <h5>HJHbjask</h5>
    <p>ejrvbek;jrnveirj</p> -->
  </div>
</div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


  
    <div class="container-fluid bg-primary mt-5 p-5">
        
        <div class="row">
            <div class="col-12 col-lg-6">
                    <img class="shadow rounded" src="aicowork.jpg" width="100%" height="100%" alt="">
            </div>
            <div class="col-12 col-lg-6">
                    <h2 class="text-white "><b>About Almarence International</b></h2>
                    <p class="text-white"><b>Almarence Int. Co. Ltd. RC no 265315 is a 100% indigenous company incorporated under the companies and allied matters act 1968 on the 10th FEB 1995 by the corporate affairs commission (CAC) with keen interest in engineering, oil & gas services and general industrial services.</b></p>
                    <p class="text-white"><b>In February 2014, Almarence Int.Co.Ltd gave birth to AICO gas with the aim of trading, distributing & retailing of LPG (Liquefied petroleum gas) for various applications especially for domestic purposes nationwide. Aico gas bottling plant is strategically located in Benin City, Edo State with an installed capacity of over 80 metric tonne (160,000 litres) and filling capacity of over 3000 cylinders per day.</b></p>
            </div>
        </div>


    </div>

    <div class="container-fluid mt-3 p-5">
        <div class="row">
        <div class="col-12 col-lg-5 p-5">
                    <h2 class=" text-danger"><b>Get the best parts for your plant</b></h2>
                    <li><b>Engineering parts</b></li>
                    <li><b>Lpg cylinders and accessories</b></li>
                    <li><b>Lpg tanks (storage and transport)</b></li>
                    <li><b>Lpg pumps and motors</b></li>
                    <li><b>Valves (ball,gate,check,globe,butterfly) Flanges</b></li>
                    <li><b>Pipes and fittings</b></li>
            </div>
            <div class="col-12 col-lg-7">
                <h2 class=""><b>Procurement and general supplies</b></h2>
                    <img class="shadow rounded" src="images/flange.jpg" width="100%" height="350px" alt="">
            </div>
            
        </div>


    </div>

    <div class="container-fluid mt-3 p-5">
        <div class="row">
        <div class="col-12 col-lg-7">
                <h2 class=""><b>Engineering Services</b></h2>
                    <img class="shadow rounded" src="images/dredge.jpg" width="100%" height="350px" alt="">
            </div>
        <div class="col-12 col-lg-5 p-5">
                    <h2 class=" text-danger"><b>Get the job done with the right team</b></h2>
                    <li><b>Piling and Dredging</b></li>
                    <li><b>Pipe line welding and construction</b></li>
                    <li><b>Engineering,Civil constructions/Fabrication</b></li>
                    <li><b>Construction of LPG plants</b></li>
                   
            </div>
            
            
        </div>


    </div>


    <div class="container p-3  mt-4">
      <h4 class="display-4 text-danger">Clients</h4>
      <div class="row">
<div class="col-12 col-lg-4 mb-2 align-self-center" >
                <button class=" shadow " >
                    <h4>Mr Food</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2" >
                <button class=" shadow ">
                    <h4>Sizzlers Fast Food</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2" >
                <button class=" shadow">
                    <h4>Mat Ice Food</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Osvin Hotel</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">NNPC Medical Center</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Prestige Hotel & Suite</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow ">
                    <h4 class="">Constential Hotel</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Westview Hotel</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Western Hotel</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Empire Foods</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Leaders Bakery</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">GT Foods</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">GT Plus</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class=" shadow">
                    <h4 class="">Ritz Carlton Hotel</h4>
                </button> 
            </div>
            <div class="col-12 col-lg-4 mb-2">
                <button class="">
                    <h4 class="">Royal Marble Hotel</h4>
                </button> 
            </div>
      </div>

</div>
    


<footer>
<div class="container-fluid bg-primary p-4">

<div class="row">
<div class="col-12 col-lg-3 pt-3 pb-3">

<h5 class=" text-white" align="center"><b><span class="text-white">Almarence</span><br> International<br> Company Limited</b></h5>

</div>
<div class="col-12 col-lg-3 p-2">
    <address>
        <h4 class="text-white" align="center">AIRPORT ROAD</h4>
        <p class="text-white" align="center">4 LIBERTY AIHIE CLOSE OPP OKO DAILY
MARKET, OFF OKO-OGBA AIRPORT ROAD, BENIN CITY, EDO STATE 08150664289</p>
    </address>
</div>
<div class="col-12 col-lg-3 p-2">
    <h4 class="text-white" align="center">Contact Us</h4>
<p class="text-white" align="center"><b>08150664289 or 07050791217 <br>Mail: aicogas2014@gmail.com</p>



</div>
<!-- <div class="col-12 col-lg-3 p-2">
    <h4 class="text-white" align="center">Socials</h4>
    <div class="">
        <a class="text-white" href=""><i class="fab fa-twitter-square"></i>Twitter</a>
    </div>
</div>

</div> -->


</div>

</footer>







<script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
