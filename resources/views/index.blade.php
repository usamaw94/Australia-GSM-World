@extends('layouts.web')

@section('header-links')
    <ul class="nav topnav">
        <li>
            <a href="/products">Products</a>
        </li>
        <li>
            <a href="/repairs">Repairs</a>
        </li>
        <li>
            <a href="/unlock">Unlock</a>
        </li>
        <li>
            <a href="/buySellTrade">Buy/Sell/Trade</a>
        </li>
        <li>
            <a href="/warranty">Warranty</a>
        </li>
        <li>
            <a href="/shopsLocator">Shops locator</a>
        </li>
        <li>
            <a target="_blank" href="https://www.ebay.com.au/usr/ausgsmworld?_trksid=p2047675.l2559">eBay Store</a>
        </li>
    </ul>
    @endsection

@section('content')

        <!-- section featured -->
        <section id="featured">

    <!-- slideshow start here -->

    <div class="camera_wrap" id="camera-slide">

        <!-- slide 1 here -->
        <div data-src="/websiteAssets/img/slides/camera/slide1/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong><span class="colored">Australia GSM World</span></strong></h2>
                            <h3 class="animated fadeInUp"> Professional Mobile Phone Service Centre</h3>
                            <a href="/shopsLocator" class="btn btn-theme btn-large animated fadeInUp">
                                Find Us
                            </a>
                        </div>
                        <div class="span6">
                            <img src="/websiteAssets/img/slides/camera/slide1/slideImg1.png" alt="" class="animated bounceInDown delay1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide 2 here -->
        <div data-src="/websiteAssets/img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <img src="/websiteAssets/img/slides/camera/slide2/sliderImg2.png" alt="" />
                        </div>
                        <div class="span6">
                            <h2 class="animated fadeInDown"><strong>Repairs - Unlocks and <span class="colored">Accessories</span></strong></h2>
                            <h3 class="animated fadeInUp"> One-Stop Solutions For Mobile Phone Services</h3>
                            <div>
                                <a href="/getAQuote"><button class="btn btn-theme btn-large" type="submit">Get a Free Qoute</button></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- slide 3 here -->
        <div data-src="/websiteAssets/img/slides/camera/slide2/img1.jpg">
            <div class="camera_caption fadeFromLeft">
                <div class="container">
                    <div class="row">
                        <div class="span12 aligncenter">
                            <h2 class="animated fadeInDown"><strong><span class="colored">90</span> Days warranty</strong></h2>
                            <h3 class="animated fadeInUp">Terms and Conditions Apply</h3>
                            <img src="/websiteAssets/img/slides/camera/slide3/sliderImg3.png" alt="" class="animated bounceInDown delay1" style="width: 400px;"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- slideshow end here -->

</section>
        <!-- /section featured -->

        <section id="content">
    <div class="container">

        <div class="row">
            <div class="span12">
                <div class="cta-box">
                    <div class="row">
                        <div class="span8">
                            <div class="cta-text">
                                <h2>Our <span>Products</span></h2>
                                <p>We sell all kind of phone accessories</p>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="cta-btn">
                                <a href="/products" class="btn btn-theme">View products <i class="icon-angle-right"></i></a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>
        <div class="row">
            <h2 style="text-align: center;font-weight: 900;margin-bottom: 50px">What <span class="colored">Services</span> do we offer</h2>
            <div class="span12">
                <div class="row">
                    <div class="span4">
                        <div class="box flyLeft">
                            <div class="icon">
                                <i class="ico icon-circled icon-bgdark icon-gears icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Screen <strong>Repair</strong></h4>
                                <p>
                                    At Australia GSM World, your phones screen will be replaced on the spot while you go shopping or having a cup of coffee.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="box flyIn">
                            <div class="icon">
                                <i class="ico icon-circled icon-bglight icon-gears icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Part <strong>Replacement</strong></h4>
                                <p>
                                    You have a button which is not function properly or you cannot charge your phone?Our technicians are the experts to help you make them work perfectly as brand new.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="box flyRight">
                            <div class="icon">
                                <i class="ico icon-circled icon-bgdark icon-gears active icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Liquid <strong>Damaged Repair</strong></h4>
                                <p>
                                    You accidently dropped your phone into water, and you have important data need to be reocvery or you still love your phone, bring it to Australia GSM World, almost cases we can repair or at least get your data recovered.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="span4">
                        <div class="box flyLeft">
                            <div class="icon">
                                <i class="ico icon-circled icon-bgprimary icon-gears icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Network <strong>Unlocking</strong></h4>
                                <p>
                                    You are going on holiday or you want to change the service provider,we can help you get the freedom of using any sim card from any provider permenantly.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="span4">
                        <div class="box flyIn">
                            <div class="icon">
                                <i class="ico icon-circled icon-bgdanger icon-gears icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Accessories</h4>
                                <p>
                                    At Australia GSM World, we understand that your time are valueable, we have all kinds of accessories you need for your phone, enjoy the one-stop-shopping with us.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="span4">
                        <div class="box flyRight">
                            <div class="icon">
                                <i class="ico icon-circled icon-bgsuccess icon-gears icon-3x"></i>
                            </div>
                            <div class="text">
                                <h4>Buy/Sell/<strong>Trade</strong></h4>
                                <p>
                                    Turn your old phone into cash or get the lastest technology smartphone with affordable price, Australia GSM World is where you should visit first.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="span12">
                <div class="cta-box">
                    <div class="row">
                        <div class="span8">
                            <div class="cta-text">
                                <h2>Get your Screen Repaired <span>On The Spot</span></h2>
                                <p>We offer free quotation for all kinds of repair services. our professional and highly skilled technician will be able to diagnose your phone problems and make it working as new.</p>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="cta-btn">
                                <a href="/getAQuote" class="btn btn-theme">Get a quote <i class="icon-angle-right"></i></a>
                            </div>
                        </div>

                    </div>


                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="solidline"></div>
            </div>
        </div>


        <div class="row">
            <h2 style="text-align: center;font-weight: 900;margin-bottom: 50px">Our <span class="colored">Shops</span></h2>
            <section id="projects">
                <ul class="grid portfolio custom-grid">

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop20.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <figure>
                                <div><img src="/websiteAssets/img/shops/shop2.jpg" alt="" /></div>
                            </figure>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop4.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop5.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop9.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop10.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop11.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop14.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop19.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop21.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop24.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop25.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop26.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop27.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop28.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop30.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->

                    <!-- Item Project and Filter Name -->
                    <li class="span3">
                        <div class="item">
                            <div><img src="/websiteAssets/img/shops/shop29.jpg" alt="" /></div>
                        </div>
                    </li>
                    <!-- End Item Project -->


                </ul>
            </section>

        </div>

    </div>
</section>

@endsection