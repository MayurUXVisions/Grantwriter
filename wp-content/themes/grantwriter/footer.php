<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grantwriter
 */

?>
</div>
<footer id="footer">
    <div class="footer-slider">
        <div class="footer-marquee swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
                <div class="swiper-slide"><i>We Write Grants</i></div>
                <div class="swiper-slide">GrantWriters</div>
            </div>
        </div>
    </div>

    <div class="main-footer">
        <div class="footer-top">
            <div class="container">
                <div class="footer-flex">
                    <div class="footer-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-logo.svg" alt="" ></div>
                    <div class="line"></div>
                    <div class="footer-social">
                        <label>Follow Us</label>
                        <ul>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-social-icon1.svg" alt="" ></a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-social-icon2.svg" alt="" ></a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-social-icon3.svg" alt="" ></a></li>
                            <li><a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/footer-social-icon4.svg" alt="" ></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-contact-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Mailing Address</h6>
                        <div class="address footer-info"><a href="#">5318 E 2nd St. Suite 669, Long Beach, CA 90803</a></div>

                        <h6>Contact Information</h6>
                        <div class="call footer-info"><a href="tel:5053264245">(505) 326-4245</a></div>
                        <div class="email footer-info"><a href="mailto:hello@grantwriters.net">hello@grantwriters.net</a></div>
                    </div>
                    <div class="col-md-6">
                        <h6>Quick Links</h6>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Resources</a></li>
                                <li><a href="#">GrantSiren Subscription</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-c-left">
                        <div class="bbb-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bbb-logo.svg" alt="" ></div>
                        © 1995-2024 GrantWriters   <span>|</span>   All Rights Reserved
                    </div>
                    <div class="col-md-6 footer-c-right">
                        <ul>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li class="signin-menu"><a href="#">Sign In </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>



<?php wp_footer(); ?>

</body>
</html>
