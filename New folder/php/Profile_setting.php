<?php
session_start();

include '../database/dbcon.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="shorticon" href="../images/logo-black.jpg">

    <title>Profile Setting</title>
    <link href="../css/bootstrap/css/bootshape.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/jquery-ui.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="../css/intlTelInput.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="../css/flags.css" rel="stylesheet">
    <link rel="stylesheet" href="css/countrySelect.css">
</head>
<body>
<div class="container-fluid">
    <div class="header-top">
        <div class="row">
            <div class="col-sm-12 pad-0">
                <div class="container">
                    <div class="header-topin">
                        <p class="off20">                         </p>
                        <div class="inr-wrp">
                            
                            <div class="form-group">
                                <div id="currency_selector"
                                    data-selected-country="IN">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-top ends-->
    <!-- header begins-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 pad-0">
                    <div class="header-in">
                        <div class="hamburger mobile768" id="sidepanel_btn">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                        <div class="logo">
                            <a href="../index.html" class="desktop"><img src="../images/Teentaj Logo-1.jpg"></a>
                            <a href="#" class="mobile768 respoinline"><img
                                    src="../images/Teentaj Logo-1.jpg"></a>
                        </div>
                        <div class="menu menu-mobile">
                            <div class="desktop">
                                <ul>
                                    <li class="content__item">
                                        <a href="../about_us.html" class="link link--metis ">ABOUT</a>
                                    </li>
                                         <li class="content__item">
                                            <a href="../shop.html"
                                                class="link link--metis openshop">SHOP</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="../Recipes.html"
                                                class="link link--metis">RECIPES</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="../blog.html" class="link link--metis">BLOG</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="../contact.html" class="link link--metis">CONTACT US</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="accoutn-activity">
                            <ul>
                                <li class="">
                                    <a class="searchopen opt-link"><img src="../images/search-icon.svg"></a>
                                </li>
                                <li>
                                     <a class=" opt-link" data-route="#"><img
                                            src="../images/basket-icon.svg">
                                        <div class="cart"><span class="redno count">0</span>
                                        </div>
                                    </a>
                                </li>
                                    <li>
                                        <div class="">
                                          <div class="btn btn-secondary" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <a href="../php/registration_from.php" class="#"><img
                                              src="../images/profile-Icon.svg"></a>
                                            </div>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="../php/registration_from.php">Login</a>
                                            <a class="dropdown-item" href="../php/Profile_setting.php">Profile Setting</a>
                                            <a class="dropdown-item" href="../php/logout.php">Logout</a>
                                          </div>
                                        </div>
                                  </li>
                              </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!---Header end--->
 <!-- megamenu -->
 <div class="megamenu">
        <ul>


            <li>
          <a href="#" class=" "><img src="images/Artboard 5.png" width="204" height="200"></a>
            <div class="content__item-new">
           <a href="#" class="link link--metis">Single Use Pack (50mg)</a>
             </div>
                </li>

            <li>
            <a href="#" class=" "><img src="images/Artboard 4 (1).png" width="204" height="200"></a>
             <div class="content__item-new">
              <a href="#" class="link link--metis">1 Gram Saffron Pack</a>
                </div>
               </li>

            <li>
               <a href="#" class=" "><img src="images/Artboard 1.png" width="204" height="200"></a>
                 <div class="content__item-new">
                <a href="#" class="link link--metis">1 Gram Powdered Saffron</a>
                 </div>
                  </li>

            <li>
          <a href="#" class=" "><img src="images/Artboard 6.png" width="204" height="200"></a>
         <div class="content__item-new">
          <a href="#" class="link link--metis">1 Gm Premium Box</a>
            </div>
            </li>
            <li>
                <a href="product.html" class="link link--metis">View all products</a>
            </li>
        </ul>
    </div>
    <!-- megamenu -->
     <!-- mobile menu -->

     <div class="mobile768">
        <div id="sidepanel" class="sidepanel-light">
            <div class="header-mobilemenu">
                <p> </p>
            </div>
            <div class="header-mobilemenuin">
                <a id="sidepanel_close" href="#">
                    X
                </a>
                <div class="logo-menu-in">
                    <a href="#"><img src="images/Teentaj Logo-1.jpg"></a>
                </div>
                <div class="basket">
                    <a class="opt-link" data-route="#"><img
                            src="images/basket-icon.svg">
                        <div class="cart"><span class="redno count">0</span></div>
                    </a>
                </div>
            </div>
            <div class="sidepanel-content">
                <ul>
                  <li class="fadeoutleft">
                    <a href="../about_us.html">ABOUT</a>
                </li>
                        <li class="fadeoutleft openshop">
                            <a href="../shop.html">SHOP</a>
                        </li>
                        <li class="fadeoutleft">
                            <a href="../Recipes.html">RECIPES</a>
                        </li>
                        <li class="fadeoutleft">
                          <a href="../blog.html">BLOG</a>
                      </li>
                        <li class="fadeoutleft">
                            <a href="../contact.html">CONTACT US</a>
                        </li>
                    </ul>
                      <div class="loggin fadeoutleft">
                        <a href="../php/registration_from.php">Log in</a>
                        <a href="../php/registration_from.php">Sign Up</a>
                    </div>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
     <!-- searchbox -->
     <div class="searchbox">
        <div class="searchbox-in">
            <div class="search-close-btn">
                <div class="close">X</div>
            </div>
            <div class="srchbutton-wrp">
                <div class="search-wrap__inner">
                    <div class="desktop">
                        <div class="serchwdth">
                            <div type="search" placeholder="Search" id="search_bar" contenteditable="true"
                                class="search-wrap__input"></div>
                            <div class="searh_result" style="overflow: auto;height: 200px;">
                            </div>
                        </div>
                    </div>
                    <div class="mobile768">
                        <input type="search" placeholder="Search" contenteditable="true"
                            class="search-wrap__input">
                    </div>
                </div>
                <button><img src="images/search-icon.svg"></button>
            </div>
            <div class="search-suggestion">
                <ul>
                    <li><a href="about_us.html">About Us</a></li>
                    <li><a href="product.html">Products</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>
            </div>
            <div class="logo-sr">
               <a href="../index.html"><img src="images/Teentaj Logo-1.jpg"></a>
            </div>
        </div>
    </div>
    <section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="../images/profile-icon-png-910.png"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;">
                <i class="fa-solid fa-user-tie-hair"></i>
              <h5>Marie Horwitz</h5>
              <!-- <p>Web Designer</p> -->
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer>
  <div class="footer-main">
    <div class="container">
      <div class="row footerflex">
        <div class="col-lg-4 col-md-6 col-sm-6 col-6 item01">
          <div class="footbox foot1">
            <div class="logo-foot">
              <img src="../images/Teentaj Logo-1.jpg">
            </div>
            <div class="logo-foot-content">
              <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.  </p>
              <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 col-6 item02">
          <div class="footbox footbox-list foot2">
            <ul>
				<li class="content__item"><a href="../about_us.html" class="link link--metis">About</a></li>
				<li class="content__item"><a href="../Terms_conditions.html" class="link link--metis">Terms &amp; Conditions</a></li>
				<li class="content__item"><a href="../contact.html" class="link link--metis">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 item03">
          <div class="footbox footbox-list foot3">
            <ul>
				<li class="content__item"><a href="../index.html" class="link link--metis">Home</a></li>
				<li class="content__item"><a href="../Usage_Benefits.html" class="link link--metis">Usage &amp; Benefits</a></li>
				<li class="content__item"><a href="../privacy-policy.html" class="link link--metis">Privacy Policy</a></li>
					
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-6 item04">
          <div class="footbox foot4">
            <div class="foot4repo1">
              <div class="foottitlerspo">
                <h4 class="content__item">
                  <a href="contact.html" class="link link--metis">Contact Us</a>
                </h4>
              </div>
              <div class="social-ico">
                <ul>
                  <li>
                    <a href="https://www.instagram.com/teentajspices/"><svg version="1.1" id="Layer_1" x="0px" y="0px"
                        viewBox="0 0 40 40" xml:space="preserve">
                        <g>
                          <g>
                            <a href="https://www.instagram.com/teentajspices/"><img src="../images/instagram-11.svg" alt=""></a> 
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.facebook.com/teentajspices">
                      <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40"
                        xml:space="preserve">
                        <g>
                          <g>
                            <a href="https://www.facebook.com/teentajspices"><img src="../images/facebook-3-128x128.png" alt=""></a>
                          </g>
                        </g>
                        <g>
                          <g>
                           <!-- <a href=""></a> -->
                          </g>
                        </g>
                        <g>
                          <g>
                            <circle class="st0" cx="30.9" cy="9.7" r="1.5" />
                          </g>
                        </g>
                      </svg>
                    </a>
                    </li>
                    <li>
                    <a href="https://twitter.com/teentaj">
                      <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40"
                        xml:space="preserve">
                        <g>
                          <g>
                            <a href="https://twitter.com/teentaj"><img src="../images/twitter-30 (1).png" alt=""></a>
                          </g>
                        </g>
                        <g>
                          <g>
                           <!-- <a href=""></a> -->
                          </g>
                        </g>
                        <g>
                          <g>
                            <circle class="st0" cx="30.9" cy="9.7" r="1.5" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/channel/UCvzgvcEAmDSrov6X98zGW6A">
                      <svg version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 40 40"
                        xml:space="preserve">
                        <g>
                          <g>
                            <a href="https://www.youtube.com/channel/UCvzgvcEAmDSrov6X98zGW6A"><img src="../images/youtube-30.png" alt=""></a>
                          </g>
                        </g>
                        <g>
                          <g>
                           <!-- <a href=""></a> -->
                          </g>
                        </g>
                        <g>
                          <g>
                            <circle class="st0" cx="30.9" cy="9.7" r="1.5" />
                          </g>
                        </g>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="foot4repo2">
              <div class="mailus cont">
                <ul>
                  <li class="contactwidht"><a href="#"><img src="../images/foot-letter.svg"></a>
                  </li>
                  <li class="content__item">
                    <a href="mailto:Teentajspices@gmail.com"
                      class="link link--metis">Teentajspices@gmail.com</a>
                  </li>
                </ul>
              </div>
              <div class="call-us cont">
                <ul>
                  <li class="contactwidht"><a href="#"><img src="../images/foot-mobile.svg"></a>
                  </li>
                  <li class="content__item">
                    <a href="Tel:+44 744 871 5444" class="link link--metis">+44 744 871 5444</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="footlast">
    <p>@ Copyright TeenTaj Brand Saffron</p>
  </div>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
