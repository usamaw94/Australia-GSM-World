<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="mobile phones, mobile repairing, phone repairing centre, phone accsessories, ebay store, australia gsm world, gsm" />
    <meta name="author" content="Usama Waheed" />

    <title>{{ config('app.name', 'Australia GSM World') }}</title>

    <!-- Styles -->
    <!-- css -->
    {{--<link href="/css/app.css" rel="stylesheet">--}}

    <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="/websiteAssets/css/bootstrap.css" rel="stylesheet" />
    <link href="/websiteAssets/css/bootstrap-responsive.css" rel="stylesheet" />
    <link href="/websiteAssets/css/flexslider.css" rel="stylesheet" />
    <link href="/websiteAssets/css/prettyPhoto.css" rel="stylesheet" />
    <link href="/websiteAssets/css/camera.css" rel="stylesheet" />
    <link href="/websiteAssets/css/jquery.bxslider.css" rel="stylesheet" />
    <link href="/websiteAssets/css/style.css" rel="stylesheet" />

    <!-- Theme skin -->
    <link href="/websiteAssets/color/default.css" rel="stylesheet" />

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <div id="wrapper">
            <!-- start header -->
            <header>
            <div class="top">
                <div class="container">
                    <div class="row">
                        <div class="span6">
                            <p class="topcontact"><i class="icon-envelope"></i> tunjay@australiagsmworld.com.au</p>
                        </div>
                        <div class="span6">

                            <ul class="social-network">
                                <p class="topcontact"><i class="icon-phone"></i> +61 417 313 900</p>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="container">


                <div class="row nomargin">
                    <div class="span4">
                        <div class="logo">
                            <!--<a href="index.html"><img src="img/logo.png" alt="" /></a>-->
                            <a title="Home" href="/"><h1><span style="color: #e9ed58">AUSTRALIA</span> <span style="color: #ca1135">GSM</span> <span style="color: #44a582">WORLD</span></h1></a>
                        </div>
                    </div>
                    <div class="span8">
                        <div class="navbar navbar-static-top">
                            <div class="navigation">
                            <nav>
                                    @yield('header-links')
                                </nav>
                            </div>
                            <!-- end navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </header>
            <!-- end header -->

            @yield('content')

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">Browse pages</h5>
                                <ul class="link-list">
                                    <li><a href="/index">Home</a></li>
                                    <li><a href="/Warranty.html">Waranty</a></li>
                                    <li><a href="/shopsLocator">Shops locater</a></li>
                                    <a href="/products">Our products</a><br>
                                    <a target="_blank" href="https://www.ebay.com.au/usr/ausgsmworld?_trksid=p2047675.l2559">eBay Store</a>
                                </ul>

                            </div>
                        </div>
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">Services</h5>
                                <ul class="link-list">
                                    <li><a href="/repairs">Repair</a></li>
                                    <li><a href="/unlock">Unlock</a></li>
                                    <li><a href=/buySellTrade">Buy/Sell/Trade</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="span4">
                            <div class="widget">
                                <h5 class="widgetheading">Get in touch</h5>
                                <address>
                                    <strong>Tunjay Akyldiz</strong><br>
                                    Managing Director <br>
                                    Skype: tunjay-gsm | au-gsm-world<br>
                                </address>
                                <p>
                                    <i class="icon-phone"></i> +61 417 313 900 <br>
                                    <i class="icon-envelope-alt"></i> tunjay@australiagsmworld.com.au ,<br> tunjay@australia-gsmworld.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <div class="copyright">
                                    <p><span>&copy; Australia GSM World. All right reserved</span></p>
                                </div>

                            </div>

                            <div class="span6">
                                <div class="credits">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>
    </div>

    {{--<!-- Scripts -->--}}
    {{--<script src="/js/app.js"></script>--}}
    {{--<!-- javascript--}}
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/websiteAssets/js/jquery.js"></script>
    <script src="/websiteAssets/js/jquery.easing.1.3.js"></script>
    <script src="/websiteAssets/js/bootstrap.js"></script>

    <script src="/websiteAssets/js/modernizr.custom.js"></script>
    <script src="/websiteAssets/js/toucheffects.js"></script>
    <script src="/websiteAssets/js/google-code-prettify/prettify.js"></script>
    <script src="/websiteAssets/js/jquery.bxslider.min.js"></script>
    <script src="/websiteAssets/js/camera/camera.js"></script>
    <script src="/websiteAssets/js/camera/setting.js"></script>

    <script src="/websiteAssets/js/jquery.prettyPhoto.js"></script>
    <script src="/websiteAssets/js/portfolio/jquery.quicksand.js"></script>
    <script src="/websiteAssets/js/portfolio/setting.js"></script>

    <script src="/websiteAssets/js/jquery.flexslider.js"></script>
    <script src="/websiteAssets/js/animate.js"></script>
    <script src="/websiteAssets/js/inview.js"></script>

    <!-- Template Custom JavaScript File -->
    <script src="js/custom.js"></script>
</body>
</html>
