<?php
session_start();
include 'all php/header.php';?>
    <!-- profile login -->
    <!-- <div class="prolog">
        <div class="prolog-in">
            <div class="gestwrp">
                <div class="guestlft">
                    <img src="images/guest-photo.png">
                    <p>Guest User</p>
                </div>
                <div class="guestclose">
                    <img src="images/log-close.png">
                </div>
            </div>

            <div class="logginn">

                <span class="invalid-feedback" style="display: block;margin: 5px 5px;font-size: 16px;"
                    role="alert">
                    <strong id="error_message"></strong>
                </span>


                <form method="POST" id="login" action="#">
                    <input type="hidden" name="_token" value="DE1RANsTl1ulY7kNRUtP8ZGZy8o81POxfhZyCb5S">                    <div class="form-group">
                        <label>E-mail Address</label>
                        <input id="email" type="text"
                            class="form-control " name="email"
                            value="" required autocomplete="email" autofocus>
                                            </div>

                    <div class="form-group">
                        <label>Password</label>
                        <input id="password" type="password"
                            class="form-control " name="password" required
                            autocomplete="current-password">

                                            </div>

                    <div class="control-group">
                        <label class="control control-checkbox">
                            Keep me sign In
                            <input type="checkbox" />
                            <div class="control_indicator"></div>
                        </label>
                    </div>
                    <a href="#"> Forget Password </a> <br><br>
                    <button type="submit" class="button-red">Login</button>
                    <br>
                    <br>
                    <span><a href="#"><img
                                src="images/facebook.svg"
                                style="width: 229px;height: auto;" /> </a>
                        <a href="#"><img
                                src="images/google.svg"
                                style="width: 229px;height: auto;" /> </a>
                    </span>
                </form>
            </div>
        </div>

        <div class="dontacc">
            <p>Don’t have an account yet?</p>
            <a href="#">Create an account <span><img
                        src="#"></span></a>
        </div>
    </div> -->

    <div class="modal fade" id="myModal--apply">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title applytite">Apply Coupon</h4>
                    <button type="button" class="close" data-dismiss="modal"><img
                            src="images/close-apply.svg" width="25"></button>


                </div>

                <!-- Modal body -->
                <div id="coupon_modal_body" class="modal-body">

                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="button-red"
                        >Apply Coupon</button>

                </div>

            </div>
        </div>
    </div>
    <!-- profile login -->

    <!-- Main Basket -->
    <!-- <div class="baskdetail">

    </div> -->
        <!-- <div class="overlay-blur"></div> -->



<!-- Main Basket -->
<!-- main-banner begins-->




		<!-- main-banner begins-->
		<div class="main-banner">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<div class="banner-responsivecover">
						<div id="main-banner-slide-one" class="owl-carousel owl-theme">
							<div class="item">
								<div class="banner-content">
									<h2>Jumbo Packs of Goodness</h2>
									<a href="product.html" class="button-red shopnow wow fadeInUp" data-wow-duration="1.2s"
										data-wow-delay="0.5s">Shop Now</a>
								</div>
							</div>
							<div class="item">
								<div class="banner-content">
									<h2>Purest Handpicked Saffron</h2>
									<a href="product.html" class="button-red shopnow wow fadeInUp" data-wow-duration="1.2s"
										data-wow-delay="0.5s">Shop Now</a>
								</div>
							</div>
							<div class="item">
							  <div class="banner-content">
								<h2>A perfect gift</h2>
								<a href="product.html" class="button-red shopnow wow fadeInUp" data-wow-duration="1.2s"
									data-wow-delay="0.5s">Shop Now</a>
							</div>
						  </div>
						  </div>
						</div>
					</div>
					<div class="col-lg-8 col-md-12 pad-0">
						<div id="main-banner-slide" class="owl-carousel owl-theme">
							<div class="item">
								<div class="desktop768">
									<img src="images/x1 (1).png">
								</div>
								<div class="banner-responsivecover">
									<div class="mobile-banner">
										<img src="images/x1 (1).png">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="desktop768">
									<img src="images/x1 (2).png">
								</div>
								<div class="banner-responsivecover">
									<div class="mobile-banner">
										<img src="images/x1 (2).png">
									</div>
								</div>
							</div>
							<div class="item">
								<div class="desktop768">
									<img src="images/x1 (3).png">
								</div>
								<div class="banner-responsivecover">
								<div class="mobile-banner">
									<img src="images/x1 (3).png">
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main-banner ends-->


