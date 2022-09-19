<?php 
session_start();
// session_destroy();
if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
    if (isset($_POST['Add_to_cart'])) 
    {
        if (isset($_SESSION['cart'])) 
        {
            $_mycart = array_column($_SESSION['cart'],'item_name');
            if(in_array($_POST['item_name'],$_mycart))
            {
                echo "<script>
                alert('item already added')
                window.location.href='../index.php';
                </script>";
            }
            else
            {

            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
            // print_r($_SESSION['cart']);
            echo "<script>
                alert('item  added')
                window.location.href='../index.php';
                </script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('item_name'=>$_POST['item_name'],'price'=>$_POST['price'],'quantity'=>1);
            // print_r($_SESSION['cart']);
            echo "<script>
                alert('item added')
                window.location.href='../index.php';
                </script>";
        }
    }    
    if (isset($_POST["remove_cart"])) {
        
        foreach($_SESSION['cart'] as $key => $value){
            if ($value['item_name']==$_POST['item_name']) {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']); 
                echo "
                <script>
                alert('Item Removed');
                window.location.href='../cart_total_item.php';
                </script>
                ";               
            }
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="DE1RANsTl1ulY7kNRUtP8ZGZy8o81POxfhZyCb5S">
    <meta name="base-url" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="shorticon" href="../images/logo-black.jpg">
    <title>Teentaj Saffron</title>
    <meta name="description" content="">
    <link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/jquery-ui.css" rel="stylesheet">
    <link href="../css/owl.carousel.min.css" rel="stylesheet">
    <link href="../css/intlTelInput.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="../css/flags.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/countrySelect.css">
    <!-- <link rel="canonical" href="#" /> -->
</head>

<body class="homepage">
    <div class="siteWrapper">
        <!-- header-top begins-->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css"
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
                                <p class="off20"> </p>
                                <div class="inr-wrp">
                                    <div class="form-group">
                                        <div id="currency_selector" data-selected-country="IN">
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
                                    <a href="../index.php" class="desktop"><img src="../images/Teentaj Logo-1.jpg"></a>
                                    <a href="../index.php" class="mobile768 respoinline"><img
                                            src="../images/Teentaj Logo-1.jpg"></a>
                                </div>
                                <div class="menu menu-mobile">
                                    <div class="desktop">
                                        <ul>

                                            <li class="content__item">
                                                <a href="../about_us.php" class="link link--metis ">ABOUT</a>
                                            </li>
                                            <li class="content__item">
                                                <a href="#" class="link link--metis openshop">SHOP</a>
                                            </li>
                                            <li class="content__item">
                                                <a href="../Recipes.php" class="link link--metis">RECIPES</a>
                                            </li>
                                            <li class="content__item">
                                                <a href="../blog.php" class="link link--metis">BLOG</a>
                                            </li>
                                            <li class="content__item">
                                                <a href="../contact.php" class="link link--metis">CONTACT US</a>
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
                                            <a class=" opt-link" href="../cart_total_item.php"><img
                                                    src="../images/basket-icon.svg">
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
                                                <div class="btn btn-secondary " id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <a href="../php/registration_from.php" class="#"><img
                                                            src="../images/profile-Icon.svg"></a>
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item"
                                                        href="../php/registration_from.php">Login</a>
                                                    <a class="dropdown-item" href="../php/Profile_setting.php">Profile
                                                        Setting</a>
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
            <!-- header ends-->
            <!-- megamenu -->
            <div class="megamenu">
                <ul>
                    <li>
                        <a href="#" class=" "><img src="../images/Artboard 5.png" width="204" height="200"></a>
                        <div class="content__item-new">
                            <a href="#" class="link link--metis">NEGIN SAFFRON</a>
                        </div>
                    </li>

                    <li>
                        <a href="#" class=" "><img src="../images/Artboard 4 (1).png" width="204" height="200"></a>
                        <div class="content__item-new">
                            <a href="#" class="link link--metis">SARGOL SAFFRON</a>
                        </div>
                    </li>

                    <li>
                        <a href="#" class=" "><img src="../images/Artboard 1.png" width="204" height="200"></a>
                        <div class="content__item-new">
                            <a href="#" class="link link--metis">PUSHAL SAFFRON</a>
                        </div>
                    </li>

                    <li>
                        <a href="#" class=" "><img src="../images/Artboard 6.png" width="204" height="200"></a>
                        <div class="content__item-new">
                            <a href="#" class="link link--metis">BUNCH SAFFRON</a>
                        </div>
                    </li>
                    <li>
                        <a href="../product.php" class="link link--metis">View all products</a>
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
                            <a href="../index.php"><img src="../images/Teentaj Logo-1.jpg"></a>
                        </div>
                        <div class="basket">
                            <a class="opt-link" data-route="#"><img src="../images/basket-icon.svg">
                                <div class="cart"><span class="redno count">0</span></div>
                            </a>
                        </div>
                    </div>
                    <div class="sidepanel-content">
                        <ul>
                            <li class="fadeoutleft">
                                <a href="../about_us.php">ABOUT</a>
                            </li>
                            <li class="fadeoutleft openshop">
                                <a href="#">SHOP</a>
                            </li>
                            <li class="fadeoutleft">
                                <a href="../Recipes.php">RECIPES</a>
                            </li>
                            <li class="fadeoutleft">
                                <a href="../blog.php">BLOG</a>
                            </li>
                            <li class="fadeoutleft">
                                <a href="../contact.php">CONTACT US</a>
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
                        <button><img src="../images/search-icon.svg"></button>
                    </div>
                    <div class="search-suggestion">
                        <ul>
                            <li><a href="../about_us.php">About Us</a></li>
                            <li><a href="../product.php">Products</a></li>
                            <li><a href="../contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="logo-sr">
                        <a href="../index.php"><img src="../images/Teentaj Logo-1.jpg"></a>
                    </div>
                </div>
            </div>
            <!-- searchbox -->
            <!-- profile login -->
            <div class="prolog">
                <div class="prolog-in">
                    <div class="gestwrp">
                        <div class="guestlft">
                            <img src="../images/profile-Icon.svg">
                            <p>Guest User</p>
                        </div>
                        <div class="guestclose">
                            <img src="../images/close-apply.svg">
                        </div>
                    </div>

                    <div class="logginn">

                        <span class="invalid-feedback" style="display: block;margin: 5px 5px;font-size: 16px;"
                            role="alert">
                            <strong id="error_message"></strong>
                        </span>


                        <form method="POST" id="login" action="#">
                            <input type="hidden" name="_token" value="OlZktzm0J07k7e9uaqZRHrHAz2rXoAyKQzk7SpRt">
                            <div class="form-group">
                                <label>E-mail Address</label>
                                <input id="email" type="text" class="form-control " name="email" value="" required=""
                                    autocomplete="email" autofocus="">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control " name="password" required=""
                                    autocomplete="current-password">

                            </div>

                            <div class="control-group">
                                <label class="control control-checkbox">
                                    Keep me sign In
                                    <input type="checkbox">
                                    <div class="control_indicator"></div>
                                </label>
                            </div>
                            <a href="#"> Forget Password </a> <br><br>
                            <button type="submit" class="button-red">Login</button>
                            <br>
                            <br>
                            <span><a href="#"><img src="../images/login-with-facebook (1).svg"
                                        style="width: 229px;height: auto;"> </a>
                                <a href="#"><img src="../images/login-with-google.svg"
                                        style="width: 229px;height: auto;"> </a>
                            </span>
                        </form>
                    </div>
                </div>

                <div class="dontacc">
                    <p>Don’t have an account yet?</p>
                    <a href="#">Create an account <span><img
                                src="../images/product-image/red-angle-right (1).png"></span></a>
                </div>
            </div>

            <div class="modal fade" id="myModal--apply">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title applytite">Apply Coupon</h4>
                            <button type="button" class="close" data-dismiss="modal"><img
                                    src="../images/close-apply.svg" width="25"></button>
                        </div>

                        <!-- Modal body -->
                        <div id="coupon_modal_body" class="modal-body">

                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="button-red">Apply Coupon</button>

                        </div>

                    </div>
                </div>
            </div>
            <!-- profile login -->

            <!-- Main Basket -->
            <div class="baskdetail">

            </div>
            <div class="overlay-blur"></div>
            <!-- Main Basket -->
            <!-- product detials -->
            <div class="sub-product-detials">
                <div class="container">



                    <div class="row">
                        <div class="col-lg-7 col-md-12 col-12">
                            <div id="sync1" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(-1312px, 0px, 0px); transition: all 0s ease 0s; width: 5251px;">
                                        <div class="owl-item cloned" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/product-image/Artboard 2_546.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/product-image/Artboard 3_5.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/72561648115161.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/72561648115161.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/5 Grams Saffron Pack.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/5 Grams Saffron Pack.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/60221648115161.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/60221648115161.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/5 Grams Saffron Pack.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/5 Grams Saffron Pack.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/60221648115161.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/60221648115161.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/60221648115161.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/60221648115161.png">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="owl-item cloned" style="width: 656.359px;">
                                            <div class="item">
                                                <a target="_blank" href="../images/product-image/Artboard 3_5.png"
                                                    data-lightbox="gallery">
                                                    <img id="img1" src="../images/product-image/Artboard 3_5.png">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                            aria-label="Previous">‹</span></button><button type="button"
                                        role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
                                </div>
                                <div class="owl-dots"><button role="button"
                                        class="owl-dot active"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button><button role="button"
                                        class="owl-dot"><span></span></button></div>
                            </div>
                            <div id="sync2" class="owl-carousel owl-theme owl-loaded owl-drag">
                                <div class="owl-stage-outer">
                                    <div class="owl-stage"
                                        style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 916px;">
                                        <div class="owl-item active current"
                                            style="width: 198.786px; margin-right: 30px;">
                                            <div class="item">
                                                <img src="../images/product-image/Artboard 1.png">
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 198.786px; margin-right: 30px;">
                                            <div class="item">
                                                <img src="../images/product-image/Artboard 3_5.png">
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 198.786px; margin-right: 30px;">
                                            <div class="item">
                                                <img src="../images/product-image/Artboard 3_5.png">
                                            </div>
                                        </div>
                                        <div class="owl-item active" style="width: 198.786px; margin-right: 30px;">
                                            <div class="item">
                                                <img src="../images/60221648115161.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-nav">
                                    <button type="button" role="presentation" class="owl-prev disabled">
                                        <span aria-label="Previous">‹</span>
                                    </button><button type="button" role="presentation" class="owl-next"><span
                                            aria-label="Next">›</span>
                                    </button>
                                </div>
                                <div class="owl-dots">
                                    <button role="button" class="owl-dot active">
                                        <span></span>
                                    </button>
                                    <button role="button" class="owl-dot">
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                            <div class="accord-container desktop">
                                <div id="accordion" class="accordion">
                                    <div class="card mb-0">
                                        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                                            <a class="card-title">
                                                Description
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                                            <p></p>
                                            <p>This beautiful 5-gram pack is the best-selling from our range online.
                                                Visitors to Kashmir and even people abroad prefer to buy this affordably
                                                priced 5-gram pack of the finest saffron available in India. This pack
                                                is value for money and perfect for the home chef. It has 5 grams in 1
                                                box/card. <b>MRP 1900 per Pack</b><br></p>
                                            <p></p>
                                        </div>
                                        <div class="card-header lastcoll collapsed" data-toggle="collapse"
                                            data-parent="#accordion" href="#collapseTwo">
                                            <a class="card-title">
                                                Storage
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                                            <p></p>
                                            <p><span style="color: rgb(25, 25, 25); font-family: ProdaSansThin;">Store
                                                    saffron in an airtight container in a cool, dark place for up to six
                                                    months for maximum flavour.</span><br></p>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-12">
                            <div class="sub-details-in">
                                <h4 class="playfair-title">5 Grams Saffron Pack</h4>
                                <div class="star-rating">
                                </div>
                                <p class="common-red">Saffron Strands</p>
                                <div class="qty-wrp">
                                    <h4>₹ 1900.00</h4>
                                    <span></span>
                                    <div class="qtnfix">
                                        <ul>
                                            <li>QTY</li>
                                            <li> <input type="button" value="-" class="qtyminus" field="quantity"
                                                    style="font-weight: bold;">
                                                <input type="text" name="quantity" id="product_detail_page_quantity"
                                                    value="1" class="qty" style="margin-bottom: 0px !important">
                                                <input type="button" value="+" class="qtyplus" field="quantity"
                                                    style="font-weight: bold;">
                                            </li>
                                        </ul>
                                        <p>The total saffron quantity in your cart needs
                                            to be at least 2 grams at the time of checkout.</p>

                                        <a href="#accordion2" class="black-arrow black-arrow-respo mobile480">More
                                            information <span><img src="images/arrow-black-right.png"></span></a>

                                        <a href="javascript:add_to_cart('30','#')" class="cart-btn"><button
                                                class="button-red">Add To Cart</button></a>
                                    </div>

                                    <div class="availablilty-wrp hide">
                                        <h5>Availablilty</h5>
                                        <ul>
                                            <li>
                                                <input type="text" placeholder="Enter your pincode">
                                                <span><a href="#">Check</a></span>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="availtag">
                                        <ul>
                                            <li><a href="javascript:void(0);"><span><img
                                                            src="../images/red-tag.png"></span>Buy 2-5 Gm Saffron &amp;
                                                    get 20% off </a></li>
                                            <li><a href="javascript:void(0);"><span><img
                                                            src="../images/red-tag.png"></span>Buy 6-14 Gm Saffron &amp;
                                                    get 25% off</a></li>
                                            <li><a href="javascript:void(0);"><span><img
                                                            src="../images/red-tag.png"></span>Buy 15 Gm and above
                                                    Saffron &amp; get 30% off</a></li>

                                        </ul>
                                    </div>

                                    <a href="#sync2" class="black-arrow desktop">More information <span><img
                                                src="../images/arrow-black-right.png"></span></a>
                                </div>


                                <div class="accord-container mobile480">
                                    <div id="accordion2" class="accordion">
                                        <div class="card mb-0">
                                            <div class="card-header collapsed" data-toggle="collapse"
                                                href="#collapsenewOne">
                                                <a class="card-title">
                                                    Description
                                                </a>
                                            </div>
                                            <div id="collapsenewOne" class="card-body collapse"
                                                data-parent="#accordion2">
                                                <p></p>
                                                <p>This beautiful 5-gram pack is the best-selling from our range online.
                                                    Visitors to Kashmir and even people abroad prefer to buy this
                                                    affordably priced 5-gram pack of the finest saffron available in
                                                    India. This pack is value for money and perfect for the home chef.
                                                    It has 5 grams in 1 box/card. <b>MRP 1900 per Pack</b><br></p>
                                                <p></p>
                                            </div>
                                            <div class="card-header lastcoll collapsed" data-toggle="collapse"
                                                data-parent="#accordion2" href="#collapsenewTwo">
                                                <a class="card-title">
                                                    Storage
                                                </a>
                                            </div>
                                            <div id="collapsenewTwo" class="card-body collapse"
                                                data-parent="#accordion2">
                                                <p></p>
                                                <p><span style="color: rgb(25, 25, 25); font-family: ProdaSansThin;">Store
                                                        saffron in an airtight container in a cool, dark place for up to
                                                        six months for maximum flavour.</span><br></p>
                                                <p></p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- product detials -->
            <!-- extract begins-->
            <section>
                <div class="extract">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="container">
                                <div class="col-sm-12">
                                    <h2 class="playfair-title hallmark-title extract-title">Here’s The Ideal Way of
                                        Using Saffron</h2>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="extarct-slider">

                                    <ul class="nav nav-tabs container" role="tablist">
                                        <li class="nav-item">
                                            <a id="myanchor" class="nav-link active" data-toggle="tab"
                                                href="#Powdered">Powdered Saffron</a>
                                        </li>
                                        <li class="nav-item">
                                            <a id="myanchor" class="nav-link" data-toggle="tab" href="#Saffron0">Saffron
                                                Strands</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content container-fluid">
                                        <!-- tab1 -->
                                        <div id="Powdered" class="tab-pane active">
                                            <div class="tabwapcontext">
                                                <div class="slider-main-change">
                                                    <div class="slidech wow fadeInUp" data-wow-duration="1s"
                                                        data-wow-delay="0.5s"
                                                        style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                                        <div class="slides slideswrop">
                                                            <img src="../images/Baby-Saffron-Powder-1 (1).gif"
                                                                class="desktop">
                                                            <img src="../images/Baby-Saffron-Powder-1 (1).gif"
                                                                class="mobile768">
                                                        </div>
                                                        <div class="slidech-content container">
                                                            <h5>Get The Most Out of Our Saffron.</h5>
                                                            <!-- <p>Move the slider to see how it works</p> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="extaractfoot wow fadeInUp container"
                                                    data-wow-duration="1.6s" data-wow-delay="0.5s"
                                                    style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: none;">

                                                    <p>Saffron Powder is plain saffron (whole threads) which is grinded
                                                        and made into powder form for easier use. It is perfect for the
                                                        fast paced life of a consumer, as it can be sprinkled, stirred
                                                        &amp; consumed on the go. The powdered saffron releases its
                                                        colour, aroma and flavor within seconds which makes it ideal for
                                                        instant use.</p>

                                                    <a href="product.html" class="button-red">See Our Products</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- tab1 -->

                                        <!-- tab2 -->
                                        <div id="Saffron0" class="tab-pane fade">
                                            <div class="tabwapcontext">
                                                <div class="slider-main-change">
                                                    <div class="slidech">
                                                        <div class="slides slideswrop">
                                                            <img src="images/Baby-Saffron-Powder-1 (1).gif"
                                                                class="desktop">
                                                            <img src="images/Baby-Saffron-Powder-1 (1).gif"
                                                                class="mobile768">
                                                        </div>
                                                        <div class="slidech-content container">
                                                            <h5>Get the most out of our saffron.</h5>
                                                            <!-- <p>Move the slider to see how it works</p> -->
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="extaractfoot container">

                                                    <p>A few minutes of immersion in water can help Saffron attain its
                                                        perfect form, where the aroma and colour blends in seamlessly.
                                                        Let the saffron strands ooze their natural color till the water
                                                        turns yellow. This will also bring out the fragrance which
                                                        should easily diffuse the air around you.
                                                    </p>
                                                    <p>Stir this mixture and after 20 mins add it to your recipe as it
                                                        continues to release aroma, flavor &amp; colour. We suggest you
                                                        use saffron in this way to reap the best results of our premium
                                                        saffron.</p>

                                                    <a href="product.html" class="button-red">See Our Products</a>
                                                </div>


                                            </div>
                                        </div>
                                        <!-- tab2 -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- extract ends-->
            <!-- Rooted in tradition begins -->
            
            <!-- Rooted in tradition ends-->
            <!-- customer-reviews begins-->
            <div class="customer-reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="customer-reviews-in">
                                <h2 class="playfair-title">Customer Reviews</h2>
                                <button class="map-point-sm writereviewmain" data-show=".darwin">
                                    <div class="content">
                                        <div class="centered-y">
                                            <p>No reviews to show</p>
                                            <div class="d-flexx">
                                                <div class="plusicon"><img src="../images/plus-noreview.svg">
                                                </div>
                                                <span class="claimed">Add your review</span>
                                            </div>
                                        </div>
                                    </div>
                                </button>

                                <div class="map-container hidereview">
                                    <div class="inner-basic division-details">
                                        <div class="writereview darwin hide">

                                            <div class="write-review d-flex">
                                                <a href="#wrtreview">Write a review</a>
                                                <span class="arrow-rgt"><img src="../images/arrow-rgt.png"></span>
                                                <span class="review_close" style="position: absolute;right: 0px;"><img
                                                        src="images/close-apply.svg"></span>
                                            </div>



                                            <br>
                                            <div id="wrtreview" class="expirence-box">

                                                <form method="POST" action="#" enctype="multipart/form-data">
                                                    <input type="hidden" name="_token"
                                                        value="OlZktzm0J07k7e9uaqZRHrHAz2rXoAyKQzk7SpRt">
                                                    <div class="expirence-box-in">
                                                        <textarea placeholder="Share your expreience with our product.."
                                                            name="description" required=""></textarea>
                                                        <div class="exp-rating">
                                                            <ul>
                                                                <div class="desktop">
                                                                    <li><span>Product Quality</span>
                                                                        <div id="rateYo2" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li><span>Shopping Experience</span>
                                                                        <div id="rateYo3" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li><span>Packaging &amp; Delivery</span>
                                                                        <div id="rateYo4" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                                <div class="mobile480">
                                                                    <li><span class="respobrk"><b>Rate your</b>
                                                                            <b>overall experience</b></span>
                                                                        <div id="rateYoresp1" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li><span>Product Quality</span>
                                                                        <div id="rateYoresp2" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li><span>Shopping Experience</span>
                                                                        <div id="rateYoresp3" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li><span>Packaging &amp; Delivery</span>
                                                                        <div id="rateYoresp4" class="jq-ry-container"
                                                                            style="width: 122px;">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </div>
                                                            </ul>
                                                        </div>
                                                        <div class="rating-up">
                                                            <div class="rating-line col-lg-7 col-md-12 col-12">
                                                                <div class="desktop">
                                                                    <div class="overexpo">
                                                                        <div id="rateYo1"
                                                                            style="margin: 10px auto; width: 122px;"
                                                                            class="jq-ry-container">
                                                                            <div class="jq-ry-group-wrapper">
                                                                                <div
                                                                                    class="jq-ry-normal-group jq-ry-group">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="gray"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="jq-ry-rated-group jq-ry-group"
                                                                                    style="width: 0%;">
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                    <!--?xml version="1.0" encoding="utf-8"?--><svg
                                                                                        version="1.1"
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        viewBox="0 12.705 512 486.59"
                                                                                        x="0px" y="0px"
                                                                                        xml:space="preserve"
                                                                                        width="18px" height="18px"
                                                                                        fill="#b6140e"
                                                                                        style="margin-left: 8px;">
                                                                                        <polygon
                                                                                            points="256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566 ">
                                                                                        </polygon>
                                                                                    </svg>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <p>Rate your overall experience</p>
                                                                    </div>
                                                                </div>

                                                                <div class="rating-file-upload">
                                                                    <div class="image-upload">
                                                                        <div class="file-select">
                                                                            <div class="file-select-button"
                                                                                id="fileName"><img
                                                                                    src="../images/upload-img.svg">
                                                                            </div>
                                                                            <div class="file-select-name claimedRight"
                                                                                id="noFile">
                                                                                <span class="claimedRight"><strong>Add
                                                                                        product image</strong></span>
                                                                            </div>
                                                                            <input type="file" name="attachment[]"
                                                                                id="chooseFile" multiple="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <input type="hidden" name="product_id" value="30">
                                                                <input type="hidden" name="overall_rating" value="1"
                                                                    id="overall_rating">
                                                                <input type="hidden" name="product_rating" value="1"
                                                                    id="product_rating">
                                                                <input type="hidden" name="shopping_rating" value="1"
                                                                    id="shopping_rating">
                                                                <input type="hidden" name="packing_rating" value="1"
                                                                    id="packing_rating">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="button-red">Submit Your Review</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- customer-reviews ends-->
            <!-- Products starts-->
            <section>
                <div class="product-main">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="products-title">
                                    <h2>You May Also Like</h2>
                                    <img src="images/divider.png">
                                    <a href="../product.php">VIEW ALL</a>
                                </div>
                            </div>
                            <div id="productslider" class="product-slider">
                                <div class="col-md-4 col-12 pad-0">
                                    <div class="item">
                                        <div class="productbox wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.5s"
                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                            <div class="productbox-img">
                                                <img src="../images/Artboard 9.png">
                                                <div class="productbox-hover fadeIn-bottom">
                                                    <a href="#">See More</a>
                                                    <a href="javascript:add_to_cart(28,'#')" class="cart-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <span class="heart hide">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div class="product-subtitle">
                                                <div class="product-subtitle-in">
                                                    <a href="#">
                                                        <h4>1g Saffron Gift Box- Blue</h4>
                                                    </a>
                                                    <span>Saffron</span>
                                                    <div class="star-rating">
                                                    </div>
                                                </div>
                                                <p class="amount">₹ 810.00</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 pad-0">
                                    <div class="item">
                                        <div class="productbox wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.5s"
                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                            <div class="productbox-img">
                                                <img src="../images/Artboard 10.png">
                                                <div class="productbox-hover fadeIn-bottom">
                                                    <a href="#">See More</a>
                                                    <a href="javascript:add_to_cart(27,'#')" class="cart-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <span class="heart hide">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div class="product-subtitle">
                                                <div class="product-subtitle-in">
                                                    <a href="#">
                                                        <h4>1g Saffron Gift Box- Red</h4>
                                                    </a>
                                                    <span>Saffron</span>
                                                    <div class="star-rating">
                                                    </div>
                                                </div>
                                                <p class="amount">₹ 810.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 pad-0">
                                    <div class="item">
                                        <div class="productbox wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.5s"
                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                            <div class="../productbox-img">
                                                <img src="images/Artboard 1.png">
                                                <div class="productbox-hover fadeIn-bottom">
                                                    <a href="#">See More</a>
                                                    <a href="javascript:add_to_cart(26,'#')" class="cart-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <span class="heart hide">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div class="product-subtitle">
                                                <div class="product-subtitle-in">
                                                    <a href="#">
                                                        <h4>1 Gram Powdered Saffron</h4>
                                                    </a>
                                                    <span>Saffron</span>
                                                    <div class="star-rating">
                                                    </div>
                                                </div>
                                                <p class="amount">₹ 390.00</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4 col-12 pad-0">
                                    <div class="item">
                                        <div class="productbox wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.5s"
                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                            <div class="productbox-img">
                                                <img src="../images/Artboard 6 (1).png">
                                                <div class="productbox-hover fadeIn-bottom">
                                                    <a href="#">See More</a>
                                                    <a href="javascript:add_to_cart(18,'#')" class="cart-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <span class="heart hide">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div class="product-subtitle">
                                                <div class="product-subtitle-in">
                                                    <a href="#">
                                                        <h4>1 Gm Premium Box</h4>
                                                    </a>
                                                    <span>Saffron</span>
                                                    <div class="star-rating">
                                                    </div>
                                                </div>
                                                <p class="amount">₹ 565.00</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4 col-12 pad-0">
                                    <div class="item">
                                        <div class="productbox wow fadeInUp" data-wow-duration="1s"
                                            data-wow-delay="0.5s"
                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                            <div class="productbox-img">
                                                <img src="../images/Artboard 5 (1).png">
                                                <div class="productbox-hover fadeIn-bottom">
                                                    <a href="#">See More</a>
                                                    <a href="javascript:add_to_cart(17,'#')" class="cart-btn">Add to
                                                        Cart</a>
                                                </div>
                                            </div>
                                            <span class="heart hide">
                                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                <i class="fa fa-heart" aria-hidden="true"></i>
                                            </span>
                                            <div class="product-subtitle">
                                                <div class="product-subtitle-in">
                                                    <a href="#">
                                                        <h4>Single Use Pack (50mg)</h4>
                                                    </a>
                                                    <span>Saffron</span>
                                                    <div class="star-rating">
                                                    </div>
                                                </div>
                                                <p class="amount">₹ 500.00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <section class="gallerynext recipe sub-product">


                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="products-title">
                                        <h2>Our Royal Recipes</h2>
                                        <img src="../images/divider.png">
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                    <div class="gallerybox">
                                        <img  src="../images/recipes/Kesar Soya Kheer IMage.png">
                                        <div class="product-subtitle-wrp">
                                            <div class="product-subtitle-in-new">
                                                <p>Kesar Soya Kheer</p>
                                                <a href="#">View Recipe</a>
                                            </div>
                                            <div class="min45"><span><img src="../images/recipes/watch.png"></span>49mins
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                    <div class="gallerybox">
                                        <img  src="../images/recipes/Phirni Image.png">
                                        <div class="product-subtitle-wrp">
                                            <div class="product-subtitle-in-new">
                                                <p>Phirni Kesar Di</p>
                                                <a href="../view recipes/phirni-kesar-di.html">View Recipe</a>
                                            </div>
                                            <div class="min45"><span><img src="../images/recipes/watch.png"></span>30mins
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                    <div class="gallerybox">
                                        <img  src="images/recipes/Saffron Halwa Image.png">
                                        <div class="product-subtitle-wrp">
                                            <div class="product-subtitle-in-new">
                                                <p>Saffron Halwa</p>
                                                <a href="../view recipes/saffron-halwa.html">View Recipe</a>
                                            </div>
                                            <div class="min45"><span><img src="../images/recipes/watch.png"></span>48mins
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>


                        </section>
                    </div>
                </div>
            </section>
            <!-- Products ends-->

            <!-- haritage begins-->
            <section>
                <div class="saffron-benefits haritage">
                    <div class="haritage-in">
                        <div class="haritage-saffron-img mobile768">
                            <img src="../images/saffron-benifit.png">
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="playfair-title hallmark-title">Saffron benefits:</h2>
                                    <p class="desktop">The answer to some of the wonders<br>
                                        of Ayurveda, lies in the richness of saffron.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="heritage-lft benefits-box-in wow fadeInUp" data-wow-duration="1s"
                                        data-wow-delay="0.5s"
                                        style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                        <ul>
                                            <li>
                                                <div class="benefits-box hericontent">
                                                    <img src="../images/saff-01.svg">
                                                    <h4>Boosts Immunity
                                                    </h4>
                                                    <p>Saffron is rich in carotenoids
                                                        and known to have antioxidants
                                                        that may improve health &amp; immunity.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="benefits-box hericontent">
                                                    <img src="../images/saff-02.svg">
                                                    <h4>Prevents Muscle Pain
                                                    </h4>
                                                    <p>With anti-inflammatory &amp; anti-
                                                        fungal properties, Saffronis known
                                                        to relieve pain in muscles and joints.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="benefits-box hericontent">
                                                    <img src="../images/usage/sleep.svg">
                                                    <h4>A Goodnight’s Sleep
                                                    </h4>
                                                    <p>Studies suggest that regular
                                                        saffron intake leads to an
                                                        overall improvement in sleep
                                                        quality and sleep latency.
                                                    </p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="benefits-box hericontent">
                                                    <img src="../images/usage/cancer.svg">
                                                    <h4>Anti-Cancer Benefits
                                                    </h4>
                                                    <p>Many scientists with their research
                                                        have shown that Saffron has a unique
                                                        ability to both slow and reverse cancer
                                                        growth.
                                                    </p>
                                                </div>
                                            </li>

                                        </ul>

                                        <div class="findout-more-benifits">
                                            <a href="Usage_Benefits.html" class="button-red">Find Out More Benefits</a>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="haritage-saffron-img desktop wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay="0.5s"
                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                            <img src="../images/saffron-benifit.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- haritage ends-->

            <!-- community begins-->
            <section>
                <div class="community">
                    <div class="community-in">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="join-comm">Join Our Community</h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="communityslide">
                                        <div id="community-slide" class="owl-carousel owl-theme owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage"
                                                    style="transform: translate3d(-1156px, 0px, 0px); transition: all 0s ease 0s; width: 4338px;">
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.6s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-04.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.8s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.8s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-01.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-02.png"></div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="2.2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 2.2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-03.png">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="owl-item active"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-01.png"></div>
                                                    </div> -->
                                                    <!-- <div class="owl-item active"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-04.png">
                                                        </div>
                                                    </div> -->
                                                    <!-- <div class="owl-item active"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.4s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-03.png">
                                                        </div>
                                                    </div> -->
                                                    <div class="owl-item active"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.6s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-04.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.8s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.8s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-01.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item" style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-02.png"></div>
                                                    </div>
                                                    <div class="owl-item" style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="2.2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 2.2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-03.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-01.png"></div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.2s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-02.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.4s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.4s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-02.png">
                                                        </div>
                                                    </div>
                                                    <div class="owl-item cloned"
                                                        style="width: 279.16px; margin-right: 10px;">
                                                        <div class="item wow fadeInUp" data-wow-duration="1.6s"
                                                            data-wow-delay="0.5s"
                                                            style="visibility: hidden; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: none;">
                                                            <img src="../images/insta-feed-04.png">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="owl-nav"><button type="button" role="presentation"
                                                    class="owl-prev"><span
                                                        aria-label="Previous">‹</span></button><button type="button"
                                                    role="presentation" class="owl-next"><span
                                                        aria-label="Next">›</span></button></div>
                                            <div class="owl-dots"><button role="button"
                                                    class="owl-dot active"><span></span></button><button role="button"
                                                    class="owl-dot"><span></span></button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- community ends-->
            <!-- exclusive offer begins-->
            <section>
                <div class="exclusive">
                    <div class="exclusive-in">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                    <h2 class="exclusive-title">Stay updated about our exclusive offers &amp; discounts.
                                    </h2>
                                    <!-- <p>Email list sign-up form</p> -->
                                    <div class="newsletter">
                                        <input type="text" placeholder="Enter your email address">
                                    </div>
                                    <button class="signup button-red">Sign Up</button>
                                </div>
                            </div>
                        </div>

                        <div class="exclusive-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                            <img src="../images/newsletter-detail (1).png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- exclusive offer ends-->
            <!-- giftbox begins-->


            <!-- community begins-->
            <section>
                <div class="community">
                    <div class="community-in">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="join-comm">Join Our Community</h2>
                                </div>
                                <div class="col-sm-12">
                                    <div class="communityslide">
                                        <div id="community-slide" class="owl-carousel owl-theme">
                                            <div class="item wow fadeInUp animated" data-wow-duration="1s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-01.png"></div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="1.2s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 1.2s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-02.png">
                                            </div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="1.4s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 1.4s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-03.png">
                                            </div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="1.6s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-04.png">
                                            </div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="1.8s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 1.8s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-01.png">
                                            </div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="2s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 2s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-02.png"></div>
                                            <div class="item wow fadeInUp animated" data-wow-duration="2.2s"
                                                data-wow-delay="0.5s"
                                                style="visibility: visible; animation-duration: 2.2s; animation-delay: 0.5s; animation-name: fadeInUp;">
                                                <img src="../images/insta-feed-03.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- community ends-->
            <!-- exclusive offer begins-->
            <section>
                <div class="exclusive">
                    <div class="exclusive-in">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                                    style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                                    <h2 class="exclusive-title">Stay updated about our exclusive offers &amp; discounts.
                                    </h2>
                                    <!-- <p>Sign up</p> -->

                                    <div class="newsletter">
                                        <input type="text" placeholder="Enter your email address">
                                    </div>

                                    <button class="signup button-red">Sign Up</button>
                                </div>
                            </div>
                        </div>

                        <div class="exclusive-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"
                            style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
                            <img src="../images/newsletter-detail (1).png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- exclusive offer ends-->



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
                                        <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es
                                            simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la
                                            literatura del Latin, que data del año 45 antes de Cristo. </p>
                                        <p>Al contrario del pensamiento popular, el texto de Lorem Ipsum no es
                                            simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la
                                            literatura del Latin, que data del año 45 antes de Cristo.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6 col-sm-6 col-6 item02">
                                <div class="footbox footbox-list foot2">
                                    <ul>
                                        <li class="content__item"><a href="../about_us.php"
                                                class="link link--metis">About</a></li>
                                        <li class="content__item"><a href="../Terms_conditions.php"
                                                class="link link--metis">Terms &amp; Conditions</a></li>
                                        <li class="content__item"><a href="../contact.php" class="link link--metis">Contact
                                                Us</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 item03">
                                <div class="footbox footbox-list foot3">
                                    <ul>
                                        <li class="content__item"><a href="../index.php" class="link link--metis">Home</a>
                                        </li>
                                        <li class="content__item"><a href="../Usage_Benefits.php"
                                                class="link link--metis">Usage &amp; Benefits</a></li>
                                        <li class="content__item"><a href="../privacy-policy.php"
                                                class="link link--metis">Privacy Policy</a></li>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6 item04">
                                <div class="footbox foot4">
                                    <div class="foot4repo1">
                                        <div class="foottitlerspo">
                                            <h4 class="content__item">
                                                <a href="../contact.php" class="link link--metis">Contact Us</a>
                                            </h4>
                                        </div>
                                        <div class="social-ico">
                                            <ul>
                                                <li>
                                                    <a href="https://www.instagram.com/teentajspices/"><svg
                                                            version="1.1" id="Layer_1" x="0px" y="0px"
                                                            viewBox="0 0 40 40" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <a href="https://www.instagram.com/teentajspices/"><img
                                                                            src="../images/instagram-11.svg" alt=""></a>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.facebook.com/teentajspices">
                                                        <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                                            viewBox="0 0 40 40" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <a href="https://www.facebook.com/teentajspices"><img
                                                                            src="../images/facebook-3-128x128.png"
                                                                            alt=""></a>
                                                                </g>
                                                            </g>
                                                            <g>

                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/teentaj">
                                                        <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                                            viewBox="0 0 40 40" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <a href="https://twitter.com/teentaj"><img
                                                                            src="../images/twitter-30 (1).png" alt=""></a>

                                                                </g>
                                                            </g>

                                                        </svg>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCvzgvcEAmDSrov6X98zGW6A">
                                                        <svg version="1.1" id="Layer_1" x="0px" y="0px"
                                                            viewBox="0 0 40 40" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <a
                                                                        href="https://www.youtube.com/channel/UCvzgvcEAmDSrov6X98zGW6A"><img
                                                                            src="../images/youtube-30.png" alt=""></a>
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
                                                <li class="contactwidht"><a href="#"><img
                                                            src="../images/foot-letter.svg"></a>
                                                </li>
                                                <li class="content__item">
                                                    <a href="mailto:Teentajspices@gmail.com"
                                                        class="link link--metis">Teentajspices@gmail.com</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="call-us cont">
                                            <ul>
                                                <li class="contactwidht"><a href="#"><img
                                                            src="../images/foot-mobile.svg"></a>
                                                </li>
                                                <li class="content__item">
                                                    <a href="Tel:+44 744 871 5444" class="link link--metis">+44 744 871
                                                        5444</a>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script src="../js/owl.carousel.js"></script>
        <script src="../js/ryto.js"></script>
        <script src="../js/custom.js"></script>
        <script src="../js/jquery-seqencer.js"></script>
        <script src="../js/rellax.min.js"></script>
        <script src="../js/currency-country.js"></script>
        <script src="../js/countrySelect.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.18/js/intlTelInput.min.js.js"></script>
        <script src="../js/utils.js"></script>
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
        <script src="text/JavaScript">

        </script>

</body>

</html>