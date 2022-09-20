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
    // if(isset($_POST['mod_quantity'])){
    //     foreach($_SESSION['cart'] as $key => $value){
    //         if ($value['item_name']==$_POST['item_name'])
    //          {

    //             $_SESSION['cart'][$key]['quantity']=$_POST['mod_quantity'];
                 
    //             echo "
    //             <script>
                
    //             window.location.href='../cart_total_item.php';
    //             </script>
    //             ";               
    //         }
    //     }
    // }
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
            <section class="">
	<div class="product-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="products-title">
						<h2>Saffron Category</h2>
						<img src="../images/divider.png">
						<a href="../product.php">VIEW ALL</a>
					</div>
				</div>
				<div id="productslider" class="product-slider">
						<div class="col-md-4 col-12 pad-0">
                      <form action="../php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
									<div class="productbox-img">
										<img src="../images/1 Gm Box Angle 1.png">
									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="seemore.php" class="cart-btn-right"><button>See More</button></a>
										<a class="cart-btn-left"><button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="1 Gm Box Angle 1">
									<input type="hidden" name="price" value="500.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>1 Gm Box Angle 1</h4></a>
											<span>Saffron</span>
											<div class="star-rating">
                     					 </div>
										</div>
										<p class="amount">₹ 500.00</p>
									</div>
								</div>
							</div>
            </form>
						</div>
						<div class="col-md-4 col-12 pad-0">
              <form action="../php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
									<div class="productbox-img">
										<img src="../images/2 Gm Box Angle 1.png">
									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="#" class="cart-btn-right"> <button>See More</button></a>
										<a class="cart-btn-left"> <button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="2 Gm Box Angle 1">
									<input type="hidden" name="price" value="390.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>2 Gm Box Angle 1</h4></a>
											<span>Saffron</span>
											<div class="star-rating">
                    					   </div>
										</div>
										<p class="amount">₹ 390.00</p>
									</div>
								</div>
							</div>
            </form>
						</div>
						<div class="col-md-4 col-12 pad-0">
            <form action="../php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
									<div class="productbox-img">
										<img src="../images/5 Gm Box Angle 1.png">

									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="#" class="cart-btn-right"> <button>See More</button></a>
										<a href="#" class="cart-btn-left"> <button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="5 Gm Box Angle 1">
									<input type="hidden" name="price" value="565.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>5 Gm Box Angle 1</h4></a>
											<span>Saffron</span>
											<div class="star-rating">
                    				 </div>
										</div>
										<p class="amount">₹ 565.00</p>
									</div>
								</div>
							</div>
						</form></div>
          
					</div>

			</div>



			<div class="row">
				<div class="col-sm-12">
					<div class="products-title">
						<h2>Shop By Category</h2>
						<img src="../images/divider.png">
						<a href="../product.php">VIEW ALL</a>
					</div>
				</div>

				<div id="productslider" class="product-slider">



								<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
									<div class="productbox-img">
										<img src="../images/5 Grams Saffron Pack.png">
									</div>
									<div class="border-btn mt-4">
										<a href="../product.php"> <button>Our Category</button></a>
									</div>

								</div>
							</div>
						</div>
						<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
									<div class="productbox-img">
										<img src="../images/Retail Use Packs.png">
									</div>
									<div class="product-subtitle">
										<a href="../product.php"><button class="border-btn">Retail Packs</button></a>
									</div>

								</div>
							</div>
						</div>



								<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: hidden; animation-duration: 1s; animation-delay: 0.5s; animation-name: none;">
									<div class="productbox-img">
										<img src="../images/BS-1.jpg">
									</div>
									<div class="product-subtitle">
										<a href="../product.php"><button class="border-btn">Premium packs</button></a>
									</div>

								</div>
							</div>
						</div>

					</div>
			</div>


		</div>
	</div>