<!-- main-banner ends-->
<!-- retail-clients begins-->
<div class="retail-cliens">
	<div class="container">
		<div class="row">
			<div class="col-sm-2 pad-0 d-flex justify-content-center flex-column">
				<div class="retail-content">
					<h2>Trusted By</h2>
				</div>
			</div>
			<div class="col-sm-10 pad-0">
				<div id="retailslide" class="owl-carousel owl-theme">
                    					    <div class="item"><img src="images/r_ico_1.jpg"></div>
                    					    <div class="item"><img src="images/r_ico_2.jpg"></div>
                    					    <div class="item"><img src="images/r_ico_3.jpg"></div>
                    					    <div class="item"><img src="images/r_ico_4.jpg"></div>
                    					    <div class="item"><img src="images/r_ico_5.jpg"></div>
                    					    <div class="item"><img src="images/r_ico_6.jpg"></div>
                    				</div>
			</div>
		</div>
	</div>
</div>
<!-- retail-clients ends-->
<!-- retail-review begins-->
<section>
	<div class="retail-review">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-duration="1s"
					data-wow-delay="0.5s">
					<div class="retail-review-box">
						<img src="images/new_1.svg">
						<h4>100% Pure and<br>
							Handpicked Saffron</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-duration="1.2s"
					data-wow-delay="0.5s">
					<div class="retail-review-box">
						<img src="images/new_2.svg">
						<h4>Dedicated To The<br>
							Health of India!</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-duration="1.4s"
					data-wow-delay="0.5s">
					<div class="retail-review-box">
						<img src="images/new_3.svg">
						<h4>Legacy of More<br>
							Than 50 Years</h4>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-6 wow fadeInUp" data-wow-duration="1.6s"
					data-wow-delay="0.5s">
					<div class="retail-review-box">
						<img src="images/new_4.svg">
						<h4>Domestic &<br>
							International Shipping</h4>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
<!-- retail-review ends-->
<!-- Products begins-->

<section>
	<div class="product-main">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="products-title">
						<h2>Best Sellers</h2>
						<img src="images/divider.png">
						<a href="product.php">VIEW ALL</a>
					</div>
				</div>
				<div id="productslider" class="owl-carousel product-slider">
						<div class="col-md-4 col-12 pad-0">
                      <form action="php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/Artboard 5.png">
									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="seemore.php" class="cart-btn-right" class="btn"><button>See More</button></a>
										<a  class="cart-btn-left"><button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="single use pack(50mg)">
									<input type="hidden" name="price" value="500.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>Single Use Pack (50mg)</h4></a>
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
              <form action="php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/Artboard 4 (1).png">
									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="seemore.php" class="cart-btn-right"> <button>See More</button></a>
										<a  class="cart-btn-left"> <button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="1gram saffron pack">
									<input type="hidden" name="price" value="390.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>1 Gram Saffron Pack</h4></a>
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
            <form action="php/manage_add_to_cart.php" method="POST">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/Artboard 6.png">

									</div>
									<span class="heart hide">
										<i class="fa fa-heart-o" aria-hidden="true"></i>
										<i class="fa fa-heart" aria-hidden="true"></i>
									</span>
									<div class="border-btn mt-4 __web-inspector-hide-shortcut__">
										<a href="seemore.php" class="cart-btn-right"> <button>See More</button></a>
										<a href="#" class="cart-btn-left"> <button type="submit" name="Add_to_cart">Add to cart</button></a>
									</div>
									<input type="hidden" name="item_name" value="1gm Premium Box">
									<input type="hidden" name="price" value="565.00">
									<div class="product-subtitle">
										<div class="product-subtitle-in">
											<a href="#"><h4>1 Gm Premium Box</h4></a>
											<span>Saffron</span>
											<div class="star-rating">
                    				 </div>
										</div>
										<p class="amount">₹ 565.00</p>
									</div>
								</div>
							</div>
						</div>
          </form>
					</div>

			</div>



			<div class="row">
				<div class="col-sm-12">
					<div class="products-title">
						<h2>Shop By Category</h2>
						<img src="images/divider.png">
						<a href="product.php">VIEW ALL</a>
					</div>
				</div>

				<div id="productslider" class="owl-carousel product-slider">



								<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/5 Grams Saffron Pack.png">
									</div>
									<div class="border-btn mt-4">
										<a href="product.php"> <button>Best Seller</button></a>
									</div>

								</div>
							</div>
						</div>



								<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/Retail Use Packs.png">
									</div>
									<div class="product-subtitle">
										<a href="product.php"><button class="border-btn">Retail Packs</button></a>
									</div>

								</div>
							</div>
						</div>



								<div class="col-md-4 col-12 pad-0">
							<div class="item">
								<div class="productbox wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="productbox-img">
										<img src="images/BS-1.jpg">
									</div>
									<div class="product-subtitle">
										<a href="product.php"><button class="border-btn">Premium packs</button></a>
									</div>

								</div>
							</div>
						</div>

					</div>
			</div>


		</div>
	</div>
