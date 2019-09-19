<?php   include_once "dbconnect.php"; ?><!DOCTYPE html>
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

<?php  
//database get by id in url
if (!isset($_REQUEST['id'])){ 
  echo 'no property selected'; 
  $sql = "SELECT * FROM `lnunn_properties` WHERE `feature` = 1 ORDER BY `property_id` DESC LIMIT 1";
}else{
  $property_id = $_REQUEST['id']; 
  $sql = "SELECT * FROM `lnunn_properties` WHERE `property_id` = $property_id";
}

//echo '<br>the sql is... '. $sql . ' <hr>';

      $stmt = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
          echo "SQL statement failed";
        } else {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)){
                ?> 
                    <div class="site-blocks-cover overlay" style="background-image: url(images/properties/<?php echo $row["property_hero"];?>);" data-aos="fade" data-stellar-background-ratio="0.5">
                      <div class="container">
                        <div class="row align-items-center justify-content-center text-center">
                          <div class="col-md-10">
                            <span class="d-inline-block text-white px-3 mb-3 property-offer-type rounded">Property Details of</span>
                            <h1 class="mb-2"><?php echo $row["address"];?></h1>
                            <p class="mb-5"><strong class="h2 text-success font-weight-bold">$<?php echo number_format($row["price"]);?></strong></p>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="site-section site-section-sm">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-8" style="margin-top: -150px;">
                            <div class="mb-5">
                              <div class="slide-one-item home-slider owl-carousel">
                                <div><img src="images/img_1.jpg" alt="Image" class="img-fluid"></div>
                                <div><img src="images/img_2.jpg" alt="Image" class="img-fluid"></div>
                                <div><img src="images/img_3.jpg" alt="Image" class="img-fluid"></div>
                              </div>
                            </div>
                            <div class="bg-white">
                              <div class="row mb-5">
                                <div class="col-md-6">
                                  
                                  <strong class="text-success h1 mb-3">$<?php echo number_format($row["price"]);?></strong>
                                </div>
                                <div class="col-md-6">
                                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                                  <li>
                                    <span class="property-specs">Beds</span>
                                    <span class="property-specs-number"><?php echo $row["bedrooms"];?></span>
                                    
                                  </li>
                                  <li>
                                    <span class="property-specs">Baths</span>
                                    <span class="property-specs-number"><?php echo $row["bathrooms"];?></span>
                                    
                                  </li>
                                  <li>
                                    <span class="property-specs">Carports</span>
                                    <span class="property-specs-number"><?php echo $row["carports"];?></span>
                                  <li>
                                    <span class="property-specs">Land Area</span>
                                    <span class="property-specs-number"><?php echo $row["land_area"];?><sup>2</sup></span>
                                  </li>
                                </ul>
                                </div>
                              </div>
                              <div class="row mb-5">
                                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                                  <span class="d-inline-block text-black mb-0 caption-text">Home Type</span>
                                  <strong class="d-block"><?php echo $row["property_type"];?></strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                                  <span class="d-inline-block text-black mb-0 caption-text">Sale Type</span>
                                  <strong class="d-block"><?php echo $row["sale_type"];?></strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                                  <span class="d-inline-block text-black mb-0 caption-text">Key features</span>
                                  <strong class="d-block"><?php echo $row["key_features"];?></strong>
                                </div>
                                <div class="col-md-6 col-lg-4 text-left border-bottom border-top py-3">
                                  <span class="d-inline-block text-black mb-0 caption-text">council rates</span>
                                  <strong class="d-block">$<?php echo $row["council _rates"];?> p/a</strong>
                                </div>
                              </div>
                              <h2 class="h4 text-black"><?php echo $row["address"];?></h2>
                              <h4 class="site-section-title mb-3"><?php echo $row["city"].' '.$row["state"].' '.$row["postcode"];?></h3>


                            <p><?php echo nl2br($row["description"]);?></p>

                              <div class="row mt-5">
                                <div class="col-12">
                                  <h2 class="h4 text-black mb-3">Property Gallery</h2>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_5.jpg" class="image-popup gal-item"><img src="images/img_5.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_6.jpg" class="image-popup gal-item"><img src="images/img_6.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_7.jpg" class="image-popup gal-item"><img src="images/img_7.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_8.jpg" class="image-popup gal-item"><img src="images/img_8.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_1.jpg" class="image-popup gal-item"><img src="images/img_1.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_2.jpg" class="image-popup gal-item"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_3.jpg" class="image-popup gal-item"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
                                  <a href="images/img_4.jpg" class="image-popup gal-item"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-4 pl-md-5">

                            <div class="bg-white widget border rounded">

                              <h3 class="h4 text-black widget-title mb-3">Contact Agent</h3>
                              <form action="" class="form-contact-agent">
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" id="name" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="email">Email</label>
                                  <input type="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                  <label for="phone">Phone</label>
                                  <input type="text" id="phone" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" id="phone" class="btn btn-primary" value="Send Message">
                                </div>
                              </form>
                            </div>

                            <div class="bg-white widget border rounded">
                              <h3 class="h4 text-black widget-title mb-3">Paragraph</h3>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit qui explicabo, libero nam, saepe eligendi. Molestias maiores illum error rerum. Exercitationem ullam saepe, minus, reiciendis ducimus quis. Illo, quisquam, veritatis.</p>
                            </div>

                          </div>
                          
                        </div>
                      </div>
                    </div>
                <?php 
                 }
                 }
                 }
                ?>
    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
              <h2>Related Properties</h2>
            </div>
          </div>
        </div>
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.php" class="prop-entry d-block">
              <figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$1,930,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.php" class="prop-entry d-block">
              <figure>
                <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$2,438,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 mb-4">
            <a href="property-details.php" class="prop-entry d-block">
              <figure>
                <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="prop-text">
                <div class="inner">
                  <span class="price rounded">$5,320,000</span>
                  <h3 class="title">853 S Lucerne Blvd</h3>
                  <p class="location">Los Angeles, CA 90005</p>
                </div>
                <div class="prop-more-info">
                  <div class="inner d-flex">
                    <div class="col">
                      <span>Area:</span>
                      <strong>240m<sup>2</sup></strong>
                    </div>
                    <div class="col">
                      <span>Beds:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Baths:</span>
                      <strong>2</strong>
                    </div>
                    <div class="col">
                      <span>Garages:</span>
                      <strong>1</strong>
                    </div>
                  </div>
                </div>
              </div>
            </a>
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