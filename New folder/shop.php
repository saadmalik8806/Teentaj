<?php include 'all php/header.php'; ?>
    <!-- profile login -->
    <div class="prolog">
        <div class="prolog-in">
            <div class="gestwrp">
                <div class="guestlft">
                    <img src="images/product-image/guest-photo.png">
                    <p>Guest User</p>
                </div>
                <div class="guestclose">
                    <img src="images/product-image/log-close.png">
                </div>
            </div>
            <div class="logginn">
                <span class="invalid-feedback" style="display: block;margin: 5px 5px;font-size: 16px;"
                    role="alert">
                    <strong id="error_message"></strong>
                </span>
                <form method="POST" id="login" action="#">
                    <input type="hidden" name="_token" value="">                    <div class="form-group">
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
                                src="images/login-with-facebook (1).svg"
                                style="width: 229px;height: auto;" /> </a>
                        <a href="#"><img
                                src="images/login-with-google.svg"
                                style="width: 229px;height: auto;" /> </a>
                    </span>
                </form>
            </div>
        </div>

        <div class="dontacc">
            <p>Don’t have an account yet?</p>
            <a href="#">Create an account <span><img
                        src="images/product-image/red-angle-right (1).png"></span></a>
        </div>
    </div>

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
                        onClick="apply_coupon('#');">Apply Coupon</button>

                </div>

            </div>
        </div>
    </div>
    <!-- profile login -->

    <!-- Main Basket -->
    <div class="baskdetail">

    </div>
        <div class="overlay-blur"></div>
        


<!-- main-banner begins-->
<div class="products">
<div class="our-products">
	<div class="main-banner">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 pad-0">
				<div class="product-banner">
					<img src="images/product-banner.jpg">
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- main-banner ends-->

	<!-- Our products begins-->
	<div class="our-products">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="our-products-in">
					<h2 class="playfair-title">Our Products</h2>
					<p>Pick your healthy habits here. Featuring a range of pure grade 1 saffron that you can buy online, as per your need &  lifestyle.
					</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<!--Our products ends-->

