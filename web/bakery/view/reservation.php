<?php
/**
 * @file      home.php
 * @brief     This view is designed to display the home page
 * @author    Created by Pascal.BENZONANA
 * @author    Updated by Nicolas.GLASSEY
 * @version   13-APR-2020
 */

ob_start();
$title = "reservation";
?>
    <!-- Testimonial Area Start -->
    <section id="section4" class="parallax-window" data-parallax="scroll" data-image-src="html/img/perso/ex2.jpg">
        <h3>What We Say</h3>
        <h2>Customer Testimonial</h2>
        <div class="testimonial-area owl-theme owl-carousel" >

            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">


                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 noPadding text-center">
                <div class="single-testimonial">
                    <div class="testimonial-info">
                        <div class="testimonial-content">
                            <p>I must explain to you how all this mistaken idea of denoung pleure and praising pain was born and I will give you a coete account of the system, and expound the actual</p>
                            <h4>David Morgan</h4>
                            <h5>Student, CSE</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Area End -->
    <!-- Blog Area Start -->
    <section id="section5" class="blog-area">
        <div class="row">
            <div class="col-xs-12">
                <div class="blog-section-title text-center">
                    <h3>Cemre Bakery Blog</h3>
                    <h2>Our Latest News</h2>
                </div>
            </div>
            <div class="row">
                <div class="container blog-section">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="blog-section-date col-md-4 col-sm-4 col-xs-12 noPadding">

                                <p class="month">June</p>
                                <p class="date">6.6.1986</p>


                            </div>

                            <div class="blog-section-description col-md-8 col-sm-8 col-xs-12 noPadding">
                                <h2>I must explain to you how all this mistaken </h2>
                                <p>idea of denouncing pleure and praising pain was born and I will give you a complete account of the system</p>

                                <a href="">Shop</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="blog-section-date col-md-4 col-sm-4 col-xs-12 noPadding">

                                <p class="month">June</p>
                                <p class="date">6.6.1986</p>


                            </div>

                            <div class="blog-section-description col-md-8 col-sm-8 col-xs-12 noPadding">
                                <h2>I must explain to you how all this mistaken </h2>
                                <p>idea of denouncing pleure and praising pain was born and I will give you a complete account of the system</p>
                                <a href="">Shop</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area End -->
<?php
$content = ob_get_clean();
require "gabarit.php";
