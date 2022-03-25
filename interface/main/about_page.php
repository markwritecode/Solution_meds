<?php

/**
 * OpenEMR About Page
 *
 * This Displays an About page for OpenEMR Displaying Version Number, Support Phone Number
 * If it have been entered in Globals along with the Manual and On Line Support Links
 *
 * @package   OpenEMR
 * @link      http://www.open-emr.org
 * @author    Terry Hill <terry@lilysystems.com>
 * @author    Brady Miller <brady.g.miller@gmail.com>
 * @copyright Copyright (c) 2016 Terry Hill <terry@lillysystems.com>
 * @copyright Copyright (c) 2017 Brady Miller <brady.g.miller@gmail.com>
 * @license   https://github.com/openemr/openemr/blob/master/LICENSE GNU General Public License 3
 */

// TODO: jQuery UI Removal


require_once("../globals.php");

use OpenEMR\Core\Header;
use OpenEMR\Services\VersionService;

?>
<html>
<head>

    <?php Header::setupHeader(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Solution Plus Technology</title>

    <!-- Bootstrap core CSS -->
    <link href="/public/assets/about-us/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="/public/assets/about-us/assets/css/fontawesome.css">
    <link rel="stylesheet" href="/public/assets/about-us/assets/css/templatemo-digimedia-v3.css">
    <link rel="stylesheet" href="/public/assets/about-us/assets/css/animated.css">
    <link rel="stylesheet" href="/public/assets/about-us/assets/css/owl.css">
    <style>
        .section{
            background: #ffff !important;
            border:none !important;
        }
        fieldset{
           background: #ffff !important; 
        }
    </style>
    
    <title><?php echo xlt("About");?> Solutionmed</title>
    
</head>
<body class="body_top">
    <div id="about" class="about section">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="row">
                <div class="col-lg-6">
                  <div class="about-left-image  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
                    <img src="/public/assets/about-us/assets/images/about-dec-v3.png" alt="">
                  </div>
                </div>
                <div class="col-lg-6 align-self-center  wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="about-right-content">
                    <div class="section-heading">
                      <h6>About Us</h6>
                      <h4>Who is Solution Plus<em>Technology</em></h4>
                      <div class="line-dec"></div>
                    </div>
                    <p>At Solution Plus Technology, we position ourself to propel 3 major entities.</p>
                    <div class="row">
                      <div class="col-lg-4 col-sm-4">
                        <div class="skill-item first-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                          <div class="progress" data-percentage="90">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                              <div>
                                90%<br>
                                <span>Partnership</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                        <div class="skill-item second-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                          <div class="progress" data-percentage="80">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                              <div>
                                80%<br>
                                <span>Solution</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-4">
                        <div class="skill-item third-skill-item wow fadeIn" data-wow-duration="1s" data-wow-delay="0s">
                          <div class="progress" data-percentage="80">
                            <span class="progress-left">
                              <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                              <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                              <div>
                                80%<br>
                                <span>Ideas</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div id="contact" class="contact-us section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 offset-lg-3">
              <div class="section-heading wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <h6>Contact Us</h6>
                <h4>Get In Touch With Us <em>Now</em></h4>
                <div class="line-dec"></div>
              </div>
            </div>
            <div class="col-lg-12 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.25s">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="contact-dec">
                      <img src="/public/assets/about-us/assets/images/contact-dec-v3.png" alt="">
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div id="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3939.7202089703887!2d7.431855614571348!3d9.089232890545798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e75344c44b00f%3A0xec4bc9fb78f90b70!2sNawa%20Complex!5e0!3m2!1sen!2sng!4v1644494775938!5m2!1sen!2sng" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="fill-form">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="/public/assets/about-us/assets/images/phone-icon.png" alt="">
                              <a href="#">+234 70-8255-4249</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="/public/assets/about-us/assets/images/email-icon.png" alt="">
                              <a href="#">info@solutionplustech.net</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-4">
                          <div class="info-post">
                            <div class="icon">
                              <img src="/public/assets/about-us/assets/images/location-icon.png" alt="">
                              <a href="#">Suit 001 Nawa Complex Kado District Abuja</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <fieldset>
                            <input type="name" name="name" id="name" placeholder="Name" autocomplete="on" required>
                          </fieldset>
                          <fieldset>
                            <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your Email" required="">
                          </fieldset>
                          <fieldset>
                            <input type="subject" name="subject" id="subject" placeholder="Subject" autocomplete="on">
                          </fieldset>
                        </div>
                        <div class="col-lg-6">
                          <fieldset>
                            <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required=""></textarea>  
                          </fieldset>
                        </div>
                        <div class="col-lg-12">
                          <fieldset>
                            <button type="submit" id="form-submit" class="main-button ">Send Message Now</button>
                          </fieldset>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
</body>
<!-- Scripts -->
  <script src="/public/assets/about-us/vendor/jquery/jquery.min.js"></script>
  <script src="/public/assets/about-us/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/public/assets/about-us/assets/js/owl-carousel.js"></script>
  <script src="/public/assets/about-us/assets/js/animation.js"></script>
  <script src="/public/assets/about-us/assets/js/imagesloaded.js"></script>
  <script src="/public/assets/about-us/assets/js/custom.js"></script>
</html>