</footer>
    </div>
    <!-- // site wrapper -->
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/ryto.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/jquery-seqencer.js"></script>
    <script src="../js/rellax.min.js"></script>
    <script src="../js/currency-country.js"></script>
    <script src="../js/countrySelect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/intlTelInput.min.js.js"></script>
   

        <script src="js/utils.js"></script>
    <script>
        // parallex
        var rellax = new Rellax('.rellax', {
            speed: -3,
            center: false,
            wrapper: null,
            round: true,
            vertical: true,
            horizontal: false
        });
    </script>
    
    
    <script>
        $("#country_selector").countrySelect({
            preferredCountries: ['in', 'gb', 'us']
        });
    </script>

    <script>
        var telInput = $("#phone_no"),
            errorMsg = $("#error-msg"),
            validMsg = $("#valid-msg");

        // initialise plugin
        telInput.intlTelInput({

            allowExtensions: true,
            formatOnDisplay: true,
            autoFormat: true,
            autoHideDialCode: true,
            autoPlaceholder: true,
            defaultCountry: "auto",
            ipinfoToken: "yolo",

            nationalMode: false,
            numberType: "MOBILE",
            //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            preferredCountries: ['in', 'us', 'gb'],
            preventInvalidNumbers: true,
            separateDialCode: true,
            initialCountry: "IN",
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        });

        var reset = function() {
            telInput.removeClass("error");
            errorMsg.addClass("hide");
            validMsg.addClass("hide");
        };

        // on blur: validate
        telInput.blur(function() {
            reset();
            if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
            }
        });

        // on keyup / change flag: reset
        telInput.on("keyup change", reset);
    </script>
</body>
</html>
