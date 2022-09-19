<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="DE1RANsTl1ulY7kNRUtP8ZGZy8o81POxfhZyCb5S">
    <meta name="base-url" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="shorticon" href="images/logo-black.jpg">
    <title>Teentaj Saffron</title>
    <meta name="description" content="">
    <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <link href="css/intlTelInput.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="css/flags.css" rel="stylesheet">
    <link rel="stylesheet" href="css/countrySelect.css">
    <!-- <link rel="canonical" href="#" /> -->
</head>

<body class="homepage">
    <div class="siteWrapper">
        <!-- header-top begins-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"
    integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flagstrap/1.0/css/flags.min.css"
    integrity="sha512-wLjzMv9GhdAgKsaca/ZRs5sEOVsexDeA0PllsVIgTh+St4sMmrXz4udlz/rMHAN58IMZAXVtzxI112u8QoRHfA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css">
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
                            <a href="index.php" class="desktop"><img src="images/Teentaj Logo-1.jpg"></a>
                            <a href="index.php" class="mobile768 respoinline"><img
                                    src="images/Teentaj Logo-1.jpg"></a>
                        </div>
                        <div class="menu menu-mobile">
                            <div class="desktop">
                                <ul>
                                    
                                    <li class="content__item">
                                        <a href="about_us.php" class="link link--metis ">ABOUT</a>
                                    </li>
                                         <li class="content__item">
                                            <a href="#"
                                                class="link link--metis openshop">SHOP</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="Recipes.php"
                                                class="link link--metis">RECIPES</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="blog.php"
                                                class="link link--metis">BLOG</a>
                                        </li>
                                        <li class="content__item">
                                            <a href="contact.php"
                                                class="link link--metis">CONTACT US</a>
                                        </li>
                                    </ul>
                            </div>
                        </div>
                        <div class="accoutn-activity">
                            <ul>
                                <li class="">
                                    <a class="searchopen opt-link"><img
                                            src="images/search-icon.svg"></a>
                                </li>

                                <li>
                                     <a class=" opt-link" href="cart_total_item.php"><img
                                            src="images/basket-icon.svg">
                                            <?php 
                                            $count=0;
                                            if (isset($_SESSION['cart'])) {
                                                $count=count($_SESSION['cart']);
                                            }
                                            ?>
                                        <div class="cart"><span class="redno count"><?php echo $count; ?></span>
                                        </div>
                                    </a>
                                </li>
                                    <li>
                                      
                                        <div class="">
                                          <div class="btn btn-secondary " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <a href="../php/registration_from.php" class="#"><img
                                              src="images/profile-Icon.svg"></a>
                                            </div>
                                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="php/registration_from.php">Login</a>
                                            <a class="dropdown-item" href="php/Profile_setting.php">Profile Setting</a>
                                            <a class="dropdown-item" href="php/logout.php">Logout</a>
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
    <!-- header ends-->
    <!-- megamenu -->
    <div class="megamenu">
        <ul>
            <li>
          <a href="#" class=" "><img src="images/Artboard 5.png" width="204" height="200"></a>
            <div class="content__item-new">
           <a href="#" class="link link--metis">NEGIN SAFFRON</a>
             </div>
                </li>

            <li>
            <a href="#" class=" "><img src="images/Artboard 4 (1).png" width="204" height="200"></a>
             <div class="content__item-new">
              <a href="#" class="link link--metis">SARGOL SAFFRON</a>
                </div>
               </li>

            <li>
               <a href="#" class=" "><img src="images/Artboard 1.png" width="204" height="200"></a>
                 <div class="content__item-new">
                <a href="#" class="link link--metis">PUSHAL SAFFRON</a>
                 </div>
                  </li>

            <li>
          <a href="#" class=" "><img src="images/Artboard 6.png" width="204" height="200"></a>
         <div class="content__item-new">
          <a href="#" class="link link--metis">BUNCH SAFFRON</a>
            </div>
            </li>
            <li>
                <a href="product.php" class="link link--metis">View all products</a>
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
                    <a href="index.php"><img src="images/Teentaj Logo-1.jpg"></a>
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
                    <a href="about_us.php">ABOUT</a>
                </li>
                        <li class="fadeoutleft openshop">
                            <a href="#">SHOP</a>
                        </li>
                        <li class="fadeoutleft">
                            <a href="Recipes.php">RECIPES</a>
                        </li>
                        <li class="fadeoutleft">
                          <a href="blog.php">BLOG</a>
                      </li>
                        <li class="fadeoutleft">
                            <a href="contact.php">CONTACT US</a>
                        </li>
                    </ul>
                      <div class="loggin fadeoutleft">
                        <a href="php/registration_from.php">Log in</a>
                        <a href="php/registration_from.php">Sign Up</a>
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
                    <li><a href="about_us.php">About Us</a></li>
                    <li><a href="product.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="logo-sr">
               <a href="index.php"><img src="images/Teentaj Logo-1.jpg"></a>
            </div>
        </div>
    </div>
    <!-- searchbox -->