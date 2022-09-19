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
        
<!-- condition-section -->
<section class="condition-section">
    <div class="condition-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="condition-topin">
                        <div class="condition-top-title">
                            <h2>Conditions of use</h2>
                        </div>

                        <div class="condition-para-title">
                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Terms of use</h3>
                            </div>
                            <p>When you use the website Teentaj.com, it is understood that the usage is
                                subject to the notices,
                                terms, and conditions set forth in this agreement (the "Agreement"). In
                                addition, when you use any
                                USMS Saffron Co. Inc. service (e.g., Customer Reviews), you will be subject to
                                the rules, guidelines,
                                policies, terms, and conditions applicable to such service, and they are
                                incorporated into this Agreement
                                by this reference. USMS Saffron Co. Inc. reserves the right to change these
                                terms and conditions at any
                                time. ACCESSING, BROWSING, OR OTHERWISE USING THE SITE INDICATES YOUR AGREEMENT
                                TO
                                ALL THE TERMS AND CONDITIONS IN THIS AGREEMENT, SO PLEASE READ THIS AGREEMENT
                                CAREFULLY BEFORE PROCEEDING.</p><p><br></p><p><br></p><p><br></p><p><br></p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Use of site</h3>
                            </div>
                            <p>You may not reproduce, distribute, display, sell, lease, transmit, create
                                derivative works from, translate,
                                modify, reverse-engineer, disassemble, decompile or otherwise exploit this Site
                                or any portion of it unless
                                expressly permitted by USMS Saffron Co. Inc. in writing. You may not make any
                                commercial use of any of
                                the information provided on the Site or make any use of the Site for the benefit
                                of another business
                                unless explicitly permitted by USMS Saffron Co. Inc. in advance. USMS Saffron
                                Co. Inc. reserves the right
                                to refuse service, terminate accounts, and/or cancel orders at its discretion,
                                including, without limitation,
                                if USMS Saffron Co. Inc. believes that customer conduct violates applicable law
                                or is harmful to USMS
                                Saffron Co. Inc.'s interests. You shall not upload to, distribute, or otherwise
                                publish through this Site any
                                Content, information, or other material that (a) violates or infringes the
                                copyrights, patents, trademarks,
                                service marks, trade secrets, or other proprietary rights of any person or firm;
                                (b) is libelous, threatening,
                                defamatory, obscene, indecent, pornographic, or could give rise to any civil or
                                criminal liability under Indian
                                or international law; or (c) includes any bugs, viruses, worms, trap doors,
                                Trojan horses or other harmful
                                code or properties.</p>

                            <p>
                                USMS Saffron Co. Inc. may assign you a password and account identification to
                                enable you to access and use
                                certain portions of this Site. Each time you use a password or identification,
                                you will be deemed to be
                                authorized to access and use the Site in a manner consistent and in agreement
                                with the terms and conditions
                                of this Agreement, and USMS Saffron Co. Inc. has no obligation to investigate
                                the authorization or source of
                                any such access or use of the Site. YOU WILL BE SOLELY RESPONSIBLE FOR ALL
                                ACCESS TO AND USE
                                OF THIS SITE BY ANYONE USING THE PASSWORD AND IDENTIFICATION ORIGINALLY ASSIGNED
                                TO
                                YOU WHETHER OR NOT SUCH ACCESS TO AND USE OF THIS SITE IS ACTUALLY AUTHORIZED BY
                                YOU,
                                INCLUDING WITHOUT LIMITATION, ALL COMMUNICATIONS AND TRANSMISSIONS AND ALL
                                OBLIGATIONS (INCLUDING WITHOUT LIMITATION FINANCIAL OBLIGATIONS) INCURRED
                                THROUGH SUCH
                                ACCESS OR USE. You are solely responsible for protecting the security and
                                confidentiality of the password
                                and identification assigned to you. You shall immediately notify USMS Saffron
                                Co. Inc. of any unauthorized use
                                of your password or identification or any other breach or threatened breach of
                                this Site's security.</p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Reviews and Comments</h3>
                            </div>
                            <p>Except as otherwise provided elsewhere in this Agreement or on the Site, anything
                                that you submit or post to
                                the Site and/or provide USMS Saffron Co. Inc., including without limitation,
                                ideas, know-how, techniques,
                                questions, reviews, comments, and suggestions (collectively, "Submissions") is
                                and will be treated as non
                                -confidential and non-proprietary, and USMS Saffron Co. Inc. shall have the
                                royalty-free, worldwide, perpetual,
                                irrevocable and transferable right to use, copy, distribute, display, publish,
                                perform, sell, lease, transmit, adapt,
                                create derivative works from such Submissions by any means and in any form, and
                                to translate, modify, reverse
                                -engineer, disassemble, or decompile such Submissions. All Submissions shall
                                automatically become the sole
                                and exclusive property of USMS Saffron Co. Inc. and shall not be returned to
                                you.</p>

                            <p>
                                In addition to the rights applicable to any Submission, when you post comments
                                or reviews to the Site, you
                                also grant USMS Saffron Co. Inc. the right to use the name that you submit with
                                any review, comment, or
                                other Content, if any, in connection with such review, comment, or other
                                content. You represent and warrant
                                that you own or otherwise control all of the rights to the reviews, comments and
                                other Content that you post
                                on this Site and that use of your reviews, comments, or other Content by USMS
                                Saffron Co. Inc. will not
                                infringe upon or violate the rights of any third party. You shall not use a
                                false e-mail address, pretend to be
                                someone other than yourself, or otherwise mislead USMS Saffron Co. Inc. or third-parties as to the origin of
                                any Submissions or Content. USMS Saffron Co. Inc. may, but shall not be obligated
                                to, remove or edit any
                                Submissions (including comments or reviews) for any reason.</p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Risk of loss: Other terms of sale</h3>
                            </div>
                            <p>All orders shall be pre-approved with an acceptable method of payment as
                                established by USMS Saffron
                                Co. Inc. which may call for and require additional verification or information.
                            </p>

                            <p>The address at which delivery of the product ordered by you are to be made should
                                be correct and proper
                                in all respects.</p>

                            <p>After the receipt of payment from the Buyer, the Vendor shall arrange for the
                                invoicing and delivery of the
                                product to the buyer at the shipping address provided by the Buyer. Any and all
                                orders placed by you on this
                                Site are a firm commitment to purchase and you are obligated to complete the
                                transaction and not contest
                                it in any way.
                            </p>

                            <p>Before placing an order you are advised to check the product description
                                carefully. By placing an order for a
                                product you agree to be bound by the conditions of sale included in the item's
                                description.</p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Termination and Effect of termination</h3>
                            </div>
                            <p>In addition to any other legal or equitable remedies, USMS Saffron Co. Inc. may,
                                without prior notice to you,
                                immediately terminate the Agreement or revoke any or all of your rights granted
                                under this Agreement. Upon
                                any termination of this Agreement, you shall immediately cease all access to and
                                use of the Site and USMS
                                Saffron Co. Inc. shall, in addition to any other legal or equitable remedies,
                                immediately revoke all password(s)
                                and account identification issued to you and deny your access to and use of this
                                Site in whole or in part. Any
                                termination of this Agreement shall not affect the respective rights and
                                obligations (including without limitation,
                                payment obligations) of the parties arising before the date of termination.</p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>International Acess</h3>
                            </div>
                            <p>This Site may be accessed from countries other than India. This Site may contain
                                products or references to
                                products that are not available outside of India. Any such references do not
                                imply that such products will be
                                made available outside India. If you access and use this Site outside India you
                                are responsible for complying
                                with your local laws and regulations. </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Disclaimer</h3>
                            </div>
                            <p>EXCEPT AS OTHERWISE PROVIDED IN THE STANDARD TERMS OF SALE THAT GOVERN THE SALE
                                OF
                                EACH PRODUCT ON THIS SITE, THIS SITE, THE PRODUCTS OFFERED FOR SALE ON IT, AND
                                THE
                                TRANSACTIONS CONDUCTED THROUGH IT ARE PROVIDED BY USMS SAFFRON CO. INC. ON AN
                                "AS IS"
                                AND BEST EFFORT BASIS. USMS SAFFRON CO. INC. MAKES NO REPRESENTATIONS OR
                                WARRANTIES
                                OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE SITE OR THE
                                INFORMATION,
                                CONTENT, MATERIALS, OR PRODUCTS INCLUDED ON THIS SITE. TO THE FULL EXTENT
                                PERMISSIBLE
                                BY APPLICABLE LAW, USMS SAFFRON CO. INC. DISCLAIMS ALL WARRANTIES, EXPRESS OR
                                IMPLIED,
                                INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
                                FOR
                                A PARTICULAR PURPOSE, NON-INFRINGEMENT, TITLE, QUIET ENJOYMENT, DATA ACCURACY, AND
                                SYSTEM INTEGRATION. THIS SITE MAY INCLUDE INACCURACIES, MISTAKES, OR
                                TYPOGRAPHICAL
                                ERRORS. USMS SAFFRON CO. INC. DOES NOT WARRANT THAT THE CONTENT WILL BE
                                UNINTERRUPTED OR ERROR-FREE.
                            </p>

                            <p>TO THE MAXIMUM EXTENT PERMITTED BY LAW, USMS SAFFRON CO. INC. WILL NOT BE LIABLE
                                FOR
                                ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THIS SITE, INCLUDING, BUT NOT
                                LIMITED
                                TO INDIRECT, INCIDENTAL, PUNITIVE, EXEMPLARY, SPECIAL, OR CONSEQUENTIAL DAMAGES.
                                TO THE
                                MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, USMS SAFFRON CO. INC.'S TOTAL
                                LIABILITY TO
                                YOU FOR ANY DAMAGES (REGARDLESS OF THE FOUNDATION FOR THE ACTION) SHALL NOT
                                EXCEED
                                IN THE AGGREGATE THE AMOUNT OF FEES ACTUALLY PAID BY YOU TO USMS SAFFRON CO.
                                INC.
                                DURING THE MONTH IMMEDIATELY PRECEDING THE ACT ALLEGEDLY GIVING RISE TO USMS
                                SAFFRON
                                CO. INC.'S LIABILITY.
                            </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Links</h3>
                            </div>
                            <p>This site may contain links to other sites on the Internet that are owned and
                                operated by third parties. You
                                acknowledge that USMS Saffron Co. Inc. is not responsible for the operation of
                                or content located on or
                                through any such site.
                            </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Copyright complaints</h3>
                            </div>
                            <p>USMS Saffron Co. Inc. respects the intellectual property of others. If you
                                believe that your work has been
                                copied in a way that constitutes copyright infringement, please contact us at
                                Customer Support.
                            </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Copyright complaints</h3>
                            </div>
                            <p>You agree that USMS Saffron Co. Inc.'s remedy at law for any actual or threatened
                                breach of this Agreement
                                would be inadequate and that USMS Saffron Co. Inc. shall be entitled to specific
                                performance or injunctive
                                relief, or both, in addition to any damages that USMS Saffron Co. Inc. may be
                                legally entitled to recover,
                                together with reasonable expenses of any form of dispute resolution, including,
                                without limitation, attorneys'
                                fees.</p>

                            <p>No right or remedy of USMS Saffron Co. Inc. shall be exclusive of any other,
                                whether at law or in equity,
                                including without limitation damages injunctive relief, attorneys' fees, and
                                expenses.</p>

                            <p>No instance of waiver by USMS Saffron Co. Inc. of its rights or remedies under
                                these terms and conditions
                                shall simply any obligation to grant any similar, future, or other waivers. </p>

                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Electronic Communication
                                </h3>
                            </div>
                            <p>When you visit USMS Saffron Co. Inc. or send e-mails to us or give us your
                                feedback, you are communicating
                                with us electronically. You consent to receive communications from us
                                electronically. We will communicate with
                                you by e-mail or by posting notices on this website. You agree that all
                                agreements, notices, disclosures, and
                                other communications that we provide to you electronically satisfy any legal
                                requirement that such
                                communications be in writing.
                            </p>

                            <p>"Agreement" means the terms and conditions as detailed herein including all
                                schedules, appendices,
                                annexures, and privacy policy, and will include the references to this agreement as
                                amended, negated, supplemented,
                                varied, or replaced from time to time.</p>

                            <p>"Product/Products" means and includes any
                                goods/merchandise/products/services/offers/display items that
                                are uploaded /showcased/displayed on USMS Saffron Co. Inc. by its Vendor and the
                                related description,
                                information, procedure, processes, warranties, delivery schedule, etc. </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Trademark</h3>
                            </div>
                            <p>The wordmark of USMS Saffron Co. Inc. on the home page of the website &amp; other
                                pages and as used in
                                the communication to the User is registered by USMS Saffron Co. Inc.
                            </p>
                        </div>

                        <div class="conditionwrp">
                            <div class="condition-title">
                                <h3>Your Account</h3>
                            </div>
                            <p>If you use this site, you are responsible for maintaining the confidentiality of
                                your account and password and
                                for restricting access to your computer, and also you agree to accept
                                responsibility for all activities that occur
                                under your account or password. USMS Saffron Co. Inc. does sell products for
                                children, but it sells them to
                                adults, who can purchase with a credit card or otherwise. If you are under 18,
                                you may use USMS Saffron Co.
                                Inc. only with the involvement of a parent or guardian otherwise, USMS Saffron
                                Co. Inc. has the right to cancel
                                any order or service to the User. USMS Saffron Co. Inc. and its affiliates
                                reserve the right to refuse service,
                                terminate accounts, remove or edit content, or cancel orders at their sole
                                discretion. USMS Saffron
                                Co. Inc. and its affiliates reserve the right to refuse service, terminate
                                accounts, remove or edit content, or
                                cancel orders at their sole discretion.</p>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
        <!-- condition-section -->
<?php include 'all php/footer.php'; ?>