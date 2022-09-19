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
            <a href="php/registration_from.php">Create an account <span><img
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
                            src="images/product-image/close-apply.svg" width="25"></button>
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
        
<!-- main-contact-->
<section>
    <div class="main-contact">
        <div class="container">
            <div class="main-contact-in">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="contact-box">
                            <h2>Head Office&nbsp;</h2>
                            <p>13 Upperchanwood Street United Kingdom
                                Leicester LE2 0AW</p>
                        </div>
                        <div class="contact-box">
                            <h2>Corporate Office</h2><p>
                                13 Upperchanwood Street United Kingdom
                                Leicester LE2 0AW</p>
                        </div>
                        <div class="contact-box">
                            <h2>Operations Base</h2>
                            <p>13 Upperchanwood Street United Kingdom
                                Leicester LE2 0AW</p>
                        </div>

                        <div class="reddive"></div>

                        <div class="contact-map-details">
                            <a href="Tel:+44 744 871 5444"><img src="images/product-image/call.png">+44 744 871 5444</a>
                            <a href="mailTo:Teentajspices@gmail.com"><img src="images/product-image/msg.png">Teentajspices@gmail.com</a></div><div class="contact-map-details"><br></div></div><div class="col-sm-5"><div class="maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d605.3137258741351!2d-1.1163058032344635!3d52.63730760591204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48776114405129b1%3A0x304f8fd6366d7bb0!2sUpper%20Charnwood%20St%2C%20Leicester%20LE2%200AW%2C%20UK!5e0!3m2!1sen!2sin!4v1662273214566!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                <!-- <iframe src="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main-contact-->


<!-- overseas-main-->
<section>
    <div class="main-contact overseas-main">
        <div class="container">
            <div class="main-contact-in">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="overseas-title">
                           <h2>Overseas</h2>
                        </div>

                        <div class="desktop">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="overseas-box">
                                    <h2>Vietnam</h2>
                                    <p><b>Health For Angels</b>
                                        Health For Angels Pharmaceutical Company Ltd<br>
                                        Address Building Ecolife Capital No. 58 To Huu Street.<br>
                                        Nam Tu Liem District, Ha Noi City
                                        </p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overseas-box">
                                        <h2><br></h2>
                                    </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="overseas-box">
                                    <h2><br></h2>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                                <div class="col-sm-4">
                                    <div class="overseas-box">
                                        <a href="Tel:+44 744 871 5444"><span><img src="images/product-image/call.png"></span>+44 744 871 5444</a>
                                       <div class="twomail">
                                        <a href="https://www.facebook.com/teentajspices"><span><img src="images/product-image/msg.png"></span>https://www.facebook.com/<br>Teentaj Saffron
                                        </a>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="overseas-box"><br></div></div>
                            </div>
                        </div>

                        <!-- mobile -->
							<div class="mobile768">
                                    <div id="testimonial-slider" class="owl-carousel testimonial-slider contactslide  owl-theme">
                                        <div class="item">
                                                <div class="contact-box">
                                                        <h2>Vietnam</h2>
                                                        <p><b>Health For Angels</b>
                                                            Health For Angels Pharmaceutical Company Ltd<br>
                                                            Address Building Ecolife Capital No. 58 To Huu Street.<br>
                                                            Nam Tu Liem District, Ha Noi City
                                                            </p>
        
                                                        <div class="reddive mobile480"></div>
        
                                                        <div class="con-box-in">
                                                                <a href="Tel:+44 744 871 5444"><span><img src="images/product-image/phone-call-svgrepo-com.svg"></span>+94 898 0008</a>
                                       <div class="twomail">
                                        <a href="https://www.facebook.com/teentajspices"><span><img src="images/facebook-3-128x128.png"></span>https://www.facebook.com/<br>Teentaj Saffron/
                                        </a>
                                                        </div> 
                                                    </div>
                                                </div>

                                        </div>
                                         
                                    
                                    </div>
                                </div>
                                <!-- mobile -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- overseas-main-->
<!-- contact-inquiry -->
<section>
        <div class="contact-inquiry">
            <div class="container">
                <div class="contact-inquiry-in">
                    <div class="row">
                        <div class="col-sm-12">
                            <form method="POST" action="php/contact.php">
                                <input type="hidden" name="_token" value="1gyCviWtukNiiTKcB6s2CdMeSl7cuCbNxfzVoyKK">
                                <div class="form-group">
                                    <label>What's on your mind?</label>

                                    <div class="dropdown">
                                        <div class="select">
                                            <span>I want to collaborate with your brand</span>
                                            <i class="fa fa-chevron-left"></i>
                                        </div>
                                        <input type="hidden" name="mind">
                                        <ul class="dropdown-menu">
                                            <li id="I want to collaborate with your brand">I want to collaborate with your brand</li>
                                            <li id="I want bulk gift boxes for an event/occassion">I want bulk gift boxes for an event/occassion</li>
                                            <li id="I want to become a retailer / other business opportunity">I want to become a retailer / other business opportunity</li>
                                            <li id="I want bulk shipment outside India">I want bulk shipment outside India</li>
                                            <li id="I have a query related to my order">I have a query related to my order</li>
                                        </ul>
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <label>How would you like for us to get back to you?</label>

                                        <div class="dropdown">
                                                <div class="select">
                                                    <span>Drop me an e-mail</span>
                                                    <i class="fa fa-chevron-left"></i>
                                                </div>
                                                <input type="hidden" name="get_back">
                                                <ul class="dropdown-menu">
                                                    <li id="Drop me an e-mail">Drop me an e-mail</li>
                                                    <li id="Text me on the provided number">Text me on the provided number</li>
                                                    <li id="Call me on the provided number">Call me on the provided number</li>
                                                </ul>
                                            </div>

                                    </div>

                                    <div class="inq-form-in">
                                        <h2>Please enter your details.</h2>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>First Name</label>
                                                <input type="text" name="first_name">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Last Name</label>
                                                <input type="text"  name="last_name">
                                            </div>
                                            <div class="col-sm-6">
                                                    <label>Phone Number</label>
                                                    <input id="phone_no" type="tel" name="phone_number">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label>Country</label>
                                                    <div class="form-item">
                                                        <input id="country_selector" class="form-control " type="text" required name="Country" style="background:#f4f4f6;border:none;width:100%;color:#495057!important;font-size:16px!important;font-family:'ProdaSansRegular';right:auto;">
                                                        <label for="country_selector" style="display:none;">Select a country here...</label>
                                                    </div>
                                                    <div class="form-item" style="display:none;">
                                                        <input type="text" class="form-control " id="country_selector_code" name="country_selector_code" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
                                                        <label for="country_selector_code">...and the selected country code will be updated here</label>
                                                    </div>
                                                </div>
                                            <div class="col-sm-12">
                                                    <label>Email Address</label>
                                                    <input type="text" name="email">
                                                </div>

                                        <div class="col-sm-12">
                                                <label class="common-red">Message</label>
                                                <textarea type="text" name="message"></textarea>
                                            </div>
                                        <div class="pull-right-send">
                                                <button class="button-red" type="submit" name="submit">Send</button>
                                        </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <!-- overseas-main-->
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