</section>
<!-- Products ends-->
<!-- purity begins-->
<section>
	<div class="purity-main">
		<div class="purity-in">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-12">
						<div class="purity-lft">
							<h3>Teentaj Saffron</h3>
							<h4>An Epitome of Perfection </h4>
							<a href="#">See how we curate our saffron <span><img
										src="images/arrow-black-right.png"></span></a>
						</div>
					</div>
				</div>
			</div>

			<div class="purity-rgt">
				<div class="purity-right-in" data-toggle="modal" data-target="#myModal-video">
					<div class="purityimg1 videowrap rellax" data-rellax-speed="3">
						<img src="images/vdo_1.png">
						<!-- <video poster="images/vdo_1.png" controls>
							<source src="videos/BABY_SAFFRON_VIDEO_AD.mp4" type="video/mp4">
							<source src="movie.ogg" type="video/ogg">
						</video> -->
					</div>
					<div class="purityimg2">
						<img src="images/vdo_2.png">
					</div>
				</div>
			</div>

			<!-- The Modal -->
			<div class="modal video-popup fade" id="myModal-video">
				<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
					<!-- <h4 class="modal-title">Modal Heading</h4> -->
					<button type="button" class="close" data-dismiss="modal"><img src="images/log-close.png"></button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
							<video width="100%" height="100%" controls>
									<source src="images/Video For website Normal Version.mp4" type="video/mp4">
								<source src="movie.ogg" type="video/ogg">
							</video>
					</div>

					<!-- Modal footer -->
					<!-- <div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div> -->

				</div>
				</div>
			</div>

		</div>
	</div>
