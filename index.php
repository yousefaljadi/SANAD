<?php  require_once "admin/functions/init.php" ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
    <title>Sanad</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/line-icons.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <!-- Owl carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.css">

    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/nivo-lightbox.css">
    <!-- Animate -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css">

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <a href="index.php" class="navbar-brand"><img src="assets/img/sanadlogo.PNG" style="width: 85px;" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#feature">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#team">
                  Guests
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimonial
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"> Raise Your Hand To The <br> Right Place</h2>
                <div>
                <?php successMsg();
                 add_guest();
                ?>
                </div>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a data-toggle="modal" href="#regModal" class="btn btn-common">Register Now</a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="assets/img/hero-2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <div id="feature">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="text-wrapper">
              <div>
                <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">We are helping to grow <br> your needs.</h2>
                <p class="mb-4">Sanad's vision is to live in an enlightened, open society that accepts difference and invests in its young generations.</p>
                <a href="#" class="btn btn-common">ESNED</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
            <div class="feature-thumb">
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                <div class="icon">
                  <i class="lni-microphone"></i>
                </div>
                <div class="feature-content">
                  <h3>What we do</h3>
                  <p>Enhancing social capital by enhancing social cohesion, increasing trust, cooperation and partnerships between individuals and institutions</p>
                </div>
              </div>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
                <div class="icon">
                  <i class="lni-users"></i>
                </div>
                <div class="feature-content">
                  <h3>Meet our team</h3>
                  <p> Empowering local communities. It is important to build a network of interdependent relationships, to strengthen and strengthen partnerships, solidarity cooperation and social unity (while respecting and appreciating differences as a factor of enrichment). </p>
                </div>
              </div>
              <div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="700ms">
                <div class="icon">
                  <i class="lni-medall-alt"></i>
                </div>
                <div class="feature-content">
                  <h3>Our Creation</h3>
                  <p>Contributing to and benefiting from the development of a just and inclusive society, while enjoying a luxury of living (the well-being of the individual is those aspects necessary to meet his needs, and also the ability to achieve his goals, prosperity and his sense of self-satisfaction).</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    <section id="services" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Our Services</h2>
          <p>A desire to help and empower others between community The existence of racial discrimination and inequality in the infrastructure, difficulties in forming a family and building a house, unemployment, patriarchal society and the lack of cultural and social facilities, all of this leads to frustration, decrease and weakening the self-confidence of individuals, which may result in a social environment of high risk for young people, with the possibility of a high level of disorder Behavior and increased violence, especially among young males. <br> began to grow in 2020.</p>
        </div>
        <div class="row">
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-pencil"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> YOUTH Support </a></h3>
               
                <p>
                       It is often overlooked that the potential energy, enthusiasm and positive potential of youth is a vital resource for society....
                       
                       
                       </p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-heart"></i>
              </div>
              <div class="services-content">
                <h3><a href="#"> Community needs</a></h3>
                <p>Establishing a local statement base to measure the quality of life of young people in the Triangle area, through which individuals, civil society institutions (movements and associations), as well as local institutions and decision-makers, are informed about the needs of the community....</p>
              </div>
            </div>
          </div>
          <!-- Services item -->
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">organizational structure</a></h3>
                <p>Supporting its organizational structure, providing it with an organizational framework, providing advice and improving the local public space to be a factor in social, cultural and economic prosperity....</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
    <section class="video-promo section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="video-promo-content text-center wow fadeInUp" data-wow-delay="0.3s">
              <a href="https://www.youtube.com/watch?v=HiNJcpNquzc" class="video-popup"><i class="lni-film-play"></i></a>
              <h2 class="mt-3 wow zoomIn" data-wow-duration="1000ms" data-wow-delay="100ms">Watch Video</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
    <section id="team" class="section-padding text-center">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Meet our Guests</h2>
          <p>A desire to Develop of human resources and social resources and support for youth initiatives. <br> began to grow in 2020.</p>
        </div>
        <div class="row">

        <?php

