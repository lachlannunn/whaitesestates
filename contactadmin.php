<?php
include_once "dbconnect.php";

//message variables
  $msg = '';
  $msgclass = '';

//Check submit
  if(isset($_REQUEST['readytodelete'])){
  $readytodelete = htmlspecialchars($_REQUEST['readytodelete']);
  $sql = "DELETE FROM `lnunn_contact` WHERE `lnunn_contact`.`message_id` = $readytodelete";
  if (mysqli_query($conn, $sql)) {
    $msg = " record updated successfully";
} else {
    $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  }

  if(isset($_REQUEST['editid'])){
    //GET form data
  $email = htmlspecialchars($_POST['email']);
  $staffmessage = htmlspecialchars($_POST['staffmessage']);
  $editid = htmlspecialchars($_REQUEST['editid']);
//edit database content
$sql = "UPDATE `lnunn_contact` SET 
`email` = '$email',
`staffnotes` = '$staffmessage', 
`user_id` = '1' 
WHERE `lnunn_contact`.`message_id` = $editid;";

//echo $sql;


 
if (mysqli_query($conn, $sql)) {
  $msg = " record updated successfully";
} else {
    $msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//mysqli_close($conn); 
}

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
    <link rel="stylesheet" href="https://bootswatch.com/cosmo/bootstrap.com.min.css">
  
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

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Contact Us</h1>
            <div><a href="index.php">Home</a> <span class="mx-2 text-white">&bullet;</span> <strong class="text-white">Contact</strong></div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-section">
      <?php
      //echo $msg;
      //deletion confirmation
       if(isset($_REQUEST['deleteid'])): ?>
            
<div class="container"> <div class="row">
<div class="col-md-12">
  <div class="alert-danger">You are about to delete record #<?php echo $_REQUEST['deleteid']; ?>. <a href="contactadmin.php?readytodelete=<?php echo $_REQUEST['deleteid']; ?>">Continue
  </a> - <a href="contactadmin.php">Cancel</a>
  </div></div></div></div>
         <?php endif; ?>
<?php 
//  show all contacts = no id
if (!isset($_REQUEST['id'])){ ?>


      <div class="container"> <div class="row">
<div class="col-md-12">
      
<?php
//selecting all rows from contact table and formating them into a table 
  $sql = "SELECT * FROM lnunn_contact ORDER BY message_id";
 //echo '<br>the sql is... '. $sql . ' <hr>';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
        ?> <table border="1" width="80%"><tr><th>Details</th> <th>Notes</th> <th>Message</th><th>Admin</th></tr><?php 
        while ($row = mysqli_fetch_assoc($result)){
          echo "<tr>"; 
          echo "<td> ". $row['message_id'] ." - " .
           $row['fname']. " ". $row['lname'] ."<br>" .
              "Em: ".$row['email'] ."<br>".
              "date: ".$row['contactdate'] . "</td>"; 
            echo "<td>".$row['message']."</td>"; 
            echo "<td>".$row['staffnotes']."</td>"; 
            echo '<td><a href="contactadmin.php?id='.$row['message_id'].'"> EDIT</a><br>
                <a href="contactadmin.php?deleteid='.$row['message_id'].'"> DELETE</a></td></tr>';

          
        }
       ?> </table><?php
    }

}

}
?>

      </div>
      </div></div>
      <div class="container">  
<?php 
///  id found in address -  edit this id 
if (isset($_REQUEST['id'])){ 
  $current_id = $_REQUEST['id']; 
$sql = "SELECT * FROM `lnunn_contact` WHERE `message_id` = $current_id";
 echo '<br>the sql is... '. $sql . ' <hr>';
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed";
} else {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_num_rows($result) > 0) {
       while ($row = mysqli_fetch_assoc($result)){
  


   
  ?>


        <div class="row">
        
           <div class="col-md-12 col-lg-8 mb-5">
          
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>?editid=<?php echo $row['message_id']?>" class="p-5 bg-white border" method="post">

                  <div class="col-md-12">

<h3> Edit - #<?php echo $row['message_id']?></h3> 
<p>You are now updating contact  from  
<?php echo $row['fname']?> <?php echo $row['lname']?></p>
<p> Message : <?php echo $row['message']?></p>
                  </div> 
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>

                  <input type="email" id="email" name="email" class="form-control"  value="<?php echo $row['email']?>">

                </div>
              </div>

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 

                  <textarea name="staffmessage" id="staffmessage"  cols="30" rows="5" class="form-control" >Add staff notes here </textarea>

                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" class="btn btn-primary  py-2 px-4 rounded-0">
                </div>
              </div>

  
            </form>

          </div>



        </div>
        <?php         }
    }
} 
} 
?>

      </div>
    </div>


    
    <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Testimonies</h2>
          </div>
        </div>
      </div>
      <div class="row block-13">

        <div class="nonloop-block-13 owl-carousel">

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Megan Smith</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_2.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Brooke Cagle</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

          <div class="slide-item">
            <div class="team-member text-center">
              <img src="images/person_3.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle mx-auto">
              <div class="text p-3">
                <h2 class="mb-2 font-weight-light text-black h4">Philip Martin</h2>
                <span class="d-block mb-3 text-white-opacity-05">Guest</span>
                <p class="mb-5">&ldquo;Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi dolorem totam non quis facere blanditiis praesentium est. &rdquo;</p>
                
              </div>
            </div>
          </div>

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