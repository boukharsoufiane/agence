<?php
$msg="";
if(isset($_POST['submit'])){
   $con=mysqli_connect('localhost','Root','','agence');
   if($con){
   $titre=$_POST['titre'];
   $images=$_POST['images'];
   $description=$_POST['description'];
   $superficie=$_POST['superficie'];
   $adresse=$_POST['adresse'];
   $montant=$_POST['montant'];
   $date=$_POST['date'];
   $type_annonce=$_POST['type_annonce'];
   
   $sql="insert into annonces(titre,images,description,superficie,adresse,montant,date,type_annonce)values('$titre','$images','$description','$superficie','$adresse','$montant','$date','$type_annonce')";
   
   $query=mysqli_query($con,$sql);
   if($query){
   $msg="Votre annonce a été ajouter reussir";
   }
   else{
   $msg="Votre annonce n'a pas été ajouter reussir";
   }
   }
   else{
       echo "Votre annonce ne peut pas ajouter,s'il vous plait essayez plus tard";
   }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Arsha Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">LUXIOR</a></h1>



      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
          data-aos="fade-up" data-aos-delay="200" id="annonce">
          <h1>Gestion des annonces</h1>
          <h2>APPLICATION</h2>
          <div class="d-flex justify-content-center justify-content-lg-start" id="btnAnnonce">
            <a href="#about" class="btn-get-started scrollto">Déposer une annonce</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200" id="img">
          <img src="pngegg (5).png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <form class="form-inline" id="formes">
            <div class="form-group mx-sm-3 mb-2">
              <input type="number" class="form-control" placeholder="Max-prix">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="number" class="form-control" placeholder="Min-prix">
            </div>
            <div class="form-group mx-sm-3 mb-2">
              <input type="text" class="form-control" placeholder="Vendre ou location">
            </div>
            <button type="submit" class="btn btn-primary mb-2" id="btn">SEARCH</button>
          </form>

        </div>

      </div>
    </section><!-- End Cliens Section -->

    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Vendre avec Frimmobilier, rapidement, en toute sécurité et au bon prix !</p>
          <p>Optenez la valeur de votre bien en quelques clics grâce à notre outil d'estimation en ligne !</p>
        </div>

        <div class="row">
          <div class="card-deck">
            <?php
                $con=mysqli_connect('localhost','Root','','agence');
                $sql = "SELECT * FROM annonces";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result))
                 { 
                    ?>
                       <div class="card" id="cards">
                          <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                          <h4 class="modal-title" id="myModalLabel"><?php echo $row['titre']; ?></h4>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                          aria-hidden="true">&times;</span></button>
                                       </div>
                                        <div class="modal-body">
                                          <?php echo $row['id']; ?>
                                          <p>
                                          <strong>Description:</strong><?php echo $row['description']; ?>
                                          </p>
                                          <p><strong>Superficie:</strong>
                                              <?php echo $row['superficie']; ?>
                                          </p>
                                          <p><strong>Adresse:</strong>
                                              <?php echo $row['adresse']; ?>
                                          </p>
                                          <p><strong>Montant:</strong>
                                              <?php echo $row['montant']; ?>
                                          </p>
                                          <p><strong>Date:</strong>
                                              <?php echo $row['date']; ?>
                                          </p>
                                          <p><strong>Type d'annonce:</strong>
                                              <?php echo $row['type_annonce']; ?>
                                          </p>
                                        </div>
                                        <form action="index.php" method="post">
                                           <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                           <input type="submit" name="delete" value="Delete">
                                        </form>
                                        <button onclick="editRow()">Edit</button><br>
                                        <form action="index.php" method="post" style="display:none;" id="forms">
                                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <label>Titre:</label>
                                            <input type="text" name="titre" value="<?php echo $row['titre']; ?>"><br><br>
                                            <label>images:</label>
                                            <input type="file" name="images" value="<?php echo $row['images'];?>"><br><br>
                                            <label>Descriptions:</label>
                                            <input type="text" name="description" value="<?php echo $row['description'];?>"><br><br>
                                            <label>Superficie:</label>
                                            <input type="number" name="superficie" value="<?php echo $row['superficie'];?>"><br><br>
                                            <label>Adresse:</label>
                                            <input type="text" name="adresse" value="<?php echo $row['adresse'];?>"><br><br>
                                            <label>Montant:</label>
                                            <input type="number" name="montant" value="<?php echo $row['montant'];?>"><br><br>
                                            <label>Date:</label>
                                            <input type="date" name="date" value="<?php echo $row['date'];?>"><br><br>
                                            <label>Type d'annonce:</label>
                                            <input type="text" name="type_annonce" value="<?php echo $row['type_annonce'];?>"><br><br>
                                            <input type="submit" name="edit" value="Update">
                                        </form>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                   </div>
                              </div>
                            </div>
                            <div class="card-body">
                              <p class="card-title">Titre :<?php echo $row['titre']; ?></p>
                              <img class="card-text" src="<?php echo $row['images'];?>">
                              <p class="card-text">Description :<?php echo $row['description']; ?></p>
                              <p class="card-text">Superficie :<?php echo $row['superficie']; ?> metre</p>
                              <p class="card-text">Adresse :<?php echo $row['adresse']; ?></p>
                              <p class="card-text">Montant :<?php echo $row['montant']; ?></p>
                              <p class="card-text">Date :<?php echo $row['date']; ?></p>
                              <p class="card-text">Type d'annonce :<?php echo $row['type_annonce']; ?></p>
                              <form action="index.php" method="post">
                                   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                   <input type="submit" name="delete" value="Delete">
                              </form>
                              <button onclick="editRow()">Edit</button><br>
                              
                            
                              
                                
                                
                            </div>
                       </div>
                    <?php
                }
                
    
                if (isset($_POST['delete'])) {
                    $con=mysqli_connect('localhost','Root','','agence');
                    $id = $_POST['id'];
                    $sql = "DELETE FROM annonces WHERE id=$id";
                
                    if (mysqli_query($con, $sql)) {
                        header("Location: inscription.php");
                        exit;
                    } else {
                        echo "Error deleting record";
                    }
                    mysqli_close($con);
                }
    
                if(isset($_POST['edit'])){
                    $con=mysqli_connect('localhost','Root','','agence');
                    $id = $_POST['id'];
                    $titre=$_POST['titre'];
                    $images=$_POST['images'];
                    $description=$_POST['description'];
                    $superficie=$_POST['superficie'];
                    $adresse=$_POST['adresse'];
                    $montant=$_POST['montant'];
                    $date=$_POST['date'];
                    $type_annonce=$_POST['type_annonce'];
                    $sql = "UPDATE annonces SET titre='$titre', images='$images' , description='$description', superficie='$superficie', adresse='$adresse', montant='$montant', date='$date', type_annonce='$type_annonce'
                    WHERE id=$id";
                    if (mysqli_query($con, $sql)) {
                        echo "Record updated successfully";
                        header("Refresh:0");
                    } else {
                        echo "Error updating record: " . mysqli_error($con);
                    }
                    mysqli_close($con);
                }
            
                
            ?>
            
    
        </div>
        


        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
     <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Desposer une annonce</h2>
        </div>
        

        <div class="row content" id="info">
          <div class="col-lg-6">
             <section class="u-align-center u-clearfix u-gradient u-section-3" id="carousel_babd">
                  <div class="u-clearfix u-sheet u-sheet-1">
                     <section class="h-100 h-custom" style="background-color: #fff;">
                          <div class="container py-5 h-100" id="agency">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                  <div class="col-lg-8 col-xl-6">
                                      <div class="card rounded-3">
                                          <img src="assets/img/agence.jpg" class="w-100"
                                           style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                                      </div>
                                  </div>
                                  <div class="card-body p-4 p-md-5">
                                      <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">ANNONCES INFO</h3>

                                      <form class="px-md-2" action="index.php" method="post">
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Titre</label>
                                              <input type="text" id="form3Example1q" class="form-control" name="titre" />
                                            </div>
              
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Import Image</label>
                                              <input type="file" id="form3Example1q" class="form-control" name="images" />
                                            </div>
              
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Description</label>
                                              <input type="text" id="form3Example1q" class="form-control" style="height: 20vh;"
                                                name="description" />
                                            </div>
              
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Superficie</label>
                                              <input type="text" id="form3Example1q" class="form-control" name="superficie" />
                                            </div>

                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Adresse</label>
                                              <input type="text" id="form3Example1q" class="form-control" name="adresse" />
                                            </div>
              
                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Montant</label>
                                              <input type="text" id="form3Example1q" class="form-control" name="montant" />
                                            </div>
              
                                            <div class="row">
                                              <div class="form-outline mb-4">
                                                   <div class="form-outline mb-4">
                                                     <label for="exampleDatepicker1" class="form-label">Date
                                                       d’annonce</label>
                                                     <input type="date" class="form-control" id="exampleDatepicker1" name="date" />
                                                   </div>
                                              </div>
                                            </div>

                                            <div class="form-outline mb-4">
                                              <label class="form-label" for="form3Example1q">Type annonce</label>
                                              <input type="text" id="form3Example1q" class="form-control" name="type_annonce" />
                                            </div>
                                            <button type="submit">Submit</button>
                                      </form>

                                    </div>
                               </div>
                           </div>
                        </section>
                  </div>
                </section>
          </div>
        </div>
      </div>

    </section><!-- End About Us Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
            <img src="assets/img/house-g99c35a30c_1920.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
            <h3>Analyse of agence</h3>
            <p class="fst-italic">
              analysez les stratégies & augmentez votre part de marché avec Similarweb!
            </p>

            <div class="skills-content">

              <div class="progress">
                <span class="skill">Vendre<i class="val">85%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Location<i class="val">90%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Visite<i class="val">95%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                  </div>
                </div>
              </div>



            </div>

          </div>
        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Services Section ======= -->


    <!-- ======= Cta Section ======= -->
    

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>