</section>
<!-- purity ends-->
<!-- hallmarks begins-->
<section>
	<div class="hallmarks">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h2 class="playfair-title hallmark-title hallmarkspc">The Essence of Purity</h2>
				</div>
			</div>
			<div class="hallmarks-in">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="hallmark-wrap hallmark-left">
							<h4>Regular Saffron
								<span>(Impurities & Flower Waste)</span></h4>

							<div class="disheswrp">
								<ul>
									<li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
										<img src="images/dish_1.png">
										<p>Patti</p>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
										<img src="images/dish_2.png">
										<p>Thin Style</p>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.5s">
										<img src="images/dish_3.png">
										<p>Thick Style</p>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1.6s" data-wow-delay="0.5s">
										<img src="images/dish_4.png">
										<p>Floral Waste</p>
									</li>
									<li class="wow fadeInUp" data-wow-duration="1.8s" data-wow-delay="0.5s">
										<img src="images/dish_5.png">
										<p>Pollen</p>
									</li>
									<li class="wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
										<img src="images/dish_6.png">
										<p>Dirt</p>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="hallmark-wrap hallmark-rgt">
							<div class="arrowdnimg wow fadeInDown" data-wow-duration="2s" data-wow-delay="0.5s">
								<img src="images/arrow-key.png">
							</div>
							<h4 class="common-red">Teentaj Brand Saffron
								<span>(Premium Saffron)</span></h4>

							<div class="main-dish-respowrp">
								<div class="main-dish wow fadeInUp" data-wow-duration="1s"
									data-wow-delay="0.5s">
									<img src="images/main_dish.png">
								</div>
								<p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">100% Pure,<br> Premium Grade 1 Saffron
								</p>
							</div>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="border-btn">
					<a href="product.php" ><button>Shop Now</button></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- hallmarks ends-->
		<!-- extract begins-->
		<section>
			<div class="extract">
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
												<div class="slidech wow fadeInUp" data-wow-duration="1s"
													data-wow-delay="0.5s">
													<div class="slides slideswrop">
														<img src="images/Baby-Saffron-Powder-1 (1).gif" class="desktop">
														<img src="images/Baby-Saffron-Powder-1 (1).gif" class="mobile768">
													</div>
													<div class="slidech-content container">
														<h5>Get The Most Out of Our Saffron.</h5>
														<!-- <p>Move the slider to see how it works</p> -->
													</div>
												</div>
											</div>

											<!-- <div class="extract-progressbar wow fadeInUp" data-wow-duration="1.4s"
												data-wow-delay="0.5s">
												<div class="slider">
													<a href="#slide-1">0s</a>
													<a href="#slide-2">10s</a>
													<a href="#slide-3">20s</a>
													<a href="#slide-4">30s</a>
													<a href="#slide-5">40s</a>
													<a href="#slide-6">50s</a>
													<a href="#slide-7">1min</a>
													<a href="#slide-8"><b>2min</b></a>
												</div>


											</div> -->



											<div class="extaractfoot wow fadeInUp container" data-wow-duration="1.6s"
												data-wow-delay="0.5s">

												<p>Saffron Powder is plain saffron (whole threads) which is grinded and made into powder form for easier use. It is perfect for the fast paced life of a consumer, as it can be sprinkled, stirred & consumed on the go. The powdered saffron releases its colour, aroma and flavor within seconds which makes it ideal for instant use.</p>

												<a href="#" ><button>Our Products</button></a>
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
																<img src="images/Baby-Saffron-strands.gif" class="desktop">
																<img src="images/Baby-Saffron-strands.gif" class="mobile768">
															</div>
															<div class="slidech-content container">
																<h5>Get the most out of our saffron.</h5>
																<!-- <p>Move the slider to see how it works</p> -->
															</div>
														</div>
													</div>

													<div class="extaractfoot container" >

												<p>A few minutes of immersion in water can help Saffron attain its perfect form, where the aroma and colour blends in seamlessly. Let the saffron strands ooze their natural color till the water turns yellow. This will also bring out the fragrance which should easily diffuse the air around you.
													</p>
													<p>Stir this mixture and after 20 mins add it to your recipe as it continues to release aroma, flavor & colour. We suggest you use saffron in this way to reap the best results of our premium saffron.</p>

												<a href="product.php" ><button>See Our Products</button></a>
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


<!-- haritage begins-->
<section>
	<div class="haritage">
		<div class="haritage-in">
			<div class="haritage-saffron-img mobile768">
				<img src="images/right-saffron.png">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="playfair-title hallmark-title">50 Years of<br>
							Heritage & Trust</h2>

					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="heritage-lft wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
							<ul>
								<li>
									<div class="heriimg">
										<img src="images/heri1.svg">
									</div>
									<div class="hericontent">
										<h4>A timeless tradition</h4>
										<p>Our dedication towards procuring the finest saffron transcends six generations.</p>
									</div>
								</li>
								<li>
									<div class="heriimg">
										<img src="images/heri2.svg">
									</div>
									<div class="hericontent">
										<h4>Your invaluable support </h4>
										<p>Fifty years of such a fulfilling experience because<br> of your trust in us.</p>
									</div>
								</li>
								<li>
									<div class="heriimg">
										<img src="images/heri3.svg">
									</div>
									<div class="hericontent">
										<h4>A legacy of quality & consistency</h4>
										<p>We understand that doing honest service <br> takes commitment and heart.</p>
									</div>
								</li>
							</ul>

							<a href="about_us.php" class="common-red">Know more about us<span><img
										src="images/arrow-black-right.svg"></span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="haritage-saffron-img desktop wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
				<img src="images/right-saffron.png">
			</div>
		</div>
	</div>
</section>
<!-- haritage ends-->