$guest_query = " SELECT * FROM guests ";
$execute_guest = query($guest_query);
confirm($execute_guest);
while ($row = fetch_array($execute_guest)) {
    $g_name = $row['u_name'];
    $g_image = $row['u_image'];
    $g_url = $row['u_url'];
    $g_notes = $row['u_notes']; ?>

          <div class=" col-md-6">
            <!-- Team Item Starts -->
            <div class="team-item text-center wow fadeInRight" data-wow-delay="0.3s">
              <div class="team-img">
                <img class="img-fluid d-block w-100" src="assets/img/guests/<?php echo $g_image ?>" alt="">
                <div class="team-overlay">
                  <div class="overlay-social-icon text-left p-3">
                   <div class="name">
                     <h3> <?php  echo $g_name; ?> </h3>
                   </div><!-- /.name -->
                   <div class="notes mt-3">
                     <h5 class="text-dark mb-1">Notes</h5>
                     <p class="text-dark">
                       <?php  echo $g_notes; ?>
                     </p>
                   </div><!-- /.notes -->
                   <div class="btn-box mt-2">
                   <a href="#" class="btn btn-common">Supprt</a>
                   <a href="<?php echo $g_url; ?> " class="btn btn-common video-popup">Watch Video</a>
                   <a href="#" class="btn btn-common">Support video</a>
                   </div><!-- /.btn-box -->
                  </div>
                </div>
              </div>
              <div class="info-text">
                <h3><a href="#"> <?php echo $g_name; ?> </a></h3>

              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

<?php
} ?>
        </div>
      </div>
    </section>
    <!-- Team Section End -->


    <!-- Testimonial Section Start -->
    <section id="testimonial" class="testimonial section-padding">
      <div class="overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
            <div id="testimonials" class="owl-carousel wow fadeInUp" data-wow-delay="1.2s">
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Yousef Al-Jadii</a></h2>
                    <h3><a href="#">Capricon co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">A practical and stable platform for youth groups who wish to volunteer and support to develop the local community </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#"> Moudhi</a></h2>
                    <h3><a href="#">  عندي مفاجأه حقكم ليي يومكم مادري شنو حدي خايف  </a></h3>
                  </div>
                  <div class="content">
                    <p class="description">ليس عندي محتوى لاضيفه  </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Alwaleed </a></h2>
                    <h3><a href="#">kuwait codes  co.</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">يوسف سوو سكريين شيير وتحله الحين </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img4.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">Nancy </a></h2>
                    <h3><a href="#">JAVAAA SCRIIIPT</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">راح اناديك من يوم ورايح جووزيف </p>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-item">
                  <div class="img-thumb">
                    <img src="assets/img/testimonial/img5.png" alt="">
                  </div>
                  <div class="info">
                    <h2><a href="#">obooy</a></h2>
                    <h3><a href="#">Angry</a></h3>
                  </div>
                  <div class="content">
                    <p class="description">Ha sweeet el database  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Testimonial Section End -->


    <!-- Contact Section Start -->
    <section id="contact" class="section-padding">
      <div class="container">
        <div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-block">
              <form id="contactForm">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input type="text" placeholder="Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                   <div class="col-md-12">
                    <div class="form-group">
                      <input type="text" placeholder="Subject" id="msg_subject" class="form-control" required data-error="Please enter your subject">
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="form-control" id="message" placeholder="Your Message" rows="5" data-error="Write your message" required></textarea>
                      <div class="help-block with-errors"></div>
                    </div>
                    <div class="submit-button">
                      <button class="btn btn-common" id="form-submit" type="submit">Send Message</button>
                      <div id="msgSubmit" class="h3 text-center hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="contact-right-area wow fadeIn">
              <div class="contact-title">
                <h1>We're a friendly bunch..</h1>
                <p>Enhancing human capital by encouraging quality learning that affects the lives of the individual and society, as well as effective employment in the workplace.</p>
              </div>
              <h2>Dont Contact us Contact them</h2>
              <div class="contact-right">
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-map-marker"></i>
                  </div>
                  <p>ADDRESS:Mubarek Al-Abdullah Block : mo shghlik street 317 Buliding : 2</p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-envelope"></i>
                  </div>
                  <p><a href="#">Email:  Yaljadi97@outlook.com</a></p>
                </div>
                <div class="single-contact">
                  <div class="contact-icon">
                    <i class="lni-phone-handset"></i>
                  </div>
                  <p><a href="#">Phone:  +965  55816553</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact Section End -->

    <!-- Copyright Section Start -->
    <div class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-3 col-xs-12">
            <div class="footer-logo">
              <img src="assets/img/sanadlogo.PNG" style="width: 100px;;" alt="logo">
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="social-icon text-center">
              <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
              <a class="twitter" href="#"><i class="lni-twitter-filled"></i></a>
              <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
              <a class="linkedin" href="#"><i class="lni-linkedin-filled"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-5 col-xs-12">
            <p class="float-right">Designed and Developed by <a href="https://afflam.netlify.app" rel="nofollow">Aflam</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->
<!-- ======= register modal ======= -->

<div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header border-bottom-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-title text-center">
          <h4>Register</h4>
        </div>
        <div class="d-flex flex-column text-center">
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name"placeholder="Your Full Name" required>
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="post_image" id="customFile" required>
              <label class="custom-file-label text-left" for="customFile">Choose Image</label>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="url" id="url" placeholder="Video URL" required>
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Add Notes..."  name="notes"  id="notes" rows="3" required></textarea>
            </div>
            <button type="submit" name="add-guest" class="btn btn-danger btn-block btn-round">Login</button>
          </form>

      </div>
    </div>
      <div class="modal-footer d-flex justify-content-center">
        <div class="signup-section">Become a part of <span style="color: #ae2727;"> Aflam </span> </div>
      </div>
  </div>
</div>

<!-- ======= register modal end ======= -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.mixitup.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/jquery.nav.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/nivo-lightbox.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.slicknav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/form-validator.min.js"></script>
    <script src="assets/js/contact-form-script.min.js"></script>

  </body>
</html>