<!-- Products begins-->
<section>
<div class="product-main">
	<div class="container">
		<!-- row1 Single Usage Pack-->
		<div class="row">
			<div class="col-sm-12">
				<div class="id-set" id="c1"></div>
				<div class="products-title" >
					<h2>Bestseller</h2>
					<img src="images/divider.png">
					
				</div>
				<div id="productslider" class="owl-carousel product-slider">
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 1.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('26','#')">Add to Cart</a>
										</div>
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>1 Gram Powdered Saffron</h4>
										<span>Saffron Powder</span>
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
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 4.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('25','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>1 Gram Saffron Pack</h4>
										<span>Saffron Strands</span>
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
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 5.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('17','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>Single Use Pack (50mg)</h4>
										<span>Set of 20 pcs</span>
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
		</div>
		
		
						<div class="row">
			<div class="col-sm-12">
				<div class="id-set" id="c3"></div>
				<div class="products-title" >
					<h2>Retail Packs</h2>
					<img src="images/divider.png">
					<!-- <a href="#">VIEW ALL</a> -->
				</div>


				<div id="productslider" class="owl-carousel product-slider">
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 3_5.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('30','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>5 Grams Saffron Pack</h4>
										<span>Saffron Strands</span>
										<div class="star-rating">
										</div>
									</div>
									<p class="amount">₹ 1900.00</p>
								</div>

							</div>
						</div>
					</div>
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 4.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('24','#')">Add to Cart</a>
										</div>
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>Half Gram Pack (500mg)</h4>
										<span>Set of 2 pcs</span>
										<div class="star-rating">
									</div>
									</div>
									<p class="amount">₹ 400.00</p>
								</div>

							</div>
						</div>
					</div>
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 2_546.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('23','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>Quarter Gram Pack (250mg)</h4>
										<span>Set of 4 pcs</span>
										<div class="star-rating">



                                                																					</div>
									</div>
									<p class="amount">₹ 420.00</p>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
						<div class="row">
			<div class="col-sm-12">
				<div class="id-set" id="c15"></div>
				<div class="products-title" >
					<h2>Premium packs</h2>
					<img src="images/divider.png">
					<!-- <a href="#">VIEW ALL</a> -->
				</div>
				<div id="productslider" class="owl-carousel product-slider">
																							
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/BS-6 (1).jpg">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('37','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>5 gm Triangular Box</h4>
										<span>Saffron- Strands & Powdered</span>
										<div class="star-rating">
										</div>
									</div>
									<p class="amount">₹ 2950.00</p>
								</div>

							</div>
						</div>
					</div>
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/BS-1.jpg">
																				<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('36','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>3 gm Triangular Box</h4>
										<span>Saffron- Strands & Powdered</span>
										<div class="star-rating">
                                	</div>
									</div>
									<p class="amount">₹ 2000.00</p>
								</div>

							</div>
						</div>
					</div>							
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 6.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('18','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>1 Gm Premium Box</h4>
										<span>Saffron Strands</span>
										<div class="star-rating">
										</div>
									</div>
									<p class="amount">₹ 565.00</p>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
						<div class="row">
			<div class="col-sm-12">
				<div class="id-set" id="c2"></div>
				<div class="products-title" >
					<h2>Luxury Gift Boxes</h2>
					<img src="images/divider.png">
					<!-- <a href="#">VIEW ALL</a> -->
				</div>


				<div id="productslider" class="owl-carousel product-slider">
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 9.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('28','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>1g Saffron Gift Box- Blue</h4>
										<span>Blue</span>
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
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 10.png">
																				<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('27','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>1g Saffron Gift Box- Red</h4>
										<span>Red</span>
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
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 11.png">
											<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('20','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>2g Saffron Gift Box - Red</h4>
										<span>Red</span>
										<div class="star-rating">
										</div>
									</div>
									<p class="amount">₹ 2220.00</p>
								</div>

							</div>
						</div>
					</div>
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 12.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('19','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>2g Saffron Gift Box - Blue</h4>
										<span>Blue</span>
										<div class="star-rating">
										</div>
									</div>
									<p class="amount">₹ 2220.00</p>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
						<div class="row">
			<div class="col-sm-12">
				<div class="id-set" id="c12"></div>
				<div class="products-title" >
					<h2>Bulk Packs</h2>
					<img src="images/divider.png">
					<!-- <a href="#">VIEW ALL</a> -->
				</div>


				<div id="productslider" class="owl-carousel product-slider">
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 8.png">
										<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('29','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>50 Grams Saffron</h4>
										<span>Pet Jar</span>
										<div class="star-rating">



                                                																					</div>
									</div>
									<p class="amount">₹ 17500.00</p>
								</div>

							</div>
						</div>
					</div>
																								
						
					<div class="col-md-4 col-12 pad-0">
						<div class="item">
							<div class="productbox wow  fadeInUp" data-wow-duration="1s"
								data-wow-delay="0.5s">
								<div class="productbox-img">
									<img src="images/product-image/Artboard 5.png">
																				<div class="productbox-hover fadeIn-bottom">
											<a href="#">See More</a>
											<a  class="cart-btn" href="javascript:add_to_cart('22','#')">Add to Cart</a>
										</div>
										
								</div>
								<span class="heart hide">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									<i class="fa fa-heart" aria-hidden="true"></i>
								</span>
								<div class="product-subtitle">
									<div class="product-subtitle-in">
										<h4>25 Grams saffron pack</h4>
										<span>Pet Jar</span>
										<div class="star-rating">



                                                																					</div>
									</div>
									<p class="amount">₹ 9000.00</p>
								</div>

							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		





		<!-- row4 Bull packs-->




	</div>
</div>
</section>
<!-- Products ends-->


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

							<p class="widht70">Ours is a legacy committed to providing you with the best quality saffron in India and worldwide. It makes us immensely grateful for this world spanning journey since our products are not only limited to India, but also shipped globally. We are humbled to find out how our endeavors inspire an enriching experience to our customers.</p>

							<!-- mobile -->
							<div class="mobile768">
								<div id="testimonial-slider" class="owl-carousel testimonial-slider  owl-theme">

									<div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Saad</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-b2a94cd1-7fff-cc8f-e54e-d6153920aef0"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Really Good product, no complaints. I gifted it to a friend who is pregnant</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> and she loves it!</span></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Saad</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-ade6cd52-7fff-8e5e-dcc6-a8a4be0f82e1"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">It is really good, when I consume it starts working within 15days and gives me glowing skin after drinking with milk.</span></span><br></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Saad</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><p><span id="docs-internal-guid-963400fd-7fff-c411-24a1-aa9c8c35cc79"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">The Product Quality is Very Good, the Packaging was also very good. Delivery Time was also very smooth.</span></p>
																</p>
															</div>
														</div><div class="item">
															<div class="testibox">
																<div class="testititle">
																	<h4>Saad</h4>
																	<img src="images/stars-red (1).png">
																</div>
																<p><span id="docs-internal-guid-1e63412f-7fff-38c5-7926-5e721498de5b"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">This is a very old brand and stands apart from the other brands with its exceptional color, taste, and fragrance. The strands are long and thick, totally worth every penny.</span></span><br>
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
                                                        <h4>Saad</h4>
                                                        <img src="images/stars-red (1).png">
                                                        <!-- <div id="rateit_7" class="ratemepls" data-rate="5"  ></div> -->
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-b2a94cd1-7fff-cc8f-e54e-d6153920aef0"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">Really Good product, no complaints. I gifted it to a friend who is pregnant</span><span style="font-size:11pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;"> and she loves it!</span></p>
                                                    </p>
                                                </div>
                                           
                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Saad</h4>
                                                        <img src="images/stars-red (1).png">
                                                        <!-- <div id="rateit_6" class="ratemepls" data-rate="5"  ></div> -->
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-ade6cd52-7fff-8e5e-dcc6-a8a4be0f82e1"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">It is really good, when I consume it starts working within 15days and gives me glowing skin after drinking with milk.</span></span><br></p>
                                                    </p>
                                                </div>
                                            </div><div class="item">
                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Saad</h4>
                                                        <img src="images/stars-red (1).png">
                                                    </div>
                                                    <p><p><span id="docs-internal-guid-963400fd-7fff-c411-24a1-aa9c8c35cc79"></span></p><p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><span style="font-size:10.5pt;font-family:Arial;color:#0f1111;background-color:#ffffff;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;">The Product Quality is Very Good, the Packaging was also very good. Delivery Time was also very smooth.</span></p>
                                                    </p>
                                                </div>
                                           
                                                <div class="testibox">
                                                    <div class="testititle">
                                                        <h4>Saad</h4>
                                                        <img src="images/stars-red (1).png">
                                                    </div>
                                                    <p><span id="docs-internal-guid-1e63412f-7fff-38c5-7926-5e721498de5b"><span style="font-size: 10.5pt; font-family: Arial; color: rgb(15, 17, 17); font-variant-numeric: normal; font-variant-east-asian: normal; vertical-align: baseline; white-space: pre-wrap;">This is a very old brand and stands apart from the other brands with its exceptional color, taste, and fragrance. The strands are long and thick, totally worth every penny.</span></span><br>
                                                    </p>
                                                </div>
                                            </div>					</div>
				</div>
				<!-- desktop -->


			</div>
		</div>
	</div>
</section>



<!-- testimonial ends-->


<!-- giftbox begins-->
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

						<a href="#c2" class="button-red">Get Started</a>
					</div>
				</div>
			</div>
		</div>
		<div class="giftboximg wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
			<img src="public/images/gifted-saffron.png">
		</div>
	</div>
</div>
</section>
</div>
<!-- giftbox ends-->

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
                <div class="item wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s"><img src="images/product-image/insta-feed-01.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.2s" data-wow-delay="0.5s">
                  <img src="images/product-image/insta-feed-02.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.4s" data-wow-delay="0.5s">
                  <img src="images/product-image/insta-feed-03.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.6s" data-wow-delay="0.5s">
                  <img src="images/product-image/insta-feed-04.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="1.8s" data-wow-delay="0.5s">
                  <img src="images/product-image/insta-feed-01.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s"><img
                    src="images/product-image/insta-feed-02.png"></div>
                <div class="item wow fadeInUp" data-wow-duration="2.2s" data-wow-delay="0.5s">
                  <img src="images/product-image/insta-feed-03.png"></div>
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

            <button class="signup button-red">Sign Up</button>
          </div>
        </div>
      </div>

      <div class="exclusive-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <img src="images/product-image/newsletter-detail (1).png">
      </div>
    </div>
  </div>
</section>
<!-- exclusive offer ends-->

<?php include 'all php/footer.php'; ?>