<!-- testimonial begins-->
<section>
	<div class="testimonial">
		<div class="testimonial-in">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="testi-lft wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
							<div class="red-ratting">
								<img src="images/stars-red (1).png">
							</div>
							<h2 class="playfair-title hallmark-title woct-title">What Our<br>
								Customers Think!</h2>

							<p class="widht70">archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum..</p>

							<!-- mobile -->
							<div class="mobile768">
								<div id="testimonial-slider" class="owl-carousel testimonial-slider  owl-theme">

									<div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Rohini</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-b2a94cd1-7fff-cc8f-e54e-d6153920aef0"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> and she loves it!</span></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Bijiendra Sahu</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-ade6cd52-7fff-8e5e-dcc6-a8a4be0f82e1"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</span></span><br></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>S.A.Hussain</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-963400fd-7fff-c411-24a1-aa9c8c35cc79"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</span></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Ranjita</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><span id="docs-internal-guid-1e63412f-7fff-38c5-7926-5e721498de5b"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</span></span><br>
																</p>
															</div>
														</div>								</div>
							</div>
							<!-- mobile -->
							<!-- <div class="seemorereview">
								<a href="#" class="">See more reviews</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>

			<div class="testislider-wrap wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
				<!-- desktop -->
				<div class="desktop">
					<div id="testimonial-slider" class="owl-carousel testimonial-slider owl-theme">
						<div class="item">
                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Bijendra Sahu</h4>
                                                        <img src="images/stars-red (1).png">
                                                        <!-- <div id="rateit_7" class="ratemepls" data-rate="5"  ></div> -->
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-b2a94cd1-7fff-cc8f-e54e-d6153920aef0"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> and she loves it!</span></p>
                                                    </p>
                                                </div>

                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Rohini</h4>
                                                        <img src="images/stars-red (1).png">
                                                        <!-- <div id="rateit_6" class="ratemepls" data-rate="5"  ></div> -->
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-ade6cd52-7fff-8e5e-dcc6-a8a4be0f82e1"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.</span></span><br></p>
                                                    </p>
                                                </div>
                                            </div><div class="item">
                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>S.A.hussain</h4>
                                                        <img src="images/stars-red (1).png">
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-963400fd-7fff-c411-24a1-aa9c8c35cc79"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.</span></p>
                                                    </p>
                                                </div>

                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Ranjita</h4>
                                                        <img src="images/stars-red (1).png">
                                                    </div>
                                                    <p><span id="docs-internal-guid-1e63412f-7fff-38c5-7926-5e721498de5b"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo.</span></span><br>
                                                    </p>
                                                </div>
                                            </div>					</div>
				</div>
				<!-- desktop -->


			</div>
		</div>
	</div>
</section>

<section>
  <div class="giftbox">
    <div class="giftbox-in">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2 class="playfair-title hallmark-title customize-title">Curate Your Own Gift Box
            </h2>
            <h3>For an unforgettable experience,<br>
              customize your very own Gift Box. </h3>

            <h4>You Decide & We Design -
            </h4>

            <div class="stepwrp">
              <ul>
                <li>
                  <h4>Step 1</h4>
                  <p>Teentaj Brand Saffron Gift Box is a true emblem of your vision & requirements,
                    which are not only taken into consideration, but are given utmost priority
                    and importance.
                    </p>
                </li>
                <li>
                  <h4>Step 2</h4>
                  <p>All the personalized details are then reflected in the design to give it an
                    aesthetic that defines you, or your occasional grandeur in a splendid way.
                      </p>
                </li>
                <li>
                  <h4>Step 3</h4>
                  <p>We wait for your feedback on the sample, and deliver the luxurious
                    Gift Box to your door after confirmation.
                     </p>
                </li>
              </ul>
              <a href="contact.php"><button>Get Started</button></a>
            </div>
          </div>
        </div>
      </div>
      <div class="giftboximg wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="images/gifted-saffron.png">
      </div>
    </div>
  </div>
</section>
<!-- giftbox ends-->

<!-- testimonial ends-->
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
                <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><img src="images/insta-feed-01.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
                  <img src="images/insta-feed-02.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.5s">
                  <img src="images/insta-feed-03.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.6s" data-wow-delay="0.5s">
                  <img src="images/insta-feed-04.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.8s" data-wow-delay="0.5s">
                  <img src="images/insta-feed-01.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"><img
                    src="images/insta-feed-02.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="2.2s" data-wow-delay="0.5s">
                  <img src="images/insta-feed-03.png"></div>
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
          <div class="col-sm-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
            <h2 class="exclusive-title">Stay updated about our exclusive offers & discounts.</h2>
            <!-- <p>Sign up</p> -->

            <div class="newsletter">
              <input type="text" placeholder="Enter your email address">
            </div>
            <a><button>Sign Up</button></a>

          </div>
        </div>
      </div>

      <div class="exclusive-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="images/newsletter-detail (1).png">
      </div>
    </div>
  </div>
</section>
<!-- exclusive offer ends-->
<?php include 'all php/footer.php';?>