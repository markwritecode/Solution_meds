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

use OpenEMR\Common\Uuid\UniqueInstallationUuid;
use OpenEMR\Core\Header;
use OpenEMR\Services\VersionService;

?>

<html>
<head>

    <?php Header::setupHeader(); ?>
    <link rel="stylesheet" href="/public/assets/software_support/fonts/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/public/assets/software_support/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/public/assets/software_support/css/style.css">
    
    <title><?php echo xlt("Software Support");?> Solutionmed</title>
   
<body class="body_top">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                      
                      <h3 class="heading mb-4">Let's talk about everything!</h3>
                      <p>Customers don’t expect you to be perfect. They expect you to fix things when they go wrong.</p>
        
                      <p><img src="/public/assets/software_support/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>
        
        
                    </div>
                    <div class="col-md-6">
                      
                      <form class="mb-5" method="post" id="contactForm" name="contactForm">
                            <div class="row">
                              <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-md-12 form-group">
                                <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                              </div>
                            </div>  
                            <div class="row">
                              <div class="col-12">
                                <input type="submit" value="Send Message" class="btn btn-primary rounded-0 py-2 px-4">
                              <span class="submitting"></span>
                              </div>
                            </div>
                      </form>
        
                      <div id="form-message-warning mt-4"></div> 
                      <div id="form-message-success">
                        Your message was sent, thank you!
                      </div>
                      <div>
                          <h4 class="text-center">Remote Support Instruction</h4>
                          <p class="text-center">Download any of this remote desktop application</p>
                      </div>
                      <div class="d-flex justify-content-center">
                          <div class="mr-3">
                            <a href="https://anydesk.com/en/downloads/windows" target="_blank"><img src="/public/assets/software_support/images/anydesk.svg" alt="" style="width:60px; height:60px;"></a>
                          </div>
                          <div>
                            <a href="https://www.teamviewer.com/en/download/windows" target="_blank"><img src="/public/assets/software_support/images/teamviewer.svg" alt="" style="width:60px; height:60px;"></a>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61bfb8aa80b2296cfdd2752d/1fnaeink4';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
<!--End of Tawk.to Script-->
    <script src="/public/assets/software_support/js/jquery-3.3.1.min.js"></script>
    <script src="/public/assets/software_support/js/popper.min.js"></script>
    <script src="/public/assets/software_support/js/bootstrap.min.js"></script>
    <script src="/public/assets/software_support/js/jquery.validate.min.js"></script>
    <script src="/public/assets/software_support/js/main.js"></script>
</body>
</html>