</section>
<div class="container-fluid">
					<div class="row">
						<div class="container">
							<div class="col-sm-12">
								<h2 class="playfair-title hallmark-title extract-title">Here’s The Ideal Way of Using Saffron</h2>
							</div>
						</div>


						<div class="col-sm-12">
							<div class="extarct-slider">

								<ul class="nav nav-tabs container" role="tablist">
									<li class="nav-item">
										<a id="myanchor" class="nav-link active" data-toggle="tab" href="#Powdered">Powdered Saffron</a>
									</li>
									<li class="nav-item">
										<a id="myanchor" class="nav-link" data-toggle="tab" href="#Saffron0">Saffron Strands</a>
									</li>
								</ul>

								<div class="tab-content container-fluid">
									<!-- tab1 -->
									<div id="Powdered" class="tab-pane active">
										<div class="tabwapcontext">
											<div class="slider-main-change">
												<div class="slidech wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
													<div class="slides slideswrop">
														<img src="../images/Baby-Saffron-Powder-1 (1).gif" class="desktop">
														<img src="../images/Baby-Saffron-Powder-1 (1).gif" class="mobile768">
													</div>
													<div class="slidech-content container">
														<h5>Get The Most Out of Our Saffron.</h5>
														<!-- <p>Move the slider to see how it works</p> -->
													</div>
												</div>
											</div>

											<div class="extaractfoot wow fadeInUp container" data-wow-duration="1.6s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1.6s; animation-delay: 0.5s; animation-name: fadeInUp;">

												<p>Saffron Powder is plain saffron (whole threads) which is grinded and made into powder form for easier use. It is perfect for the fast paced life of a consumer, as it can be sprinkled, stirred &amp; consumed on the go. The powdered saffron releases its colour, aroma and flavor within seconds which makes it ideal for instant use.</p>

												<a href="#"><button>Our Products</button></a>
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
																<img src="../images/Baby-Saffron-strands.gif" class="desktop">
																<img src="../images/Baby-Saffron-strands.gif" class="mobile768">
															</div>
															<div class="slidech-content container">
																<h5>Get the most out of our saffron.</h5>
																<!-- <p>Move the slider to see how it works</p> -->
															</div>
														</div>
													</div>

													<div class="extaractfoot container">

												<p>A few minutes of immersion in water can help Saffron attain its perfect form, where the aroma and colour blends in seamlessly. Let the saffron strands ooze their natural color till the water turns yellow. This will also bring out the fragrance which should easily diffuse the air around you.
													</p>
													<p>Stir this mixture and after 20 mins add it to your recipe as it continues to release aroma, flavor &amp; colour. We suggest you use saffron in this way to reap the best results of our premium saffron.</p>

												<a href="product.php"><button>See Our Products</button></a>
											</div>
										</div>
									</div>
									<!-- tab2 -->
								</div>
							</div>
						</div>

					</div>
				</div>
                <section>
	<div class="haritage">
		<div class="haritage-in">
			<div class="haritage-saffron-img mobile768">
				<img src="../images/right-saffron.png">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="playfair-title hallmark-title">50 Years of<br>
							Heritage &amp; Trust</h2>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="heritage-lft wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
							<ul>
								<li>
									<div class="heriimg">
										<img src="../images/heri1.svg">
									</div>
									<div class="hericontent">
										<h4>A timeless tradition</h4>
										<p>Our dedication towards procuring the finest saffron transcends six generations.</p>
									</div>
								</li>
								<li>
									<div class="heriimg">
										<img src="../images/heri2.svg">
									</div>
									<div class="hericontent">
										<h4>Your invaluable support </h4>
										<p>Fifty years of such a fulfilling experience because<br> of your trust in us.</p>
									</div>
								</li>
								<li>
									<div class="heriimg">
										<img src="../images/heri3.svg">
									</div>
									<div class="hericontent">
										<h4>A legacy of quality &amp; consistency</h4>
										<p>We understand that doing honest service <br> takes commitment and heart.</p>
									</div>
								</li>
							</ul>
							<a href="../about_us.php" class="common-red">Know more about us<span><img src="../images/arrow-black-right.svg"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="haritage-saffron-img desktop wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
				<img src="../images/right-saffron.png">
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