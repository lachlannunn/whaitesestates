<?php
  include_once "dbconnect.php";

/*
$saletype = $_POST["saletype"];
$city = $_POST["city"];
$price = $_POST["price"]; 

if (!empty($saletype) && !empty($city) && !empty($price)) {
$sql = "SELECT * FROM lnunn_properties WHERE sale_type = $saletype AND city = $city AND price > $price";
} else {
$sql = "SELECT * FROM lnunn_properties;";  
}

echo $sql;
*/

//$sql = "SELECT * FROM lnunn_properties WHERE sale_type = 'Auction'"; 
//$sql = "SELECT * FROM lnunn_properties WHERE sale_type = 'Sale'"; 
//$sql = "SELECT * FROM lnunn_properties WHERE sale_type = 'Auction' AND city = 'South Grafton'"; 
/*
$sql = "SELECT * FROM lnunn_properties;"; 

$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL statementfailed";
} else {
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $rowcount = mysqli_num_rows($result);
  $setpropertyorder = $rowcount + 1;

}
*/

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Whaites Estates &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/override.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="border-bottom bg-white top-bar">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-6 col-md-6">
            <p class="mb-0">
              <a href="#" class="mr-3"><span class="text-black fl-bigmug-line-phone351"></span> <span class="d-none d-md-inline-block ml-2">+2 102 3923 3922</span></a>
              <a href="#"><span class="text-black fl-bigmug-line-email64"></span> <span class="d-none d-md-inline-block ml-2">info@domain.com</span></a>
            </p>  
          </div>
          <div class="col-6 col-md-6 text-right">
            <a href="#" class="mr-3"><span class="text-black icon-facebook"></span></a>
            <a href="#" class="mr-3"><span class="text-black icon-twitter"></span></a>
            <a href="#" class="mr-0"><span class="text-black icon-linkedin"></span></a>
          </div>
        </div>
      </div>
      
    </div>
    <div class="site-navbar">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class=""><a href="index.php" class="h5 text-uppercase text-black"><strong>Whaites Estates<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
             

<?php   include_once "menu.php";?>  



            </div>
           

          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover" style="background-image: url(images/hero_bg_1.jpg); height: 600px" data-aos="fade" data-stellar-background-ratio="0.5">
          
    </div>  
      <div class="site-blocks-cover" style="background-image: url(images/hero_bg_3.jpg); height: 600px" data-aos="fade" data-stellar-background-ratio="0.5">
      
       </div>  

    </div>

    <div class="pt-5">
      <div class="container">
        <form class="row" action="properties.php">
          
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="city" id="city" class="form-control d-block rounded-0">
                
<?php

if (isset($_REQUEST['city'])){ 
$city = $_REQUEST['city'];
  echo '<option value="'.$city.'">'.$city.'</option>'; 
   }else {
    echo '<option value="">City </option>';
   }
?>
                <option value="Grafton">Grafton</option>
                <option value="South Grafton">South Grafton</option>
                <option value="The Pinnacles" >The Pinnacles</option>


              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="saletype" id="saletype" class="form-control d-block rounded-0">
                <option value="">Property Status</option>
                <option value="Sale">For Sale</option>
                <option value="Rent">For Rent</option>
                <option value="Auction">For Auction</option>                
              </select>
            </div>
          </div>
          <!--
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="price" id="price" class="form-control d-block rounded-0">
                <option value="">Price Rage</option>
                <option value="100000">> 100000</option>
                <option value="150000">> 150000</option>
                <option value="200000">> 200000</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Lot Area</option>
                <option value="1000">1000</option>
                <option value="800">800</option>
                <option value="600">600</option>
                <option value="400">400</option>
                <option value="200">200</option>
                <option value="100">100</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bedrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="select-wrap">
              <span class="icon icon-arrow_drop_down"></span>
              <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                <option value="">Bathrooms</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5+">5+</option>
              </select>
            </div>
          </div> -->
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="mb-4">
              <div id="slider-range" class="border-primary"></div>
              <input type="text" name="priceslider" id="amount" class="form-control border-0 pl-0 bg-white" />
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <input type="submit" class="btn btn-primary btn-block form-control-same-height rounded-0" value="Search">
          </div>
          
        </form>

        
      </div>
	  </div>  
    <div class="site-section site-section-sm bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <div class="site-section-title">
              <h2>New Properties for You</h2>
            </div>
          </div>
        </div>
		   <div class="row mb-5">
<?php
      // show all properties 
      
      $wheresearchvalues =''; 
      if (isset($_REQUEST['city'])){ // user must have selected from filers search 

// properties.php? city=Grafton & saletype= & price=100000 & offer-types =1000 &offer-types=2&offer-types=3 &value=%24200000+-+%24750000
        // WHERE `sale_type` = '$saletype' AND `city`= '$city'  
              

              if ($_REQUEST['city'] != '') {
                $wheresearchvalues .=' WHERE `city` = \''.$_REQUEST['city'].'\''; 
                
              } 
              if ($_REQUEST['saletype'] != '') {

                if ($wheresearchvalues == '') {
                   $wheresearchvalues .=' WHERE `sale_type` = \''.$_REQUEST['saletype'].'\''; 
                }else {
                    $wheresearchvalues .=' AND `sale_type` = \''.$_REQUEST['saletype'].'\''; 
                }
              }
      }

        // no search filters applied 
        $sql = "SELECT * FROM lnunn_properties $wheresearchvalues ORDER BY property_id";
     

 //echo '<br>the sql is... '. $sql . ' <hr>';



        //sql error check
      $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed";
        } else {
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          if (mysqli_num_rows($result) > 0) {

          while ($row = mysqli_fetch_assoc($result)){
    
                
               //website properties tiles, updated from database 
          echo'<div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.php?id='.$row["property_id"].'" class="prop-entry d-block">
              <figure>
                <img src="'.$row["property_thumbnail"].'" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">'.$row["sale_type"].' '.$row["price"].'</span>
                  <h3 class="title">'.$row["address"].'</h3>
                  <p class="location">'.$row["city"].' '.$row["postcode"].'</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>'.$row["land_area"].'m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>'.$row["bedrooms"].'</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>'.$row["bathrooms"].'</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>'.$row["carports"].'</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>';
         
          }
          
        } else {     echo "0 results";   }

}


          ?>
		  </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center mb-5">
            <div class="site-section-title">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Research Subburbs</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-sold"></span>
              <h2 class="service-heading">Sold Houses</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="#" class="service text-center border rounded">
              <span class="icon flaticon-camera"></span>
              <h2 class="service-heading">Security Priority</h2>
              <p><span class="read-more">Learn More</span></p>
            </a>
          </div>
</div>
      </div>
    </div>

    

    <div class="site-section site-section-sm bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h2 class="text-white">Wide Range of Properties Just For You</h2>
            <p class="lead text-white-5">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="col-md-4 text-center">
            <a href="#" class="btn btn-outline-primary btn-block py-3 btn-lg">See Properties</a>
          </div>
        </div>
      </div>
    </div>
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">About Whaites Estates</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe pariatur reprehenderit vero atque, consequatur id ratione, et non dignissimos culpa? Ut veritatis, quos illum totam quis blanditiis, minima minus odio!</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navigations</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Buy</a></li>
                  <li><a href="#">Rent</a></li>
                  <li><a href="#">Properties</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Privacy Policy</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Terms</a></li>
                </ul>
              </div>
            </div>


          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Follow Us</h3>

                <div>
                  <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>

            

          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>