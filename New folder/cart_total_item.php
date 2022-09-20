<?php session_start(); ?>
<?php include 'all php/header.php';?>

<?php

?>
    <!-- Main Basket -->
    <div class="baskdetail">

    </div>
        <div class="overlay-blur"></div>


    <div class="overlay-blur"></div>
    <!-- Order summary-->
    <div class="order-summary order-summary-main">
        <!-- <div class="mobile480 threeitem">
            <span>2 items <img src="public/images/account-dashboard/scrollarrowdwn.png"></span>

            <p>₹  </p>
        </div> -->
        <!-- <div class="mobile480">
            <ul class="sortdropdown">
                    <li>
                        <div class="sortbox">
                            <div class="left-sortbox">
                                <div class="pricingside">
                                    <img src="public/images/account-dashboard/sort-ico-01.png">
                                    <div class="pricingsidecontent">
                                        <h4>1 Gram Saffron Pack</h4>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   
                                     <p>₹  500.00</p>
                                    </div>
                                </div>
                                <div class="rightord">
                                    <div class="qtyy">
                                        <p>QTY</p>
                                        <div class="qtysubwrp">
                                            <input type="number" style="width:65px;" value="1"
                                                class="qty">
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </li>
                            </ul>
        </div> -->

        <div class="container">

    <?php 
    if (isset($_SESSION['cart']) && count($_SESSION['cart'])>0) 
    {
       
    
     ?>
    <form action="php/purches.php" method="post">
                <!-- <input type="hidden" name="_token" value="kf6UAzigfkiuvR0GEAVe3WkEaymaymeQch7PFJ7x">                <div class="row"> -->

                    <div class="col-lg-6 col-md-12">

                    <div class="summary-details">
                                <h2>Your Details</h2>
                            </div>
                            <div class="summary-form">
                                <input type="hidden" class="hidden_url" value="">
                                <div class="summary-form-wrap">
                                    <div class="from-group">
                                        <label>E-mail Address</label> <span class='red'>*</span>
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                    <div class="from-group">
                                        <label>First Name</label> <span class='red'>*</span>
                                        <input type="text" class="form-control" name="fir_name">
                                    </div>
                                    <div class="from-group">
                                        <label>Last Name</label> <span class='red'>*</span>
                                        <input type="text" class="form-control" name="last_name">
                                        
                                    </div>
                                    <div class="shippadd">
                                        <div class="summary-details billing-tite">
                                            <h2>Shipping Address</h2>
                                        </div>
                                        <div class="wrapper-address">
                                            <div class="element">
                                                <div class="wrapper-address">
                                                    <div class="element defaultadd-content">
                                                        <div class="unsaveadd">
                                                            <div class="unsaveadd-title">
                                                                <p>Unsaved Address</p>
                                                                <div class="curd-title hide">
                                                                    <p onclick="readonlyinput()">EDIT</p>
                                                                    <div class="deleteaddress">
                                                                        <img
                                                                            src="../images/account-dashboard/delete.svg">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <!-- <div class="form-group">
                                                                        <label>Name</label> <span class='red'>*</span>
                                                                        <input type="text" id="save-name" name="name"
                                                                            value="" placeholder="Enter name">
                                                                    </div> -->
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Apartment/Suite</label> <span
                                                                            class='red'>*</span>
                                                                        <input type="text" name="apartment"
                                                                            placeholder="Enter Apartment/Suite"
                                                                            value="">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Address</label> <span class='red'>*</span>
                                                                        <input type="text" name="address" value=""
                                                                            placeholder="Enter Address">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>Country</label> <span class='red'>*</span>
                                                                        <!-- <input type="text" name="country" value="" placeholder="Enter Country"> -->
                                                                        <select name="country"
                                                                            class="form-data country newcountry"
                                                                            id="newcountry">
                                                                            <option value="">-Select country-</option>
                                                             <option value="Aland Islands" data-countryID="2" data-countrysn="AX"> Aland Islands</option>
                                                             <option value="Albania"  data-countryID="3" data-countrysn="AL"> Albania</option>
                                                             <option value="Algeria"  data-countryID="4" data-countrysn="DZ">Algeria</option>
                                                            <option value="American Samoa" data-countryID="5" data-countrysn="AS"> American Samoa</option>
                                                             <option value="Andorra" data-countryID="6" data-countrysn="AD"> Andorra</option>
                                                                                                                                                        <option value="Angola"
                                                                                data-countryID="7"
                                                                                data-countrysn="AO">
                                                                                Angola</option>
                                                                                                                                                        <option value="Anguilla"
                                                                                data-countryID="8"
                                                                                data-countrysn="AI">
                                                                                Anguilla</option>
                                                                                                                                                        <option value="Antarctica"
                                                                                data-countryID="9"
                                                                                data-countrysn="AQ">
                                                                                Antarctica</option>
                                                                                                                                                        <option value="Antigua And Barbuda"
                                                                                data-countryID="10"
                                                                                data-countrysn="AG">
                                                                                Antigua And Barbuda</option>
                                                                                                                                                        <option value="Argentina"
                                                                                data-countryID="11"
                                                                                data-countrysn="AR">
                                                                                Argentina</option>
                                                                                                                                                        <option value="Armenia"
                                                                                data-countryID="12"
                                                                                data-countrysn="AM">
                                                                                Armenia</option>
                                                                                                                                                        <option value="Aruba"
                                                                                data-countryID="13"
                                                                                data-countrysn="AW">
                                                                                Aruba</option>
                                                                                                                                                        <option value="Australia"
                                                                                data-countryID="14"
                                                                                data-countrysn="AU">
                                                                                Australia</option>
                                                                                                                                                        <option value="Austria"
                                                                                data-countryID="15"
                                                                                data-countrysn="AT">
                                                                                Austria</option>
                                                                                                                                                        <option value="Azerbaijan"
                                                                                data-countryID="16"
                                                                                data-countrysn="AZ">
                                                                                Azerbaijan</option>
                                                                                                                                                        <option value="Bahamas The"
                                                                                data-countryID="17"
                                                                                data-countrysn="BS">
                                                                                Bahamas The</option>
                                                                                                                                                        <option value="Bahrain"
                                                                                data-countryID="18"
                                                                                data-countrysn="BH">
                                                                                Bahrain</option>
                                                                                                                                                        <option value="Bangladesh"
                                                                                data-countryID="19"
                                                                                data-countrysn="BD">
                                                                                Bangladesh</option>
                                                                                                                                                        <option value="Barbados"
                                                                                data-countryID="20"
                                                                                data-countrysn="BB">
                                                                                Barbados</option>
                                                                                                                                                        <option value="Belarus"
                                                                                data-countryID="21"
                                                                                data-countrysn="BY">
                                                                                Belarus</option>
                                                                                                                                                        <option value="Belgium"
                                                                                data-countryID="22"
                                                                                data-countrysn="BE">
                                                                                Belgium</option>
                                                                                                                                                        <option value="Belize"
                                                                                data-countryID="23"
                                                                                data-countrysn="BZ">
                                                                                Belize</option>
                                                                                                                                                        <option value="Benin"
                                                                                data-countryID="24"
                                                                                data-countrysn="BJ">
                                                                                Benin</option>
                                                                                                                                                        <option value="Bermuda"
                                                                                data-countryID="25"
                                                                                data-countrysn="BM">
                                                                                Bermuda</option>
                                                                                                                                                        <option value="Bhutan"
                                                                                data-countryID="26"
                                                                                data-countrysn="BT">
                                                                                Bhutan</option>
                                                                                                                                                        <option value="Bolivia"
                                                                                data-countryID="27"
                                                                                data-countrysn="BO">
                                                                                Bolivia</option>
                                                                                                                                                        <option value="Bosnia and Herzegovina"
                                                                                data-countryID="28"
                                                                                data-countrysn="BA">
                                                                                Bosnia and Herzegovina</option>
                                                                                                                                                        <option value="Botswana"
                                                                                data-countryID="29"
                                                                                data-countrysn="BW">
                                                                                Botswana</option>
                                                                                                                                                        <option value="Bouvet Island"
                                                                                data-countryID="30"
                                                                                data-countrysn="BV">
                                                                                Bouvet Island</option>
                                                                                                                                                        <option value="Brazil"
                                                                                data-countryID="31"
                                                                                data-countrysn="BR">
                                                                                Brazil</option>
                                        <option value="British Indian Ocean Territory"
                                                                                data-countryID="32"
                                                                                data-countrysn="IO">
                                                                                British Indian Ocean Territory</option>
                                                                                                                                                        <option value="Brunei"
                                                                                data-countryID="33"
                                                                                data-countrysn="BN">
                                                                                Brunei</option>
                                                                                                                                                        <option value="Bulgaria"
                                                                                data-countryID="34"
                                                                                data-countrysn="BG">
                                                                                Bulgaria</option>
                                                                                                                                                        <option value="Burkina Faso"
                                                                                data-countryID="35"
                                                                                data-countrysn="BF">
                                                                                Burkina Faso</option>
                                                                                                                                                        <option value="Burundi"
                                                                                data-countryID="36"
                                                                                data-countrysn="BI">
                                                                                Burundi</option>
                                                                                                                                                        <option value="Cambodia"
                                                                                data-countryID="37"
                                                                                data-countrysn="KH">
                                                                                Cambodia</option>
                                                                                                                                                        <option value="Cameroon"
                                                                                data-countryID="38"
                                                                                data-countrysn="CM">
                                                                                Cameroon</option>
                                                                                                                                                        <option value="Canada"
                                                                                data-countryID="39"
                                                                                data-countrysn="CA">
                                                                                Canada</option>
                                                                                                                                                        <option value="Cape Verde"
                                                                                data-countryID="40"
                                                                                data-countrysn="CV">
                                                                                Cape Verde</option>
                                                                                                                                                        <option value="Cayman Islands"
                                                                                data-countryID="41"
                                                                                data-countrysn="KY">
                                                                                Cayman Islands</option>
                                                                                                                                                        <option value="Central African Republic"
                                                                                data-countryID="42"
                                                                                data-countrysn="CF">
                                                                                Central African Republic</option>
                                                                                                                                                        <option value="Chad"
                                                                                data-countryID="43"
                                                                                data-countrysn="TD">
                                                                                Chad</option>
                                                                                                                                                        <option value="Chile"
                                                                                data-countryID="44"
                                                                                data-countrysn="CL">
                                                                                Chile</option>
                                                                                                                                                        <option value="China"
                                                                                data-countryID="45"
                                                                                data-countrysn="CN">
                                                                                China</option>
                                                                                                                                                        <option value="Christmas Island"
                                                                                data-countryID="46"
                                                                                data-countrysn="CX">
                                                                                Christmas Island</option>
                                                                                                                                                        <option value="Cocos (Keeling) Islands"
                                                                                data-countryID="47"
                                                                                data-countrysn="CC">
                                                                                Cocos (Keeling) Islands</option>
                                                                                                                                                        <option value="Colombia"
                                                                                data-countryID="48"
                                                                                data-countrysn="CO">
                                                                                Colombia</option>
                                                                                                                                                        <option value="Comoros"
                                                                                data-countryID="49"
                                                                                data-countrysn="KM">
                                                                                Comoros</option>
                                                                                                                                                        <option value="Congo"
                                                                                data-countryID="50"
                                                                                data-countrysn="CG">
                                                                                Congo</option>
                                                                                                                                                        <option value="Democratic Republic of the Congo"
                                                                                data-countryID="51"
                                                                                data-countrysn="CD">
                                                                                Democratic Republic of the Congo</option>
                                                                                                                                                        <option value="Cook Islands"
                                                                                data-countryID="52"
                                                                                data-countrysn="CK">
                                                                                Cook Islands</option>
                                                                                                                                                        <option value="Costa Rica"
                                                                                data-countryID="53"
                                                                                data-countrysn="CR">
                                                                                Costa Rica</option>
                                                                                                                                                        <option value="Cote D&#039;Ivoire (Ivory Coast)"
                                                                                data-countryID="54"
                                                                                data-countrysn="CI">
                                                                                Cote D&#039;Ivoire (Ivory Coast)</option>
                                                                                                                                                        <option value="Croatia"
                                                                                data-countryID="55"
                                                                                data-countrysn="HR">
                                                                                Croatia</option>
                                                                                                                                                        <option value="Cuba"
                                                                                data-countryID="56"
                                                                                data-countrysn="CU">
                                                                                Cuba</option>
                                                                                                                                                        <option value="Cyprus"
                                                                                data-countryID="57"
                                                                                data-countrysn="CY">
                                                                                Cyprus</option>
                                                                                                                                                        <option value="Czech Republic"
                                                                                data-countryID="58"
                                                                                data-countrysn="CZ">
                                                                                Czech Republic</option>
                                                                                                                                                        <option value="Denmark"
                                                                                data-countryID="59"
                                                                                data-countrysn="DK">
                                                                                Denmark</option>
                                                                                                                                                        <option value="Djibouti"
                                                                                data-countryID="60"
                                                                                data-countrysn="DJ">
                                                                                Djibouti</option>
                                                                                                                                                        <option value="Dominica"
                                                                                data-countryID="61"
                                                                                data-countrysn="DM">
                                                                                Dominica</option>
                                                                                                                                                        <option value="Dominican Republic"
                                                                                data-countryID="62"
                                                                                data-countrysn="DO">
                                                                                Dominican Republic</option>
                                                                                                                                                        <option value="East Timor"
                                                                                data-countryID="63"
                                                                                data-countrysn="TL">
                                                                                East Timor</option>
                                                                                                                                                        <option value="Ecuador"
                                                                                data-countryID="64"
                                                                                data-countrysn="EC">
                                                                                Ecuador</option>
                                                                                                                                                        <option value="Egypt"
                                                                                data-countryID="65"
                                                                                data-countrysn="EG">
                                                                                Egypt</option>
                                                                                                                                                        <option value="El Salvador"
                                                                                data-countryID="66"
                                                                                data-countrysn="SV">
                                                                                El Salvador</option>
                                                                                                                                                        <option value="Equatorial Guinea"
                                                                                data-countryID="67"
                                                                                data-countrysn="GQ">
                                                                                Equatorial Guinea</option>
                                                                                                                                                        <option value="Eritrea"
                                                                                data-countryID="68"
                                                                                data-countrysn="ER">
                                                                                Eritrea</option>
                                                                                                                                                        <option value="Estonia"
                                                                                data-countryID="69"
                                                                                data-countrysn="EE">
                                                                                Estonia</option>
                                                                                                                                                        <option value="Ethiopia"
                                                                                data-countryID="70"
                                                                                data-countrysn="ET">
                                                                                Ethiopia</option>
                                                                                                                                                        <option value="Falkland Islands"
                                                                                data-countryID="71"
                                                                                data-countrysn="FK">
                                                                                Falkland Islands</option>
                                                                                                                                                        <option value="Faroe Islands"
                                                                                data-countryID="72"
                                                                                data-countrysn="FO">
                                                                                Faroe Islands</option>
                                                                                                                                                        <option value="Fiji Islands"
                                                                                data-countryID="73"
                                                                                data-countrysn="FJ">
                                                                                Fiji Islands</option>
                                                                                                                                                        <option value="Finland"
                                                                                data-countryID="74"
                                                                                data-countrysn="FI">
                                                                                Finland</option>
                                                                                                                                                        <option value="France"
                                                                                data-countryID="75"
                                                                                data-countrysn="FR">
                                                                                France</option>
                                                                                                                                                        <option value="French Guiana"
                                                                                data-countryID="76"
                                                                                data-countrysn="GF">
                                                                                French Guiana</option>
                                                                                                                                                        <option value="French Polynesia"
                                                                                data-countryID="77"
                                                                                data-countrysn="PF">
                                                                                French Polynesia</option>
                                                                                                                                                        <option value="French Southern Territories"
                                                                                data-countryID="78"
                                                                                data-countrysn="TF">
                                                                                French Southern Territories</option>
                                                                                                                                                        <option value="Gabon"
                                                                                data-countryID="79"
                                                                                data-countrysn="GA">
                                                                                Gabon</option>
                                                                                                                                                        <option value="Gambia The"
                                                                                data-countryID="80"
                                                                                data-countrysn="GM">
                                                                                Gambia The</option>
                                                                                                                                                        <option value="Georgia"
                                                                                data-countryID="81"
                                                                                data-countrysn="GE">
                                                                                Georgia</option>
                                                                                                                                                        <option value="Germany"
                                                                                data-countryID="82"
                                                                                data-countrysn="DE">
                                                                                Germany</option>
                                                                                                                                                        <option value="Ghana"
                                                                                data-countryID="83"
                                                                                data-countrysn="GH">
                                                                                Ghana</option>
                                                                                                                                                        <option value="Gibraltar"
                                                                                data-countryID="84"
                                                                                data-countrysn="GI">
                                                                                Gibraltar</option>
                                                                                                                                                        <option value="Greece"
                                                                                data-countryID="85"
                                                                                data-countrysn="GR">
                                                                                Greece</option>
                                                                                                                                                        <option value="Greenland"
                                                                                data-countryID="86"
                                                                                data-countrysn="GL">
                                                                                Greenland</option>
                                                                                                                                                        <option value="Grenada"
                                                                                data-countryID="87"
                                                                                data-countrysn="GD">
                                                                                Grenada</option>
                                                                                                                                                        <option value="Guadeloupe"
                                                                                data-countryID="88"
                                                                                data-countrysn="GP">
                                                                                Guadeloupe</option>
                                                                                                                                                        <option value="Guam"
                                                                                data-countryID="89"
                                                                                data-countrysn="GU">
                                                                                Guam</option>
                                                                                                                                                        <option value="Guatemala"
                                                                                data-countryID="90"
                                                                                data-countrysn="GT">
                                                                                Guatemala</option>
                                                                                                                                                        <option value="Guernsey and Alderney"
                                                                                data-countryID="91"
                                                                                data-countrysn="GG">
                                                                                Guernsey and Alderney</option>
                                                                                                                                                        <option value="Guinea"
                                                                                data-countryID="92"
                                                                                data-countrysn="GN">
                                                                                Guinea</option>
                                                                                                                                                        <option value="Guinea-Bissau"
                                                                                data-countryID="93"
                                                                                data-countrysn="GW">
                                                                                Guinea-Bissau</option>
                                                                                                                                                        <option value="Guyana"
                                                                                data-countryID="94"
                                                                                data-countrysn="GY">
                                                                                Guyana</option>
                                                                                                                                                        <option value="Haiti"
                                                                                data-countryID="95"
                                                                                data-countrysn="HT">
                                                                                Haiti</option>
                                                                                                                                                        <option value="Heard Island and McDonald Islands"
                                                                                data-countryID="96"
                                                                                data-countrysn="HM">
                                                                                Heard Island and McDonald Islands</option>
                                                                                                                                                        <option value="Honduras"
                                                                                data-countryID="97"
                                                                                data-countrysn="HN">
                                                                                Honduras</option>
                                                                                                                                                        <option value="Hong Kong S.A.R."
                                                                                data-countryID="98"
                                                                                data-countrysn="HK">
                                                                                Hong Kong S.A.R.</option>
                                                                                                                                                        <option value="Hungary"
                                                                                data-countryID="99"
                                                                                data-countrysn="HU">
                                                                                Hungary</option>
                                                                                                                                                        <option value="Iceland"
                                                                                data-countryID="100"
                                                                                data-countrysn="IS">
                                                                                Iceland</option>
                                                                                                                                                        <option value="India"
                                                                                data-countryID="101"
                                                                                data-countrysn="IN">
                                                                                India</option>
                                                                                                                                                        <option value="Indonesia"
                                                                                data-countryID="102"
                                                                                data-countrysn="ID">
                                                                                Indonesia</option>
                                                                                                                                                        <option value="Iran"
                                                                                data-countryID="103"
                                                                                data-countrysn="IR">
                                                                                Iran</option>
                                                                                                                                                        <option value="Iraq"
                                                                                data-countryID="104"
                                                                                data-countrysn="IQ">
                                                                                Iraq</option>
                                                                                                                                                        <option value="Ireland"
                                                                                data-countryID="105"
                                                                                data-countrysn="IE">
                                                                                Ireland</option>
                                                                                                                                                        <option value="Israel"
                                                                                data-countryID="106"
                                                                                data-countrysn="IL">
                                                                                Israel</option>
                                                                                                                                                        <option value="Italy"
                                                                                data-countryID="107"
                                                                                data-countrysn="IT">
                                                                                Italy</option>
                                                                                                                                                        <option value="Jamaica"
                                                                                data-countryID="108"
                                                                                data-countrysn="JM">
                                                                                Jamaica</option>
                                                                                                                                                        <option value="Japan"
                                                                                data-countryID="109"
                                                                                data-countrysn="JP">
                                                                                Japan</option>
                                                                                                                                                        <option value="Jersey"
                                                                                data-countryID="110"
                                                                                data-countrysn="JE">
                                                                                Jersey</option>
                                                                                                                                                        <option value="Jordan"
                                                                                data-countryID="111"
                                                                                data-countrysn="JO">
                                                                                Jordan</option>
                                                                                                                                                        <option value="Kazakhstan"
                                                                                data-countryID="112"
                                                                                data-countrysn="KZ">
                                                                                Kazakhstan</option>
                                                                                                                                                        <option value="Kenya"
                                                                                data-countryID="113"
                                                                                data-countrysn="KE">
                                                                                Kenya</option>
                                                                                                                                                        <option value="Kiribati"
                                                                                data-countryID="114"
                                                                                data-countrysn="KI">
                                                                                Kiribati</option>
                                                                                                                                                        <option value="North Korea"
                                                                                data-countryID="115"
                                                                                data-countrysn="KP">
                                                                                North Korea</option>
                                                                                                                                                        <option value="South Korea"
                                                                                data-countryID="116"
                                                                                data-countrysn="KR">
                                                                                South Korea</option>
                                                                                                                                                        <option value="Kuwait"
                                                                                data-countryID="117"
                                                                                data-countrysn="KW">
                                                                                Kuwait</option>
                                                                                                                                                        <option value="Kyrgyzstan"
                                                                                data-countryID="118"
                                                                                data-countrysn="KG">
                                                                                Kyrgyzstan</option>
                                                                                                                                                        <option value="Laos"
                                                                                data-countryID="119"
                                                                                data-countrysn="LA">
                                                                                Laos</option>
                                                                                                                                                        <option value="Latvia"
                                                                                data-countryID="120"
                                                                                data-countrysn="LV">
                                                                                Latvia</option>
                                                                                                                                                        <option value="Lebanon"
                                                                                data-countryID="121"
                                                                                data-countrysn="LB">
                                                                                Lebanon</option>
                                                                                                                                                        <option value="Lesotho"
                                                                                data-countryID="122"
                                                                                data-countrysn="LS">
                                                                                Lesotho</option>
                                                                                                                                                        <option value="Liberia"
                                                                                data-countryID="123"
                                                                                data-countrysn="LR">
                                                                                Liberia</option>
                                                                                                                                                        <option value="Libya"
                                                                                data-countryID="124"
                                                                                data-countrysn="LY">
                                                                                Libya</option>
                                                                                                                                                        <option value="Liechtenstein"
                                                                                data-countryID="125"
                                                                                data-countrysn="LI">
                                                                                Liechtenstein</option>
                                                                                                                                                        <option value="Lithuania"
                                                                                data-countryID="126"
                                                                                data-countrysn="LT">
                                                                                Lithuania</option>
                                                                                                                                                        <option value="Luxembourg"
                                                                                data-countryID="127"
                                                                                data-countrysn="LU">
                                                                                Luxembourg</option>
                                                                                                                                                        <option value="Macau S.A.R."
                                                                                data-countryID="128"
                                                                                data-countrysn="MO">
                                                                                Macau S.A.R.</option>
                                                                                                                                                        <option value="Macedonia"
                                                                                data-countryID="129"
                                                                                data-countrysn="MK">
                                                                                Macedonia</option>
                                                                                                                                                        <option value="Madagascar"
                                                                                data-countryID="130"
                                                                                data-countrysn="MG">
                                                                                Madagascar</option>
                                                                                                                                                        <option value="Malawi"
                                                                                data-countryID="131"
                                                                                data-countrysn="MW">
                                                                                Malawi</option>
                                                                                                                                                        <option value="Malaysia"
                                                                                data-countryID="132"
                                                                                data-countrysn="MY">
                                                                                Malaysia</option>
                                                                                                                                                        <option value="Maldives"
                                                                                data-countryID="133"
                                                                                data-countrysn="MV">
                                                                                Maldives</option>
                                                                                                                                                        <option value="Mali"
                                                                                data-countryID="134"
                                                                                data-countrysn="ML">
                                                                                Mali</option>
                                                                                                                                                        <option value="Malta"
                                                                                data-countryID="135"
                                                                                data-countrysn="MT">
                                                                                Malta</option>
                                                                                                                                                        <option value="Man (Isle of)"
                                                                                data-countryID="136"
                                                                                data-countrysn="IM">
                                                                                Man (Isle of)</option>
                                                                                                                                                        <option value="Marshall Islands"
                                                                                data-countryID="137"
                                                                                data-countrysn="MH">
                                                                                Marshall Islands</option>
                                                                                                                                                        <option value="Martinique"
                                                                                data-countryID="138"
                                                                                data-countrysn="MQ">
                                                                                Martinique</option>
                                                                                                                                                        <option value="Mauritania"
                                                                                data-countryID="139"
                                                                                data-countrysn="MR">
                                                                                Mauritania</option>
                                                                                                                                                        <option value="Mauritius"
                                                                                data-countryID="140"
                                                                                data-countrysn="MU">
                                                                                Mauritius</option>
                                                                                                                                                        <option value="Mayotte"
                                                                                data-countryID="141"
                                                                                data-countrysn="YT">
                                                                                Mayotte</option>
                                                                                                                                                        <option value="Mexico"
                                                                                data-countryID="142"
                                                                                data-countrysn="MX">
                                                                                Mexico</option>
                                                                                                                                                        <option value="Micronesia"
                                                                                data-countryID="143"
                                                                                data-countrysn="FM">
                                                                                Micronesia</option>
                                                                                                                                                        <option value="Moldova"
                                                                                data-countryID="144"
                                                                                data-countrysn="MD">
                                                                                Moldova</option>
                                                                                                                                                        <option value="Monaco"
                                                                                data-countryID="145"
                                                                                data-countrysn="MC">
                                                                                Monaco</option>
                                                                                                                                                        <option value="Mongolia"
                                                                                data-countryID="146"
                                                                                data-countrysn="MN">
                                                                                Mongolia</option>
                                                                                                                                                        <option value="Montenegro"
                                                                                data-countryID="147"
                                                                                data-countrysn="ME">
                                                                                Montenegro</option>
                                                                                                                                                        <option value="Montserrat"
                                                                                data-countryID="148"
                                                                                data-countrysn="MS">
                                                                                Montserrat</option>
                                                                                                                                                        <option value="Morocco"
                                                                                data-countryID="149"
                                                                                data-countrysn="MA">
                                                                                Morocco</option>
                                                                                                                                                        <option value="Mozambique"
                                                                                data-countryID="150"
                                                                                data-countrysn="MZ">
                                                                                Mozambique</option>
                                                                                                                                                        <option value="Myanmar"
                                                                                data-countryID="151"
                                                                                data-countrysn="MM">
                                                                                Myanmar</option>
                                                                                                                                                        <option value="Namibia"
                                                                                data-countryID="152"
                                                                                data-countrysn="NA">
                                                                                Namibia</option>
                                                                                                                                                        <option value="Nauru"
                                                                                data-countryID="153"
                                                                                data-countrysn="NR">
                                                                                Nauru</option>
                                                                                                                                                        <option value="Nepal"
                                                                                data-countryID="154"
                                                                                data-countrysn="NP">
                                                                                Nepal</option>
                                                                                                                                                        <option value="Bonaire, Sint Eustatius and Saba"
                                                                                data-countryID="155"
                                                                                data-countrysn="BQ">
                                                                                Bonaire, Sint Eustatius and Saba</option>
                                                                                                                                                        <option value="Netherlands"
                                                                                data-countryID="156"
                                                                                data-countrysn="NL">
                                                                                Netherlands</option>
                                                                                                                                                        <option value="New Caledonia"
                                                                                data-countryID="157"
                                                                                data-countrysn="NC">
                                                                                New Caledonia</option>
                                                                                                                                                        <option value="New Zealand"
                                                                                data-countryID="158"
                                                                                data-countrysn="NZ">
                                                                                New Zealand</option>
                                                                                                                                                        <option value="Nicaragua"
                                                                                data-countryID="159"
                                                                                data-countrysn="NI">
                                                                                Nicaragua</option>
                                                                                                                                                        <option value="Niger"
                                                                                data-countryID="160"
                                                                                data-countrysn="NE">
                                                                                Niger</option>
                                                                                                                                                        <option value="Nigeria"
                                                                                data-countryID="161"
                                                                                data-countrysn="NG">
                                                                                Nigeria</option>
                                                                                                                                                        <option value="Niue"
                                                                                data-countryID="162"
                                                                                data-countrysn="NU">
                                                                                Niue</option>
                                                                                                                                                        <option value="Norfolk Island"
                                                                                data-countryID="163"
                                                                                data-countrysn="NF">
                                                                                Norfolk Island</option>
                                                                                                                                                        <option value="Northern Mariana Islands"
                                                                                data-countryID="164"
                                                                                data-countrysn="MP">
                                                                                Northern Mariana Islands</option>
                                                                                                                                                        <option value="Norway"
                                                                                data-countryID="165"
                                                                                data-countrysn="NO">
                                                                                Norway</option>
                                                                                                                                                        <option value="Oman"
                                                                                data-countryID="166"
                                                                                data-countrysn="OM">
                                                                                Oman</option>
                                                                                                                                                        <option value="Pakistan"
                                                                                data-countryID="167"
                                                                                data-countrysn="PK">
                                                                                Pakistan</option>
                                                                                                                                                        <option value="Palau"
                                                                                data-countryID="168"
                                                                                data-countrysn="PW">
                                                                                Palau</option>
                                                                                                                                                        <option value="Palestinian Territory Occupied"
                                                                                data-countryID="169"
                                                                                data-countrysn="PS">
                                                                                Palestinian Territory Occupied</option>
                                                                                                                                                        <option value="Panama"
                                                                                data-countryID="170"
                                                                                data-countrysn="PA">
                                                                                Panama</option>
                                                                                                                                                        <option value="Papua new Guinea"
                                                                                data-countryID="171"
                                                                                data-countrysn="PG">
                                                                                Papua new Guinea</option>
                                                                                                                                                        <option value="Paraguay"
                                                                                data-countryID="172"
                                                                                data-countrysn="PY">
                                                                                Paraguay</option>
                                                                                                                                                        <option value="Peru"
                                                                                data-countryID="173"
                                                                                data-countrysn="PE">
                                                                                Peru</option>
                                                                                                                                                        <option value="Philippines"
                                                                                data-countryID="174"
                                                                                data-countrysn="PH">
                                                                                Philippines</option>
                                                                                                                                                        <option value="Pitcairn Island"
                                                                                data-countryID="175"
                                                                                data-countrysn="PN">
                                                                                Pitcairn Island</option>
                                                                                                                                                        <option value="Poland"
                                                                                data-countryID="176"
                                                                                data-countrysn="PL">
                                                                                Poland</option>
                                                                                                                                                        <option value="Portugal"
                                                                                data-countryID="177"
                                                                                data-countrysn="PT">
                                                                                Portugal</option>
                                                                                                                                                        <option value="Puerto Rico"
                                                                                data-countryID="178"
                                                                                data-countrysn="PR">
                                                                                Puerto Rico</option>
                                                                                                                                                        <option value="Qatar"
                                                                                data-countryID="179"
                                                                                data-countrysn="QA">
                                                                                Qatar</option>
                                                                                                                                                        <option value="Reunion"
                                                                                data-countryID="180"
                                                                                data-countrysn="RE">
                                                                                Reunion</option>
                                                                                                                                                        <option value="Romania"
                                                                                data-countryID="181"
                                                                                data-countrysn="RO">
                                                                                Romania</option>
                                                                                                                                                        <option value="Russia"
                                                                                data-countryID="182"
                                                                                data-countrysn="RU">
                                                                                Russia</option>
                                                                                                                                                        <option value="Rwanda"
                                                                                data-countryID="183"
                                                                                data-countrysn="RW">
                                                                                Rwanda</option>
                                                                                                                                                        <option value="Saint Helena"
                                                                                data-countryID="184"
                                                                                data-countrysn="SH">
                                                                                Saint Helena</option>
                                                                                                                                                        <option value="Saint Kitts And Nevis"
                                                                                data-countryID="185"
                                                                                data-countrysn="KN">
                                                                                Saint Kitts And Nevis</option>
                                                                                                                                                        <option value="Saint Lucia"
                                                                                data-countryID="186"
                                                                                data-countrysn="LC">
                                                                                Saint Lucia</option>
                                                                                                                                                        <option value="Saint Pierre and Miquelon"
                                                                                data-countryID="187"
                                                                                data-countrysn="PM">
                                                                                Saint Pierre and Miquelon</option>
                                                                                                                                                        <option value="Saint Vincent And The Grenadines"
                                                                                data-countryID="188"
                                                                                data-countrysn="VC">
                                                                                Saint Vincent And The Grenadines</option>
                                                                                                                                                        <option value="Saint-Barthelemy"
                                                                                data-countryID="189"
                                                                                data-countrysn="BL">
                                                                                Saint-Barthelemy</option>
                                                                                                                                                        <option value="Saint-Martin (French part)"
                                                                                data-countryID="190"
                                                                                data-countrysn="MF">
                                                                                Saint-Martin (French part)</option>
                                                                                                                                                        <option value="Samoa"
                                                                                data-countryID="191"
                                                                                data-countrysn="WS">
                                                                                Samoa</option>
                                                                                                                                                        <option value="San Marino"
                                                                                data-countryID="192"
                                                                                data-countrysn="SM">
                                                                                San Marino</option>
                                                                                                                                                        <option value="Sao Tome and Principe"
                                                                                data-countryID="193"
                                                                                data-countrysn="ST">
                                                                                Sao Tome and Principe</option>
                                                                                                                                                        <option value="Saudi Arabia"
                                                                                data-countryID="194"
                                                                                data-countrysn="SA">
                                                                                Saudi Arabia</option>
                                                                                                                                                        <option value="Senegal"
                                                                                data-countryID="195"
                                                                                data-countrysn="SN">
                                                                                Senegal</option>
                                                                                                                                                        <option value="Serbia"
                                                                                data-countryID="196"
                                                                                data-countrysn="RS">
                                                                                Serbia</option>
                                                                                                                                                        <option value="Seychelles"
                                                                                data-countryID="197"
                                                                                data-countrysn="SC">
                                                                                Seychelles</option>
                                                                                                                                                        <option value="Sierra Leone"
                                                                                data-countryID="198"
                                                                                data-countrysn="SL">
                                                                                Sierra Leone</option>
                                                                                                                                                        <option value="Singapore"
                                                                                data-countryID="199"
                                                                                data-countrysn="SG">
                                                                                Singapore</option>
                                                                                                                                                        <option value="Slovakia"
                                                                                data-countryID="200"
                                                                                data-countrysn="SK">
                                                                                Slovakia</option>
                                                                                                                                                        <option value="Slovenia"
                                                                                data-countryID="201"
                                                                                data-countrysn="SI">
                                                                                Slovenia</option>
                                                                                                                                                        <option value="Solomon Islands"
                                                                                data-countryID="202"
                                                                                data-countrysn="SB">
                                                                                Solomon Islands</option>
                                                                                                                                                        <option value="Somalia"
                                                                                data-countryID="203"
                                                                                data-countrysn="SO">
                                                                                Somalia</option>
                                                                                                                                                        <option value="South Africa"
                                                                                data-countryID="204"
                                                                                data-countrysn="ZA">
                                                                                South Africa</option>
                                                                                                                                                        <option value="South Georgia"
                                                                                data-countryID="205"
                                                                                data-countrysn="GS">
                                                                                South Georgia</option>
                                                                                                                                                        <option value="South Sudan"
                                                                                data-countryID="206"
                                                                                data-countrysn="SS">
                                                                                South Sudan</option>
                                                                                                                                                        <option value="Spain"
                                                                                data-countryID="207"
                                                                                data-countrysn="ES">
                                                                                Spain</option>
                                                                                                                                                        <option value="Sri Lanka"
                                                                                data-countryID="208"
                                                                                data-countrysn="LK">
                                                                                Sri Lanka</option>
                                                                                                                                                        <option value="Sudan"
                                                                                data-countryID="209"
                                                                                data-countrysn="SD">
                                                                                Sudan</option>
                                                                                                                                                        <option value="Suriname"
                                                                                data-countryID="210"
                                                                                data-countrysn="SR">
                                                                                Suriname</option>
                                                                                                                                                        <option value="Svalbard And Jan Mayen Islands"
                                                                                data-countryID="211"
                                                                                data-countrysn="SJ">
                                                                                Svalbard And Jan Mayen Islands</option>
                                                                                                                                                        <option value="Swaziland"
                                                                                data-countryID="212"
                                                                                data-countrysn="SZ">
                                                                                Swaziland</option>
                                                                                                                                                        <option value="Sweden"
                                                                                data-countryID="213"
                                                                                data-countrysn="SE">
                                                                                Sweden</option>
                                                                                                                                                        <option value="Switzerland"
                                                                                data-countryID="214"
                                                                                data-countrysn="CH">
                                                                                Switzerland</option>
                                                                                                                                                        <option value="Syria"
                                                                                data-countryID="215"
                                                                                data-countrysn="SY">
                                                                                Syria</option>
                                                                                                                                                        <option value="Taiwan"
                                                                                data-countryID="216"
                                                                                data-countrysn="TW">
                                                                                Taiwan</option>
                                                                                                                                                        <option value="Tajikistan"
                                                                                data-countryID="217"
                                                                                data-countrysn="TJ">
                                                                                Tajikistan</option>
                                                                                                                                                        <option value="Tanzania"
                                                                                data-countryID="218"
                                                                                data-countrysn="TZ">
                                                                                Tanzania</option>
                                                                                                                                                        <option value="Thailand"
                                                                                data-countryID="219"
                                                                                data-countrysn="TH">
                                                                                Thailand</option>
                                                                                                                                                        <option value="Togo"
                                                                                data-countryID="220"
                                                                                data-countrysn="TG">
                                                                                Togo</option>
                                                                                                                                                        <option value="Tokelau"
                                                                                data-countryID="221"
                                                                                data-countrysn="TK">
                                                                                Tokelau</option>
                                                                                                                                                        <option value="Tonga"
                                                                                data-countryID="222"
                                                                                data-countrysn="TO">
                                                                                Tonga</option>
                                                                                                                                                        <option value="Trinidad And Tobago"
                                                                                data-countryID="223"
                                                                                data-countrysn="TT">
                                                                                Trinidad And Tobago</option>
                                                                                                                                                        <option value="Tunisia"
                                                                                data-countryID="224"
                                                                                data-countrysn="TN">
                                                                                Tunisia</option>
                                                                                                                                                        <option value="Turkey"
                                                                                data-countryID="225"
                                                                                data-countrysn="TR">
                                                                                Turkey</option>
                                                                                                                                                        <option value="Turkmenistan"
                                                                                data-countryID="226"
                                                                                data-countrysn="TM">
                                                                                Turkmenistan</option>
                                                                                                                                                        <option value="Turks And Caicos Islands"
                                                                                data-countryID="227"
                                                                                data-countrysn="TC">
                                                                                Turks And Caicos Islands</option>
                                                                                                                                                        <option value="Tuvalu"
                                                                                data-countryID="228"
                                                                                data-countrysn="TV">
                                                                                Tuvalu</option>
                                                                                                                                                        <option value="Uganda"
                                                                                data-countryID="229"
                                                                                data-countrysn="UG">
                                                                                Uganda</option>
                                                                                                                                                        <option value="Ukraine"
                                                                                data-countryID="230"
                                                                                data-countrysn="UA">
                                                                                Ukraine</option>
                                                                                                                                                        <option value="United States"
                                                                                data-countryID="233"
                                                                                data-countrysn="US">
                                                                                United States</option>
                                                                                                                                                        <option value="United States Minor Outlying Islands"
                                                                                data-countryID="234"
                                                                                data-countrysn="UM">
                                                                                United States Minor Outlying Islands</option>
                                                                                                                                                        <option value="Uruguay"
                                                                                data-countryID="235"
                                                                                data-countrysn="UY">
                                                                                Uruguay</option>
                                                                                                                                                        <option value="Uzbekistan"
                                                                                data-countryID="236"
                                                                                data-countrysn="UZ">
                                                                                Uzbekistan</option>
                                                                                                                                                        <option value="Vanuatu"
                                                                                data-countryID="237"
                                                                                data-countrysn="VU">
                                                                                Vanuatu</option>
                                                                                                                                                        <option value="Vatican City State (Holy See)"
                                                                                data-countryID="238"
                                                                                data-countrysn="VA">
                                                                                Vatican City State (Holy See)</option>
                                                                                                                                                        <option value="Venezuela"
                                                                                data-countryID="239"
                                                                                data-countrysn="VE">
                                                                                Venezuela</option>
                                                                                                                                                        <option value="Vietnam"
                                                                                data-countryID="240"
                                                                                data-countrysn="VN">
                                                                                Vietnam</option>
                                                                                                                                                        <option value="Virgin Islands (British)"
                                                                                data-countryID="241"
                                                                                data-countrysn="VG">
                                                                                Virgin Islands (British)</option>
                                                                                                                                                        <option value="Virgin Islands (US)"
                                                                                data-countryID="242"
                                                                                data-countrysn="VI">
                                                                                Virgin Islands (US)</option>
                                                                                                                                                        <option value="Wallis And Futuna Islands"
                                                                                data-countryID="243"
                                                                                data-countrysn="WF">
                                                                                Wallis And Futuna Islands</option>
                                                                                                                                                        <option value="Western Sahara"
                                                                                data-countryID="244"
                                                                                data-countrysn="EH">
                                                                                Western Sahara</option>
                                                                                                                                                        <option value="Yemen"
                                                                                data-countryID="245"
                                                                                data-countrysn="YE">
                                                                                Yemen</option>
                                                                                                                                                        <option value="Zambia"
                                                                                data-countryID="246"
                                                                                data-countrysn="ZM">
                                                                                Zambia</option>
                                                                                                                                                        <option value="Zimbabwe"
                                                                                data-countryID="247"
                                                                                data-countrysn="ZW">
                                                                                Zimbabwe</option>
                                                                                                                                                        <option value="Kosovo"
                                                                                data-countryID="248"
                                                                                data-countrysn="XK">
                                                                                Kosovo</option>
                                                                                                                                                        <option value="Curaçao"
                                                                                data-countryID="249"
                                                                                data-countrysn="CW">
                                                                                Curaçao</option>
                                                                                                                                                        <option value="Sint Maarten (Dutch part)"
                                                                                data-countryID="250"
                                                                                data-countrysn="SX">
                                                                                Sint Maarten (Dutch part)</option>
                                                                                                                                                    </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label>State</label> <span class='red'>*</span>
                                                                        <!-- <input type="text" name="state" value="" placeholder="Enter State"> -->
                                                                        <select name="state" class="form-data state"
                                                                            id="newstate">
                                                                            <option value="">-state-</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>City</label> <span
                                                                                class='red'>*</span>
                                                                            <!-- <input type="text" name="city" value="" placeholder="Enter city"> -->
                                                                            <select name="city" id="city"
                                                                                class="form-data city">
                                                                                <option value="">-city-</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Zip Code</label> <span
                                                                            class='red'>*</span>
                                                                        <input type="text" name="zip_code"
                                                                            id="zip_code" class="" value=""
                                                                            placeholder="Enter Zip Code" maxlength="6">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label>Phone Number</label> <span
                                                                            class='red'>*</span>
                                                                        <input type="text" name="phone_number"
                                                                            value=""
                                                                            placeholder="Enter phone number"
                                                                            maxlength="10">

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="">
                                                        <div class="summary-details billing-tite">
                                                            <h2>Billing Address</h2>
                                                        </div>
                                                        <div class="rightsideaccbar" style="padding: 10px 25px;">
                                                            <div class="control-group" id="service_one">
                                                                <label class="control control-radio">
                                                                    Same as Shipping Address
                                                                    <input type="radio" name="billing_type"
                                                                        checked="checked" class="billing_type"
                                                                        value="1" id="service_one_id">
                                                                    <div class="control_indicator"></div>
                                                                </label>

                                                            </div>

                                                            <div class="control-group" id="service_two">
                                                                <label class="control control-radio">
                                                                    Add new Address
                                                                    <input type="radio" name="billing_type"
                                                                        value="0" class="billing_type"
                                                                        id="service_two_id">
                                                                    <div class="control_indicator"></div>
                                                                </label>
                                                            </div>


                                                        </div>


                                                        <div class="element defaultadd-content guest_user_billing hide">
                                                            <div class="unsaveadd">

                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Name</label> <span
                                                                                class='red'>*</span>
                                                                            <input type="text" id="save-name"
                                                                                name="guest_user_billing_name"
                                                                                value="" placeholder="Enter name">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Apartment/Suite</label> <span
                                                                                class='red'>*</span>
                                                                            <input type="text"
                                                                                name="guest_user_billing_apartment"
                                                                                placeholder="Enter Apartment/Suite"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Address</label> <span
                                                                                class='red'>*</span>
                                                                            <input type="text"
                                                                                name="guest_user_billing_address"
                                                                                value=""
                                                                                placeholder="Enter Address">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>Country</label> <span
                                                                                class='red'>*</span>
                                                                            <!-- <input type="text" name="country" value="" placeholder="Enter Country"> -->
                                                                            <select name="country"
                                                                                class="form-data country" id="newcountry">
                                                                                <option value="country">-Select country-
                                                                                </option>
                                                                                 <option value="Aland Islands"
                                                                                    data-countryID="2"
                                                                                    data-countrysn="AX">
                                                                                    Aland Islands
                                                                                </option>
                                                                                 <option value="Albania"
                                                                                    data-countryID="3"
                                                                                    data-countrysn="AL">
                                                                                    Albania
                                                                                </option>
                                                                               <option value="Algeria"
                                                                                    data-countryID="4"
                                                                                    data-countrysn="DZ">
                                                                                    Algeria
                                                                                </option>
                                                                                <option value="American Samoa"
                                                                                    data-countryID="5"
                                                                                    data-countrysn="AS">
                                                                                    American Samoa
                                                                                </option>
                                                                                 <option value="Andorra"
                                                                                    data-countryID="6"
                                                                                    data-countrysn="AD">
                                                                                    Andorra
                                                                                </option>
                                                                                 <option value="Angola"
                                                                                    data-countryID="7"
                                                                                    data-countrysn="AO">
                                                                                    Angola
                                                                                </option>
                                                                                <option value="Anguilla"
                                                                                    data-countryID="8"
                                                                                    data-countrysn="AI">
                                                                                    Anguilla
                                                                                </option>
                                                                                 <option value="Antarctica"
                                                                                    data-countryID="9"
                                                                                    data-countrysn="AQ">
                                                                                    Antarctica
                                                                                </option>
                                                                             <option value="Antigua And Barbuda"
                                                                                    data-countryID="10"
                                                                                    data-countrysn="AG">
                                                                                    Antigua And Barbuda
                                                                                </option>
                                                                                <option value="Argentina"
                                                                                    data-countryID="11"
                                                                                    data-countrysn="AR">
                                                                                    Argentina
                                                                                </option>
                                                                                 <option value="Armenia"
                                                                                    data-countryID="12"
                                                                                    data-countrysn="AM">
                                                                                    Armenia
                                                                                </option>
                                                                                <option value="Aruba"
                                                                                    data-countryID="13"
                                                                                    data-countrysn="AW">
                                                                                    Aruba
                                                                                </option>
                                                                                <option value="Australia"
                                                                                    data-countryID="14"
                                                                                    data-countrysn="AU">
                                                                                    Australia
                                                                                </option>
                                                                                 <option value="Austria"
                                                                                    data-countryID="15"
                                                                                    data-countrysn="AT">
                                                                                    Austria
                                                                                </option>
                                                                                <option value="Azerbaijan"
                                                                                    data-countryID="16"
                                                                                    data-countrysn="AZ">
                                                                                    Azerbaijan
                                                                                </option>
                                                                                 <option value="Bahamas The"
                                                                                    data-countryID="17"
                                                                                    data-countrysn="BS">
                                                                                    Bahamas The
                                                                                </option>
                                                                                 <option value="Bahrain"
                                                                                    data-countryID="18"
                                                                                    data-countrysn="BH">
                                                                                    Bahrain
                                                                                </option>
                                                                                <option value="Bangladesh"
                                                                                    data-countryID="19"
                                                                                    data-countrysn="BD">
                                                                                    Bangladesh
                                                                                </option>
                                                                                 <option value="Barbados"
                                                                                    data-countryID="20"
                                                                                    data-countrysn="BB">
                                                                                    Barbados
                                                                                </option>
                                                                                <option value="Belarus"
                                                                                    data-countryID="21"
                                                                                    data-countrysn="BY">
                                                                                    Belarus
                                                                                </option>
                                                                                  <option value="Belgium"
                                                                                    data-countryID="22"
                                                                                    data-countrysn="BE">
                                                                                    Belgium
                                                                                </option>
                                                                                 <option value="Belize"
                                                                                    data-countryID="23"
                                                                                    data-countrysn="BZ">
                                                                                    Belize
                                                                                </option>
                                                                                <option value="Benin"
                                                                                    data-countryID="24"
                                                                                    data-countrysn="BJ">
                                                                                    Benin
                                                                                </option>
                                                                               <option value="Bermuda"
                                                                                    data-countryID="25"
                                                                                    data-countrysn="BM">
                                                                                    Bermuda
                                                                                </option>
                                                                                <option value="Bhutan"
                                                                                    data-countryID="26"
                                                                                    data-countrysn="BT">
                                                                                    Bhutan
                                                                                </option>
                                                                             <option value="Bolivia"
                                                                                    data-countryID="27"
                                                                                    data-countrysn="BO">
                                                                                    Bolivia
                                                                                </option>
                                                                                <option value="Bosnia and Herzegovina"
                                                                                    data-countryID="28"
                                                                                    data-countrysn="BA">
                                                                                    Bosnia and Herzegovina
                                                                                </option>
                                                                                                                                                                <option value="Botswana"
                                                                                    data-countryID="29"
                                                                                    data-countrysn="BW">
                                                                                    Botswana
                                                                                </option>
                                                                                                                                                                <option value="Bouvet Island"
                                                                                    data-countryID="30"
                                                                                    data-countrysn="BV">
                                                                                    Bouvet Island
                                                                                </option>
                                                                                                                                                                <option value="Brazil"
                                                                                    data-countryID="31"
                                                                                    data-countrysn="BR">
                                                                                    Brazil
                                                                                </option>
                                                                                                                                                                <option value="British Indian Ocean Territory"
                                                                                    data-countryID="32"
                                                                                    data-countrysn="IO">
                                                                                    British Indian Ocean Territory
                                                                                </option>
                                                                                                                                                                <option value="Brunei"
                                                                                    data-countryID="33"
                                                                                    data-countrysn="BN">
                                                                                    Brunei
                                                                                </option>
                                                                                                                                                                <option value="Bulgaria"
                                                                                    data-countryID="34"
                                                                                    data-countrysn="BG">
                                                                                    Bulgaria
                                                                                </option>
                                                                                                                                                                <option value="Burkina Faso"
                                                                                    data-countryID="35"
                                                                                    data-countrysn="BF">
                                                                                    Burkina Faso
                                                                                </option>
                                                                                                                                                                <option value="Burundi"
                                                                                    data-countryID="36"
                                                                                    data-countrysn="BI">
                                                                                    Burundi
                                                                                </option>
                                                                                                                                                                <option value="Cambodia"
                                                                                    data-countryID="37"
                                                                                    data-countrysn="KH">
                                                                                    Cambodia
                                                                                </option>
                                                                                                                                                                <option value="Cameroon"
                                                                                    data-countryID="38"
                                                                                    data-countrysn="CM">
                                                                                    Cameroon
                                                                                </option>
                                                                                                                                                                <option value="Canada"
                                                                                    data-countryID="39"
                                                                                    data-countrysn="CA">
                                                                                    Canada
                                                                                </option>
                                                                                                                                                                <option value="Cape Verde"
                                                                                    data-countryID="40"
                                                                                    data-countrysn="CV">
                                                                                    Cape Verde
                                                                                </option>
                                                                                                                                                                <option value="Cayman Islands"
                                                                                    data-countryID="41"
                                                                                    data-countrysn="KY">
                                                                                    Cayman Islands
                                                                                </option>
                                                                                                                                                                <option value="Central African Republic"
                                                                                    data-countryID="42"
                                                                                    data-countrysn="CF">
                                                                                    Central African Republic
                                                                                </option>
                                                                                                                                                                <option value="Chad"
                                                                                    data-countryID="43"
                                                                                    data-countrysn="TD">
                                                                                    Chad
                                                                                </option>
                                                                                                                                                                <option value="Chile"
                                                                                    data-countryID="44"
                                                                                    data-countrysn="CL">
                                                                                    Chile
                                                                                </option>
                                                                                                                                                                <option value="China"
                                                                                    data-countryID="45"
                                                                                    data-countrysn="CN">
                                                                                    China
                                                                                </option>
                                                                                                                                                                <option value="Christmas Island"
                                                                                    data-countryID="46"
                                                                                    data-countrysn="CX">
                                                                                    Christmas Island
                                                                                </option>
                                                                                                                                                                <option value="Cocos (Keeling) Islands"
                                                                                    data-countryID="47"
                                                                                    data-countrysn="CC">
                                                                                    Cocos (Keeling) Islands
                                                                                </option>
                                                                                                                                                                <option value="Colombia"
                                                                                    data-countryID="48"
                                                                                    data-countrysn="CO">
                                                                                    Colombia
                                                                                </option>
                                                                                                                                                                <option value="Comoros"
                                                                                    data-countryID="49"
                                                                                    data-countrysn="KM">
                                                                                    Comoros
                                                                                </option>
                                                                                                                                                                <option value="Congo"
                                                                                    data-countryID="50"
                                                                                    data-countrysn="CG">
                                                                                    Congo
                                                                                </option>
                                                                                                                                                                <option value="Democratic Republic of the Congo"
                                                                                    data-countryID="51"
                                                                                    data-countrysn="CD">
                                                                                    Democratic Republic of the Congo
                                                                                </option>
                                                                                                                                                                <option value="Cook Islands"
                                                                                    data-countryID="52"
                                                                                    data-countrysn="CK">
                                                                                    Cook Islands
                                                                                </option>
                                                                                                                                                                <option value="Costa Rica"
                                                                                    data-countryID="53"
                                                                                    data-countrysn="CR">
                                                                                    Costa Rica
                                                                                </option>
                                                                                                                                                                <option value="Cote D&#039;Ivoire (Ivory Coast)"
                                                                                    data-countryID="54"
                                                                                    data-countrysn="CI">
                                                                                    Cote D&#039;Ivoire (Ivory Coast)
                                                                                </option>
                                                                                                                                                                <option value="Croatia"
                                                                                    data-countryID="55"
                                                                                    data-countrysn="HR">
                                                                                    Croatia
                                                                                </option>
                                                                                                                                                                <option value="Cuba"
                                                                                    data-countryID="56"
                                                                                    data-countrysn="CU">
                                                                                    Cuba
                                                                                </option>
                                                                                                                                                                <option value="Cyprus"
                                                                                    data-countryID="57"
                                                                                    data-countrysn="CY">
                                                                                    Cyprus
                                                                                </option>
                                                                                                                                                                <option value="Czech Republic"
                                                                                    data-countryID="58"
                                                                                    data-countrysn="CZ">
                                                                                    Czech Republic
                                                                                </option>
                                                                                                                                                                <option value="Denmark"
                                                                                    data-countryID="59"
                                                                                    data-countrysn="DK">
                                                                                    Denmark
                                                                                </option>
                                                                                                                                                                <option value="Djibouti"
                                                                                    data-countryID="60"
                                                                                    data-countrysn="DJ">
                                                                                    Djibouti
                                                                                </option>
                                                                                                                                                                <option value="Dominica"
                                                                                    data-countryID="61"
                                                                                    data-countrysn="DM">
                                                                                    Dominica
                                                                                </option>
                                                                                                                                                                <option value="Dominican Republic"
                                                                                    data-countryID="62"
                                                                                    data-countrysn="DO">
                                                                                    Dominican Republic
                                                                                </option>
                                                                                                                                                                <option value="East Timor"
                                                                                    data-countryID="63"
                                                                                    data-countrysn="TL">
                                                                                    East Timor
                                                                                </option>
                                                                                                                                                                <option value="Ecuador"
                                                                                    data-countryID="64"
                                                                                    data-countrysn="EC">
                                                                                    Ecuador
                                                                                </option>
                                                                                                                                                                <option value="Egypt"
                                                                                    data-countryID="65"
                                                                                    data-countrysn="EG">
                                                                                    Egypt
                                                                                </option>
                                                                                                                                                                <option value="El Salvador"
                                                                                    data-countryID="66"
                                                                                    data-countrysn="SV">
                                                                                    El Salvador
                                                                                </option>
                                                                                                                                                                <option value="Equatorial Guinea"
                                                                                    data-countryID="67"
                                                                                    data-countrysn="GQ">
                                                                                    Equatorial Guinea
                                                                                </option>
                                                                                                                                                                <option value="Eritrea"
                                                                                    data-countryID="68"
                                                                                    data-countrysn="ER">
                                                                                    Eritrea
                                                                                </option>
                                                                                                                                                                <option value="Estonia"
                                                                                    data-countryID="69"
                                                                                    data-countrysn="EE">
                                                                                    Estonia
                                                                                </option>
                                                                                                                                                                <option value="Ethiopia"
                                                                                    data-countryID="70"
                                                                                    data-countrysn="ET">
                                                                                    Ethiopia
                                                                                </option>
                                                                                                                                                                <option value="Falkland Islands"
                                                                                    data-countryID="71"
                                                                                    data-countrysn="FK">
                                                                                    Falkland Islands
                                                                                </option>
                                                                                                                                                                <option value="Faroe Islands"
                                                                                    data-countryID="72"
                                                                                    data-countrysn="FO">
                                                                                    Faroe Islands
                                                                                </option>
                                                                                                                                                                <option value="Fiji Islands"
                                                                                    data-countryID="73"
                                                                                    data-countrysn="FJ">
                                                                                    Fiji Islands
                                                                                </option>
                                                                                                                                                                <option value="Finland"
                                                                                    data-countryID="74"
                                                                                    data-countrysn="FI">
                                                                                    Finland
                                                                                </option>
                                                                                                                                                                <option value="France"
                                                                                    data-countryID="75"
                                                                                    data-countrysn="FR">
                                                                                    France
                                                                                </option>
                                                                                                                                                                <option value="French Guiana"
                                                                                    data-countryID="76"
                                                                                    data-countrysn="GF">
                                                                                    French Guiana
                                                                                </option>
                                                                                                                                                                <option value="French Polynesia"
                                                                                    data-countryID="77"
                                                                                    data-countrysn="PF">
                                                                                    French Polynesia
                                                                                </option>
                                                                                                                                                                <option value="French Southern Territories"
                                                                                    data-countryID="78"
                                                                                    data-countrysn="TF">
                                                                                    French Southern Territories
                                                                                </option>
                                                                                                                                                                <option value="Gabon"
                                                                                    data-countryID="79"
                                                                                    data-countrysn="GA">
                                                                                    Gabon
                                                                                </option>
                                                                                                                                                                <option value="Gambia The"
                                                                                    data-countryID="80"
                                                                                    data-countrysn="GM">
                                                                                    Gambia The
                                                                                </option>
                                                                                                                                                                <option value="Georgia"
                                                                                    data-countryID="81"
                                                                                    data-countrysn="GE">
                                                                                    Georgia
                                                                                </option>
                                                                                                                                                                <option value="Germany"
                                                                                    data-countryID="82"
                                                                                    data-countrysn="DE">
                                                                                    Germany
                                                                                </option>
                                                                                                                                                                <option value="Ghana"
                                                                                    data-countryID="83"
                                                                                    data-countrysn="GH">
                                                                                    Ghana
                                                                                </option>
                                                                                                                                                                <option value="Gibraltar"
                                                                                    data-countryID="84"
                                                                                    data-countrysn="GI">
                                                                                    Gibraltar
                                                                                </option>
                                                                                                                                                                <option value="Greece"
                                                                                    data-countryID="85"
                                                                                    data-countrysn="GR">
                                                                                    Greece
                                                                                </option>
                                                                                                                                                                <option value="Greenland"
                                                                                    data-countryID="86"
                                                                                    data-countrysn="GL">
                                                                                    Greenland
                                                                                </option>
                                                                                                                                                                <option value="Grenada"
                                                                                    data-countryID="87"
                                                                                    data-countrysn="GD">
                                                                                    Grenada
                                                                                </option>
                                                                                                                                                                <option value="Guadeloupe"
                                                                                    data-countryID="88"
                                                                                    data-countrysn="GP">
                                                                                    Guadeloupe
                                                                                </option>
                                                                                                                                                                <option value="Guam"
                                                                                    data-countryID="89"
                                                                                    data-countrysn="GU">
                                                                                    Guam
                                                                                </option>
                                                                                                                                                                <option value="Guatemala"
                                                                                    data-countryID="90"
                                                                                    data-countrysn="GT">
                                                                                    Guatemala
                                                                                </option>
                                                                                                                                                                <option value="Guernsey and Alderney"
                                                                                    data-countryID="91"
                                                                                    data-countrysn="GG">
                                                                                    Guernsey and Alderney
                                                                                </option>
                                                                                                                                                                <option value="Guinea"
                                                                                    data-countryID="92"
                                                                                    data-countrysn="GN">
                                                                                    Guinea
                                                                                </option>
                                                                                                                                                                <option value="Guinea-Bissau"
                                                                                    data-countryID="93"
                                                                                    data-countrysn="GW">
                                                                                    Guinea-Bissau
                                                                                </option>
                                                                                                                                                                <option value="Guyana"
                                                                                    data-countryID="94"
                                                                                    data-countrysn="GY">
                                                                                    Guyana
                                                                                </option>
                                                                                                                                                                <option value="Haiti"
                                                                                    data-countryID="95"
                                                                                    data-countrysn="HT">
                                                                                    Haiti
                                                                                </option>
                                                                                                                                                                <option value="Heard Island and McDonald Islands"
                                                                                    data-countryID="96"
                                                                                    data-countrysn="HM">
                                                                                    Heard Island and McDonald Islands
                                                                                </option>
                                                                                                                                                                <option value="Honduras"
                                                                                    data-countryID="97"
                                                                                    data-countrysn="HN">
                                                                                    Honduras
                                                                                </option>
                                                                                                                                                                <option value="Hong Kong S.A.R."
                                                                                    data-countryID="98"
                                                                                    data-countrysn="HK">
                                                                                    Hong Kong S.A.R.
                                                                                </option>
                                                                                                                                                                <option value="Hungary"
                                                                                    data-countryID="99"
                                                                                    data-countrysn="HU">
                                                                                    Hungary
                                                                                </option>
                                                                                                                                                                <option value="Iceland"
                                                                                    data-countryID="100"
                                                                                    data-countrysn="IS">
                                                                                    Iceland
                                                                                </option>
                                                                                                                                                                <option value="India"
                                                                                    data-countryID="101"
                                                                                    data-countrysn="IN">
                                                                                    India
                                                                                </option>
                                                                                                                                                                <option value="Indonesia"
                                                                                    data-countryID="102"
                                                                                    data-countrysn="ID">
                                                                                    Indonesia
                                                                                </option>
                                                                                                                                                                <option value="Iran"
                                                                                    data-countryID="103"
                                                                                    data-countrysn="IR">
                                                                                    Iran
                                                                                </option>
                                                                                                                                                                <option value="Iraq"
                                                                                    data-countryID="104"
                                                                                    data-countrysn="IQ">
                                                                                    Iraq
                                                                                </option>
                                                                                                                                                                <option value="Ireland"
                                                                                    data-countryID="105"
                                                                                    data-countrysn="IE">
                                                                                    Ireland
                                                                                </option>
                                                                                                                                                                <option value="Israel"
                                                                                    data-countryID="106"
                                                                                    data-countrysn="IL">
                                                                                    Israel
                                                                                </option>
                                                                                                                                                                <option value="Italy"
                                                                                    data-countryID="107"
                                                                                    data-countrysn="IT">
                                                                                    Italy
                                                                                </option>
                                                                                                                                                                <option value="Jamaica"
                                                                                    data-countryID="108"
                                                                                    data-countrysn="JM">
                                                                                    Jamaica
                                                                                </option>
                                                                                                                                                                <option value="Japan"
                                                                                    data-countryID="109"
                                                                                    data-countrysn="JP">
                                                                                    Japan
                                                                                </option>
                                                                                                                                                                <option value="Jersey"
                                                                                    data-countryID="110"
                                                                                    data-countrysn="JE">
                                                                                    Jersey
                                                                                </option>
                                                                                                                                                                <option value="Jordan"
                                                                                    data-countryID="111"
                                                                                    data-countrysn="JO">
                                                                                    Jordan
                                                                                </option>
                                                                                                                                                                <option value="Kazakhstan"
                                                                                    data-countryID="112"
                                                                                    data-countrysn="KZ">
                                                                                    Kazakhstan
                                                                                </option>
                                                                                                                                                                <option value="Kenya"
                                                                                    data-countryID="113"
                                                                                    data-countrysn="KE">
                                                                                    Kenya
                                                                                </option>
                                                                                                                                                                <option value="Kiribati"
                                                                                    data-countryID="114"
                                                                                    data-countrysn="KI">
                                                                                    Kiribati
                                                                                </option>
                                                                                                                                                                <option value="North Korea"
                                                                                    data-countryID="115"
                                                                                    data-countrysn="KP">
                                                                                    North Korea
                                                                                </option>
                                                                                                                                                                <option value="South Korea"
                                                                                    data-countryID="116"
                                                                                    data-countrysn="KR">
                                                                                    South Korea
                                                                                </option>
                                                                                                                                                                <option value="Kuwait"
                                                                                    data-countryID="117"
                                                                                    data-countrysn="KW">
                                                                                    Kuwait
                                                                                </option>
                                                                                                                                                                <option value="Kyrgyzstan"
                                                                                    data-countryID="118"
                                                                                    data-countrysn="KG">
                                                                                    Kyrgyzstan
                                                                                </option>
                                                                                                                                                                <option value="Laos"
                                                                                    data-countryID="119"
                                                                                    data-countrysn="LA">
                                                                                    Laos
                                                                                </option>
                                                                                                                                                                <option value="Latvia"
                                                                                    data-countryID="120"
                                                                                    data-countrysn="LV">
                                                                                    Latvia
                                                                                </option>
                                                                                                                                                                <option value="Lebanon"
                                                                                    data-countryID="121"
                                                                                    data-countrysn="LB">
                                                                                    Lebanon
                                                                                </option>
                                                                                                                                                                <option value="Lesotho"
                                                                                    data-countryID="122"
                                                                                    data-countrysn="LS">
                                                                                    Lesotho
                                                                                </option>
                                                                                                                                                                <option value="Liberia"
                                                                                    data-countryID="123"
                                                                                    data-countrysn="LR">
                                                                                    Liberia
                                                                                </option>
                                                                                                                                                                <option value="Libya"
                                                                                    data-countryID="124"
                                                                                    data-countrysn="LY">
                                                                                    Libya
                                                                                </option>
                                                                                                                                                                <option value="Liechtenstein"
                                                                                    data-countryID="125"
                                                                                    data-countrysn="LI">
                                                                                    Liechtenstein
                                                                                </option>
                                                                                                                                                                <option value="Lithuania"
                                                                                    data-countryID="126"
                                                                                    data-countrysn="LT">
                                                                                    Lithuania
                                                                                </option>
                                                                                                                                                                <option value="Luxembourg"
                                                                                    data-countryID="127"
                                                                                    data-countrysn="LU">
                                                                                    Luxembourg
                                                                                </option>
                                                                                                                                                                <option value="Macau S.A.R."
                                                                                    data-countryID="128"
                                                                                    data-countrysn="MO">
                                                                                    Macau S.A.R.
                                                                                </option>
                                                                                                                                                                <option value="Macedonia"
                                                                                    data-countryID="129"
                                                                                    data-countrysn="MK">
                                                                                    Macedonia
                                                                                </option>
                                                                                                                                                                <option value="Madagascar"
                                                                                    data-countryID="130"
                                                                                    data-countrysn="MG">
                                                                                    Madagascar
                                                                                </option>
                                                                                                                                                                <option value="Malawi"
                                                                                    data-countryID="131"
                                                                                    data-countrysn="MW">
                                                                                    Malawi
                                                                                </option>
                                                                                                                                                                <option value="Malaysia"
                                                                                    data-countryID="132"
                                                                                    data-countrysn="MY">
                                                                                    Malaysia
                                                                                </option>
                                                                                                                                                                <option value="Maldives"
                                                                                    data-countryID="133"
                                                                                    data-countrysn="MV">
                                                                                    Maldives
                                                                                </option>
                                                                                                                                                                <option value="Mali"
                                                                                    data-countryID="134"
                                                                                    data-countrysn="ML">
                                                                                    Mali
                                                                                </option>
                                                                                                                                                                <option value="Malta"
                                                                                    data-countryID="135"
                                                                                    data-countrysn="MT">
                                                                                    Malta
                                                                                </option>
                                                                                                                                                                <option value="Man (Isle of)"
                                                                                    data-countryID="136"
                                                                                    data-countrysn="IM">
                                                                                    Man (Isle of)
                                                                                </option>
                                                                                                                                                                <option value="Marshall Islands"
                                                                                    data-countryID="137"
                                                                                    data-countrysn="MH">
                                                                                    Marshall Islands
                                                                                </option>
                                                                                                                                                                <option value="Martinique"
                                                                                    data-countryID="138"
                                                                                    data-countrysn="MQ">
                                                                                    Martinique
                                                                                </option>
                                                                                                                                                                <option value="Mauritania"
                                                                                    data-countryID="139"
                                                                                    data-countrysn="MR">
                                                                                    Mauritania
                                                                                </option>
                                                                                                                                                                <option value="Mauritius"
                                                                                    data-countryID="140"
                                                                                    data-countrysn="MU">
                                                                                    Mauritius
                                                                                </option>
                                                                                                                                                                <option value="Mayotte"
                                                                                    data-countryID="141"
                                                                                    data-countrysn="YT">
                                                                                    Mayotte
                                                                                </option>
                                                                                                                                                                <option value="Mexico"
                                                                                    data-countryID="142"
                                                                                    data-countrysn="MX">
                                                                                    Mexico
                                                                                </option>
                                                                                                                                                                <option value="Micronesia"
                                                                                    data-countryID="143"
                                                                                    data-countrysn="FM">
                                                                                    Micronesia
                                                                                </option>
                                                                                                                                                                <option value="Moldova"
                                                                                    data-countryID="144"
                                                                                    data-countrysn="MD">
                                                                                    Moldova
                                                                                </option>
                                                                                                                                                                <option value="Monaco"
                                                                                    data-countryID="145"
                                                                                    data-countrysn="MC">
                                                                                    Monaco
                                                                                </option>
                                                                                                                                                                <option value="Mongolia"
                                                                                    data-countryID="146"
                                                                                    data-countrysn="MN">
                                                                                    Mongolia
                                                                                </option>
                                                                                                                                                                <option value="Montenegro"
                                                                                    data-countryID="147"
                                                                                    data-countrysn="ME">
                                                                                    Montenegro
                                                                                </option>
                                                                                                                                                                <option value="Montserrat"
                                                                                    data-countryID="148"
                                                                                    data-countrysn="MS">
                                                                                    Montserrat
                                                                                </option>
                                                                                                                                                                <option value="Morocco"
                                                                                    data-countryID="149"
                                                                                    data-countrysn="MA">
                                                                                    Morocco
                                                                                </option>
                                                                                                                                                                <option value="Mozambique"
                                                                                    data-countryID="150"
                                                                                    data-countrysn="MZ">
                                                                                    Mozambique
                                                                                </option>
                                                                                                                                                                <option value="Myanmar"
                                                                                    data-countryID="151"
                                                                                    data-countrysn="MM">
                                                                                    Myanmar
                                                                                </option>
                                                                                                                                                                <option value="Namibia"
                                                                                    data-countryID="152"
                                                                                    data-countrysn="NA">
                                                                                    Namibia
                                                                                </option>
                                                                                                                                                                <option value="Nauru"
                                                                                    data-countryID="153"
                                                                                    data-countrysn="NR">
                                                                                    Nauru
                                                                                </option>
                                                                                                                                                                <option value="Nepal"
                                                                                    data-countryID="154"
                                                                                    data-countrysn="NP">
                                                                                    Nepal
                                                                                </option>
                                                                                                                                                                <option value="Bonaire, Sint Eustatius and Saba"
                                                                                    data-countryID="155"
                                                                                    data-countrysn="BQ">
                                                                                    Bonaire, Sint Eustatius and Saba
                                                                                </option>
                                                                                                                                                                <option value="Netherlands"
                                                                                    data-countryID="156"
                                                                                    data-countrysn="NL">
                                                                                    Netherlands
                                                                                </option>
                                                                                                                                                                <option value="New Caledonia"
                                                                                    data-countryID="157"
                                                                                    data-countrysn="NC">
                                                                                    New Caledonia
                                                                                </option>
                                                                                                                                                                <option value="New Zealand"
                                                                                    data-countryID="158"
                                                                                    data-countrysn="NZ">
                                                                                    New Zealand
                                                                                </option>
                                                                                                                                                                <option value="Nicaragua"
                                                                                    data-countryID="159"
                                                                                    data-countrysn="NI">
                                                                                    Nicaragua
                                                                                </option>
                                                                                                                                                                <option value="Niger"
                                                                                    data-countryID="160"
                                                                                    data-countrysn="NE">
                                                                                    Niger
                                                                                </option>
                                                                                                                                                                <option value="Nigeria"
                                                                                    data-countryID="161"
                                                                                    data-countrysn="NG">
                                                                                    Nigeria
                                                                                </option>
                                                                                                                                                                <option value="Niue"
                                                                                    data-countryID="162"
                                                                                    data-countrysn="NU">
                                                                                    Niue
                                                                                </option>
                                                                                                                                                                <option value="Norfolk Island"
                                                                                    data-countryID="163"
                                                                                    data-countrysn="NF">
                                                                                    Norfolk Island
                                                                                </option>
                                                                                                                                                                <option value="Northern Mariana Islands"
                                                                                    data-countryID="164"
                                                                                    data-countrysn="MP">
                                                                                    Northern Mariana Islands
                                                                                </option>
                                                                                                                                                                <option value="Norway"
                                                                                    data-countryID="165"
                                                                                    data-countrysn="NO">
                                                                                    Norway
                                                                                </option>
                                                                                                                                                                <option value="Oman"
                                                                                    data-countryID="166"
                                                                                    data-countrysn="OM">
                                                                                    Oman
                                                                                </option>
                                                                                                                                                                <option value="Pakistan"
                                                                                    data-countryID="167"
                                                                                    data-countrysn="PK">
                                                                                    Pakistan
                                                                                </option>
                                                                                                                                                                <option value="Palau"
                                                                                    data-countryID="168"
                                                                                    data-countrysn="PW">
                                                                                    Palau
                                                                                </option>
                                                                                                                                                                <option value="Palestinian Territory Occupied"
                                                                                    data-countryID="169"
                                                                                    data-countrysn="PS">
                                                                                    Palestinian Territory Occupied
                                                                                </option>
                                                                                                                                                                <option value="Panama"
                                                                                    data-countryID="170"
                                                                                    data-countrysn="PA">
                                                                                    Panama
                                                                                </option>
                                                                                                                                                                <option value="Papua new Guinea"
                                                                                    data-countryID="171"
                                                                                    data-countrysn="PG">
                                                                                    Papua new Guinea
                                                                                </option>
                                                                                                                                                                <option value="Paraguay"
                                                                                    data-countryID="172"
                                                                                    data-countrysn="PY">
                                                                                    Paraguay
                                                                                </option>
                                                                                                                                                                <option value="Peru"
                                                                                    data-countryID="173"
                                                                                    data-countrysn="PE">
                                                                                    Peru
                                                                                </option>
                                                                                                                                                                <option value="Philippines"
                                                                                    data-countryID="174"
                                                                                    data-countrysn="PH">
                                                                                    Philippines
                                                                                </option>
                                                                                                                                                                <option value="Pitcairn Island"
                                                                                    data-countryID="175"
                                                                                    data-countrysn="PN">
                                                                                    Pitcairn Island
                                                                                </option>
                                                                                                                                                                <option value="Poland"
                                                                                    data-countryID="176"
                                                                                    data-countrysn="PL">
                                                                                    Poland
                                                                                </option>
                                                                                                                                                                <option value="Portugal"
                                                                                    data-countryID="177"
                                                                                    data-countrysn="PT">
                                                                                    Portugal
                                                                                </option>
                                                                                                                                                                <option value="Puerto Rico"
                                                                                    data-countryID="178"
                                                                                    data-countrysn="PR">
                                                                                    Puerto Rico
                                                                                </option>
                                                                                                                                                                <option value="Qatar"
                                                                                    data-countryID="179"
                                                                                    data-countrysn="QA">
                                                                                    Qatar
                                                                                </option>
                                                                                                                                                                <option value="Reunion"
                                                                                    data-countryID="180"
                                                                                    data-countrysn="RE">
                                                                                    Reunion
                                                                                </option>
                                                                                                                                                                <option value="Romania"
                                                                                    data-countryID="181"
                                                                                    data-countrysn="RO">
                                                                                    Romania
                                                                                </option>
                                                                                                                                                                <option value="Russia"
                                                                                    data-countryID="182"
                                                                                    data-countrysn="RU">
                                                                                    Russia
                                                                                </option>
                                                                                                                                                                <option value="Rwanda"
                                                                                    data-countryID="183"
                                                                                    data-countrysn="RW">
                                                                                    Rwanda
                                                                                </option>
                                                                                                                                                                <option value="Saint Helena"
                                                                                    data-countryID="184"
                                                                                    data-countrysn="SH">
                                                                                    Saint Helena
                                                                                </option>
                                                                                                                                                                <option value="Saint Kitts And Nevis"
                                                                                    data-countryID="185"
                                                                                    data-countrysn="KN">
                                                                                    Saint Kitts And Nevis
                                                                                </option>
                                                                                                                                                                <option value="Saint Lucia"
                                                                                    data-countryID="186"
                                                                                    data-countrysn="LC">
                                                                                    Saint Lucia
                                                                                </option>
                                                                                                                                                                <option value="Saint Pierre and Miquelon"
                                                                                    data-countryID="187"
                                                                                    data-countrysn="PM">
                                                                                    Saint Pierre and Miquelon
                                                                                </option>
                                                                                                                                                                <option value="Saint Vincent And The Grenadines"
                                                                                    data-countryID="188"
                                                                                    data-countrysn="VC">
                                                                                    Saint Vincent And The Grenadines
                                                                                </option>
                                                                                                                                                                <option value="Saint-Barthelemy"
                                                                                    data-countryID="189"
                                                                                    data-countrysn="BL">
                                                                                    Saint-Barthelemy
                                                                                </option>
                                                                                                                                                                <option value="Saint-Martin (French part)"
                                                                                    data-countryID="190"
                                                                                    data-countrysn="MF">
                                                                                    Saint-Martin (French part)
                                                                                </option>
                                                                                                                                                                <option value="Samoa"
                                                                                    data-countryID="191"
                                                                                    data-countrysn="WS">
                                                                                    Samoa
                                                                                </option>
                                                                                                                                                                <option value="San Marino"
                                                                                    data-countryID="192"
                                                                                    data-countrysn="SM">
                                                                                    San Marino
                                                                                </option>
                                                                                                                                                                <option value="Sao Tome and Principe"
                                                                                    data-countryID="193"
                                                                                    data-countrysn="ST">
                                                                                    Sao Tome and Principe
                                                                                </option>
                                                                                                                                                                <option value="Saudi Arabia"
                                                                                    data-countryID="194"
                                                                                    data-countrysn="SA">
                                                                                    Saudi Arabia
                                                                                </option>
                                                                                                                                                                <option value="Senegal"
                                                                                    data-countryID="195"
                                                                                    data-countrysn="SN">
                                                                                    Senegal
                                                                                </option>
                                                                                                                                                                <option value="Serbia"
                                                                                    data-countryID="196"
                                                                                    data-countrysn="RS">
                                                                                    Serbia
                                                                                </option>
                                                                                                                                                                <option value="Seychelles"
                                                                                    data-countryID="197"
                                                                                    data-countrysn="SC">
                                                                                    Seychelles
                                                                                </option>
                                                                                                                                                                <option value="Sierra Leone"
                                                                                    data-countryID="198"
                                                                                    data-countrysn="SL">
                                                                                    Sierra Leone
                                                                                </option>
                                                                                                                                                                <option value="Singapore"
                                                                                    data-countryID="199"
                                                                                    data-countrysn="SG">
                                                                                    Singapore
                                                                                </option>
                                                                                                                                                                <option value="Slovakia"
                                                                                    data-countryID="200"
                                                                                    data-countrysn="SK">
                                                                                    Slovakia
                                                                                </option>
                                                                                                                                                                <option value="Slovenia"
                                                                                    data-countryID="201"
                                                                                    data-countrysn="SI">
                                                                                    Slovenia
                                                                                </option>
                                                                                                                                                                <option value="Solomon Islands"
                                                                                    data-countryID="202"
                                                                                    data-countrysn="SB">
                                                                                    Solomon Islands
                                                                                </option>
                                                                                                                                                                <option value="Somalia"
                                                                                    data-countryID="203"
                                                                                    data-countrysn="SO">
                                                                                    Somalia
                                                                                </option>
                                                                                                                                                                <option value="South Africa"
                                                                                    data-countryID="204"
                                                                                    data-countrysn="ZA">
                                                                                    South Africa
                                                                                </option>
                                                                                                                                                                <option value="South Georgia"
                                                                                    data-countryID="205"
                                                                                    data-countrysn="GS">
                                                                                    South Georgia
                                                                                </option>
                                                                                                                                                                <option value="South Sudan"
                                                                                    data-countryID="206"
                                                                                    data-countrysn="SS">
                                                                                    South Sudan
                                                                                </option>
                                                                                                                                                                <option value="Spain"
                                                                                    data-countryID="207"
                                                                                    data-countrysn="ES">
                                                                                    Spain
                                                                                </option>
                                                                                                                                                                <option value="Sri Lanka"
                                                                                    data-countryID="208"
                                                                                    data-countrysn="LK">
                                                                                    Sri Lanka
                                                                                </option>
                                                                                                                                                                <option value="Sudan"
                                                                                    data-countryID="209"
                                                                                    data-countrysn="SD">
                                                                                    Sudan
                                                                                </option>
                                                                                                                                                                <option value="Suriname"
                                                                                    data-countryID="210"
                                                                                    data-countrysn="SR">
                                                                                    Suriname
                                                                                </option>
                                                                                                                                                                <option value="Svalbard And Jan Mayen Islands"
                                                                                    data-countryID="211"
                                                                                    data-countrysn="SJ">
                                                                                    Svalbard And Jan Mayen Islands
                                                                                </option>
                                                                                                                                                                <option value="Swaziland"
                                                                                    data-countryID="212"
                                                                                    data-countrysn="SZ">
                                                                                    Swaziland
                                                                                </option>
                                                                                                                                                                <option value="Sweden"
                                                                                    data-countryID="213"
                                                                                    data-countrysn="SE">
                                                                                    Sweden
                                                                                </option>
                                                                                                                                                                <option value="Switzerland"
                                                                                    data-countryID="214"
                                                                                    data-countrysn="CH">
                                                                                    Switzerland
                                                                                </option>
                                                                                                                                                                <option value="Syria"
                                                                                    data-countryID="215"
                                                                                    data-countrysn="SY">
                                                                                    Syria
                                                                                </option>
                                                                                                                                                                <option value="Taiwan"
                                                                                    data-countryID="216"
                                                                                    data-countrysn="TW">
                                                                                    Taiwan
                                                                                </option>
                                                                                                                                                                <option value="Tajikistan"
                                                                                    data-countryID="217"
                                                                                    data-countrysn="TJ">
                                                                                    Tajikistan
                                                                                </option>
                                                                                                                                                                <option value="Tanzania"
                                                                                    data-countryID="218"
                                                                                    data-countrysn="TZ">
                                                                                    Tanzania
                                                                                </option>
                                                                                                                                                                <option value="Thailand"
                                                                                    data-countryID="219"
                                                                                    data-countrysn="TH">
                                                                                    Thailand
                                                                                </option>
                                                                                                                                                                <option value="Togo"
                                                                                    data-countryID="220"
                                                                                    data-countrysn="TG">
                                                                                    Togo
                                                                                </option>
                                                                                                                                                                <option value="Tokelau"
                                                                                    data-countryID="221"
                                                                                    data-countrysn="TK">
                                                                                    Tokelau
                                                                                </option>
                                                                                                                                                                <option value="Tonga"
                                                                                    data-countryID="222"
                                                                                    data-countrysn="TO">
                                                                                    Tonga
                                                                                </option>
                                                                                                                                                                <option value="Trinidad And Tobago"
                                                                                    data-countryID="223"
                                                                                    data-countrysn="TT">
                                                                                    Trinidad And Tobago
                                                                                </option>
                                                                                                                                                                <option value="Tunisia"
                                                                                    data-countryID="224"
                                                                                    data-countrysn="TN">
                                                                                    Tunisia
                                                                                </option>
                                                                                                                                                                <option value="Turkey"
                                                                                    data-countryID="225"
                                                                                    data-countrysn="TR">
                                                                                    Turkey
                                                                                </option>
                                                                                                                                                                <option value="Turkmenistan"
                                                                                    data-countryID="226"
                                                                                    data-countrysn="TM">
                                                                                    Turkmenistan
                                                                                </option>
                                                                                                                                                                <option value="Turks And Caicos Islands"
                                                                                    data-countryID="227"
                                                                                    data-countrysn="TC">
                                                                                    Turks And Caicos Islands
                                                                                </option>
                                                                                                                                                                <option value="Tuvalu"
                                                                                    data-countryID="228"
                                                                                    data-countrysn="TV">
                                                                                    Tuvalu
                                                                                </option>
                                                                                                                                                                <option value="Uganda"
                                                                                    data-countryID="229"
                                                                                    data-countrysn="UG">
                                                                                    Uganda
                                                                                </option>
                                                                                                                                                                <option value="Ukraine"
                                                                                    data-countryID="230"
                                                                                    data-countrysn="UA">
                                                                                    Ukraine
                                                                                </option>
                                                                                                                                                                <option value="United States"
                                                                                    data-countryID="233"
                                                                                    data-countrysn="US">
                                                                                    United States
                                                                                </option>
                                                                                                                                                                <option value="United States Minor Outlying Islands"
                                                                                    data-countryID="234"
                                                                                    data-countrysn="UM">
                                                                                    United States Minor Outlying Islands
                                                                                </option>
                                                                                                                                                                <option value="Uruguay"
                                                                                    data-countryID="235"
                                                                                    data-countrysn="UY">
                                                                                    Uruguay
                                                                                </option>
                                                                                                                                                                <option value="Uzbekistan"
                                                                                    data-countryID="236"
                                                                                    data-countrysn="UZ">
                                                                                    Uzbekistan
                                                                                </option>
                                                                                                                                                                <option value="Vanuatu"
                                                                                    data-countryID="237"
                                                                                    data-countrysn="VU">
                                                                                    Vanuatu
                                                                                </option>
                                                                                                                                                                <option value="Vatican City State (Holy See)"
                                                                                    data-countryID="238"
                                                                                    data-countrysn="VA">
                                                                                    Vatican City State (Holy See)
                                                                                </option>
                                                                                                                                                                <option value="Venezuela"
                                                                                    data-countryID="239"
                                                                                    data-countrysn="VE">
                                                                                    Venezuela
                                                                                </option>
                                                                                                                                                                <option value="Vietnam"
                                                                                    data-countryID="240"
                                                                                    data-countrysn="VN">
                                                                                    Vietnam
                                                                                </option>
                                                                                                                                                                <option value="Virgin Islands (British)"
                                                                                    data-countryID="241"
                                                                                    data-countrysn="VG">
                                                                                    Virgin Islands (British)
                                                                                </option>
                                                                                                                                                                <option value="Virgin Islands (US)"
                                                                                    data-countryID="242"
                                                                                    data-countrysn="VI">
                                                                                    Virgin Islands (US)
                                                                                </option>
                                                                                                                                                                <option value="Wallis And Futuna Islands"
                                                                                    data-countryID="243"
                                                                                    data-countrysn="WF">
                                                                                    Wallis And Futuna Islands
                                                                                </option>
                                                                                                                                                                <option value="Western Sahara"
                                                                                    data-countryID="244"
                                                                                    data-countrysn="EH">
                                                                                    Western Sahara
                                                                                </option>
                                                                                                                                                                <option value="Yemen"
                                                                                    data-countryID="245"
                                                                                    data-countrysn="YE">
                                                                                    Yemen
                                                                                </option>
                                                                                                                                                                <option value="Zambia"
                                                                                    data-countryID="246"
                                                                                    data-countrysn="ZM">
                                                                                    Zambia
                                                                                </option>
                                                                                                                                                                <option value="Zimbabwe"
                                                                                    data-countryID="247"
                                                                                    data-countrysn="ZW">
                                                                                    Zimbabwe
                                                                                </option>
                                                                                                                                                                <option value="Kosovo"
                                                                                    data-countryID="248"
                                                                                    data-countrysn="XK">
                                                                                    Kosovo
                                                                                </option>
                                                                                                                                                                <option value="Curaçao"
                                                                                    data-countryID="249"
                                                                                    data-countrysn="CW">
                                                                                    Curaçao
                                                                                </option>
                                                                                                                                                                <option value="Sint Maarten (Dutch part)"
                                                                                    data-countryID="250"
                                                                                    data-countrysn="SX">
                                                                                    Sint Maarten (Dutch part)
                                                                                </option>
                                                                                                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label>State</label> <span
                                                                                class='red'>*</span>
                                                                            <!-- <input type="text" name="state" value="" placeholder="Enter State"> -->
                                                                            <select name="guest_user_billing_state"
                                                                                class="form-data state" id="newstate">
                                                                                <option value="">-state-</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <label>City</label> <span
                                                                                    class='red'>*</span>
                                                                                <!-- <input type="text" name="city" value="" placeholder="Enter city"> -->
                                                                                <select name="city"
                                                                                    id="city" class="form-data city">
                                                                                    <option value="">-city-</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Zip Code</label> <span
                                                                                class='red'>*</span>
                                                                            <input type="text"
                                                                                name="zip_code"
                                                                                class="" id="zip_code1"
                                                                                value=""
                                                                                placeholder="Enter Zip Code"
                                                                                maxlength="8">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="form-group">
                                                                            <label>Phone Number</label> <span
                                                                                class='red'>*</span>
                                                                            <input type="text"
                                                                                name="guest_user_billing_phone_no"
                                                                                value="" id="phone_no1"
                                                                                placeholder="Enter phone number"
                                                                                maxlength="10">

                                                                        </div>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>


                                                        <div class="results"></div>



                                                    </div>

                                                </div>


                                                <div class="results"></div>

                                                <button class="clone_btn clone_btn-wrp">

                                                </button>

                                            </div>
                                            <div class="summery-foot hide">
                                                <h5>Is this a present for someone?</h5>
                                                <p>We can warp your order up in a beautiful gift wrap of<br>
                                                    your choice, for your loved ones!</p>
                                                <div class="control-group">
                                                    <label class="control control-checkbox">
                                                        <span>Add Gift Wrap</span>
                                                        <input type="checkbox" />
                                                        <div class="control_indicator"></div>
                                                    </label>
                                                </div>
                                                <div class="mobile480 proceedcheckout">
                                                    <button type="submit" name="order" class="button-red">Place Order</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="order-summary-right">
                            <div class="baskdetail-in">
                                <div class="order-details-up">
                                    <div class="order-smmry-title">
                                        <h4>ORDER SUMMARY</h4>
                                    </div>
    <?php 
    $total=0;
    if (isset($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $key => $value) {
            $total=$total+$value['price'];
            ?>
                                <ul>
                                           <li>
                                                <div class="sortbox">
                                                    <div class="left-sortbox">
                                                        <div class="pricingside">
                                                        <img style="width:60px;height:60px;"
                                                                src="#">
                                                            <div class="pricingsidecontent">
                                                                <h4><?php echo $value['item_name'];?></h4>
                                                                 <p>₹ <?php echo $value['price'];?> <?php echo "<input type='hidden' class='iprice' value='$value[price]'>"; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="rightord">
                                                            <div class="qtyy">
                                                                <p>QTY</p>
                                                                <div class="qtysubwrp">
                                                                    <?php echo "<input type='number' onchange='subTotal()' class='iquantity' value='$value[quantity]' min='1' max='10'>"; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       
                                                    </div>
                                                    <?php echo "<form action='php/manage_add_to_cart.php' method='POST'>
                                                        <button name='remove_cart'>Remove</button>
                                                        <input type='hidden' value='$value[item_name]'>
                                                         </form>";?>
                                                </div>
                                            </li>
                                        </ul>
                                        <?php                                         
        }
    }
    ?>
                                </div>
                                
                                     <div class="peachcolorwrp">
                                        <div class="totalpricingin">
                                            <ul>
                                                <li><b>Shipping</b>
                                                    ₹ 0.00 </li>
                                                <li><b>Total single QTY Selected Item Price</b>
                                                    <span><?php echo $total ?></span>
                                                </li>
                                                <li><b>Discount Applied</b> <span>
                                                        0.00</span></li>
                                                <li><b>Total Selected Item Price with quantity</b><?php
                                                 
                                                //  $total=0;
                                                 if (isset($_SESSION['cart'])) {
                                                     foreach ($_SESSION['cart'] as $key => $value) {
                                                        //  $total=$total+$value['price'];
                                                         echo " <span class='itotal'></span>";
                                                     }
                                                    }
                                                ?>
                                                </li>
                                                <li><b>Grand Total</b> <span name="gt" id="gtotal">
                                                        0.00</span>
                                                    </li>
                                            </ul>
                                        </div>
                                    <div class="proceedcheckout">
                                    <button type='submit' name="order" class="button-red">Checkout</button>
                                    </div>
                                    </div>
                            </div>
                         
                            <a href="index.php" class="rtc"><img
                                    src="index.php">Return to Cart</a>
                        </div>
                    </div>
                </div>
        </div>
    </form>
    <?php } ?>
    </div>
    </div>
    </div>
    <!-- Order summary-->


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
        <img src="https://babysaffron.com/public/bbs/images/newsletter-detail.png">
      </div>
    </div>
  </div>
