<?php include 'all php/header.php'; ?>
    <!-- profile login -->
    <div class="prolog">
        <div class="prolog-in">
            <div class="gestwrp">
                <div class="guestlft">
                    <img src="images/profile-Icon.svg">
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
                    <input type="hidden" name="_token" value="#">                    <div class="form-group">
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
                    <span><a href="https://www.facebook.com/teentajspices"><img
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
        
<!-- benefits of saffron -->
<section>
    <div class="healty-generation bfs wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bfsimg wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="images/usage/flower.png">
                    </div>




                    <div class="healty-gene-content bfs-in wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="images/usage/usage-gene.svg">
                    </div>

                    <p>A promise of good health straight out<br>
                            of the richness of Ayurveda!</p>

                    <div class="main-unb-img wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                        <img src="images/usage/main-saffron.png">
                    </div>

                    <div class="goodness wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                        <h2>Holding the goodness of ancient science</h2>
                        <img src="images/usage/main-line.png">
                        <p>Listen to your body closely and help it transform into<br>
                                a healthy balance with Baby Brand Saffron.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits of saffron -->

<!-- usage details -->
<section>
    <div class="usage-detials">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="usage-detials-in">
                        <div class="row">
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                <div class="usage-detials-box">
                                    <img src="images/usage/digestive-system.svg">
                                    <h4>Aids your <br>
                                            digestive system</h4>
                                            <p>Saffron is said to relieve gastric and
                                            acidity issues thereby improving your 
                                            digestive health.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="0.7s" data-wow-delay="0.5s">
                                <div class="usage-detials-box">
                                    <img src="images/usage/arthritis.svg">
                                    <h4>Relief from <br>
                                                arthritis pain</h4>
                                            <p>Studies suggest that saffron acts as
                                                an anti-inflammatory agent and helps 
                                                relieve joint pain.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="0.9s" data-wow-delay="0.5s">
                                <div class="usage-detials-box">
                                    <img src="images/usage/vision.svg">
                                    <h4>Improves<br>
                                                vision</h4>
                                            <p>Many researchers say that saffron helps 
                                                regulate the key vision cells and further 
                                                protects them from damage.</p>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
                                    <div class="usage-detials-box">
                                        <img src="images/usage/sleep.svg">
                                        <h4>A goodnight’s<br>
                                                    sleep</h4>
                                                <p>Saffron intake has been found to 
                                                    improve sleep cycles according 
                                                    to scientists.</p>
                                    </div>
                                </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="2.1s" data-wow-delay="0.5s">
                                    <div class="usage-detials-box">
                                        <img src="images/usage/cancer.svg">
                                        <h4>Increased recovery speed<br>
                                                    in some cancer cases</h4>
                                                <p>Saffron contains crocin and crocetin. Crocin is said to have cancer-fighting properties while Crocetin may inhibit the growth of cancer cells.</p>
                                    </div>
                                </div>
                            <div class="col-sm-4 wow fadeInUp" data-wow-duration="2.3s" data-wow-delay="0.5s">
                                    <div class="usage-detials-box">
                                        <img src="images/usage/mensturation.svg">
                                        <h4>Regulates <br>
                                                    menstruation</h4>
                                                <p>According to health experts, saffron helps
                                                    regulate normal flow of periods and is also 
                                                    said to relieve menstrual pain.</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- usage details -->

 <!-- holistic health -->
 <section>
        <div class="holistic-health">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="holistic-health-in wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                            <div class="row">
                                <div class="col-sm-5">
                                    <div class="holistic-content wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                        <h2>Inspiring a celebration<br>
                                                of holistic health</h2>
                                        <div class="desktop">
                                            <a href="shop.html"><button class="button-red">Shop Now</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-7">
                                        <div class="holistic-img wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                           <img src="images/giftedbox.png">
                                        </div>
                                        <div class="shopnowres mobile768">
                                            <button class="button-red">Shop Now</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- holistic health -->

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
												
													</div>
												</div>
											</div>

											<div class="extaractfoot wow fadeInUp container" data-wow-duration="1.6s"
												data-wow-delay="0.5s">

												<p>Saffron Powder is plain saffron (whole threads) which is grinded and made into powder form for easier use. It is perfect for the fast paced life of a consumer, as it can be sprinkled, stirred & consumed on the go. The powdered saffron releases its colour, aroma and flavor within seconds which makes it ideal for instant use.</p>

												<a href="shop.html" class="button-red">See Our Products</a>
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
																<img src="images/Baby-Saffron-Powder-1 (1).gif" class="desktop">
																<img src="images/Baby-Saffron-Powder-1 (1).gif" class="mobile768">
															</div>
															<div class="slidech-content container">
																<h5>Get the most out of our saffron.</h5>
												
															</div>
														</div>
													</div>

													<div class="extaractfoot container" >

												<p>A few minutes of immersion in water can help Saffron attain its perfect form, where the aroma and colour blends in seamlessly. Let the saffron strands ooze their natural color till the water turns yellow. This will also bring out the fragrance which should easily diffuse the air around you.
													</p>
													<p>Stir this mixture and after 20 mins add it to your recipe as it continues to release aroma, flavor & colour. We suggest you use saffron in this way to reap the best results of our premium saffron.</p>

												<a href="shop.html" class="button-red">See Our Products</a>
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

            <button class="signup button-red">Sign Up</button>
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
<?php include 'all php/footer.php'; ?>