</section>
<!-- exclusive offer ends-->

<?php include 'all php/footer.php';?>

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

            <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>



        <script>
            $(document).ready(function() {
                $("#registration, .guest_user_billing").validate({

                    ignore: ".ignore",

                    rules: {
                        first_name: "required",
                        last_name: "required",
                        // guest_email: {
                        // required: true,
                        // guest_email: true
                        // },
                        name: "required",
                        apartment: "required",
                        address: "required",
                        country: "required",
                        state: "required",
                        city: "required",
                        zip_code: {
                            required: true,
                            minlength: 4,
                            zipcode_checker_method: 'on',
                        },
                        phone_no: {
                            required: true,
                            intlTelNumber: true 
                        },

                    },
                    messages: {
                        first_name: {
                            required: "Please enter your first name",
                        },
                        last_name: {
                            required: "Please enter your last name",
                        },
                      

                        name: {
                            required: "Please enter your name",
                        },
                        apartment: {
                            required: "Please enter your apartment",
                        },
                        address: {
                            required: "Please enter your address",
                        },
                        country: {
                            required: "Please select your country",
                        },
                        state: {
                            required: "Please select your state",
                        },
                        city: {
                            required: "Please select your city",
                        },
                        zip_code: {
                            required: "Please enter your zipcode",
                        },
                        phone_no: {
                            required: "Please enter your phone number",
                        }


                    },

                    submitHandler: function(form) {
                        form.submit();
                    }
                });


                function readonlyinput() {
                    if (
                        document.getElementById("mytext1").value == "" &&
                        document.getElementById("mytext2").value == "" &&
                        document.getElementById("mytext3").value == "" &&
                        document.getElementById("mytext4").value == "" &&
                        document.getElementById("mytext5").value == "" &&
                        document.getElementById("phone").value == ""
                    ) {
                        document.getElementById("mytext1").readOnly = false;
                        document.getElementById("mytext2").readOnly = false;
                        document.getElementById("mytext3").readOnly = false;
                        document.getElementById("mytext4").readOnly = false;
                        document.getElementById("mytext5").readOnly = false;
                        document.getElementById("phone").readOnly = false;
                        $('input[class="gray-cc"]').css('background-color', 'rgb(234 234 234)');
                    } else {
                        document.getElementById("mytext1").readOnly = true;
                        document.getElementById("mytext2").readOnly = true;
                        document.getElementById("mytext3").readOnly = true;
                        document.getElementById("mytext4").readOnly = true;
                        document.getElementById("mytext5").readOnly = true;
                        document.getElementById("phone").readOnly = true;
                    }
                }

                jQuery("#country_selector").countrySelect({
                    preferredCountries: ['in', 'gb', 'us']
                });

                var telInput = jQuery("#phone_no"),
                    errorMsg = jQuery("#error-msg"),
                    validMsg = jQuery("#valid-msg");

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
                    preferredCountries: ['sa', 'ae', 'qa', 'om', 'bh', 'kw', 'ma'],
                    preventInvalidNumbers: true,
                    separateDialCode: true,
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {
                        $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                            var countryCode = (resp && resp.country) ? resp.country : "";
                            callback(countryCode);
                        });
                    },
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


                $('.wrapper-address').on('click', '.deleteaddress', function() {
                    $('.deleteaddress').closest('.wrapper-address').find('.element').not(':first').last()
                        .remove();
                });
                $('.wrapper-address').on('click', '.clone_btn', function() {
                    $('.clone_btn').closest('.wrapper-address').find('.element').first().clone().appendTo(
                        '.results');
                });
            });
        </script>
        <script>
            var gt=0;
            var iprice=document.getElementsByClassName('iprice');
            var iquantity=document.getElementsByClassName('iquantity');
            var itotal=document.getElementsByClassName('itotal');
            var gtotal=document.getElementById('gtotal');

            function subTotal(){
                gt=0;
                 for(i=0; i<iprice.length; i++){
                    itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
                    gt=gt+(iprice[i].value)*(iquantity[i].value);
                }
                gtotal.innerText=gt;
            }
            subTotal();

        </script>

</body>

</html>



