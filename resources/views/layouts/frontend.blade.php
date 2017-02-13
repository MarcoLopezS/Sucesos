<!DOCTYPE html>
<!--[if IE 7 ]><html lang="es" class="ie7"><![endif]-->
<!--[if IE 8 ]><html lang="es" class="ie8"><![endif]-->
<!--[if IE 9 ]><html lang="es" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @section('titulo')
            Sucesos - Él poder de la información digital
        @show
    </title>

    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    {{-- Enlaces Externos --}}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700,700i,900') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}

    {{-- Estilos --}}
    {!! HTML::style(elixir('css/ts.css')) !!}
    {!! HTML::style('js/slick/slick.css') !!}
    {!! HTML::style('js/lity/lity.min.css') !!}
    {!! HTML::style(elixir('css/animate.css')) !!}
    {!! HTML::style(elixir('css/style.css')) !!}

    <!--[if lt IE 9]>
    {!! HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') !!}
    {!! HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
    <![endif]-->

    @yield('contenido_header')

</head>
<body>

<div class="wrapper">

    <!-- SIDE MENU -->
    <div id="sidebar-wrapper" class="hidden-xs">
        <ul class="nav navbar-nav">
            <li><a href="#">Inicio</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">World <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Politics <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sports <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Business <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Opinion <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tech <span class="fa fa-angle-right"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Politics</a></li>
                    <li><a href="#">Opinions</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Local</a></li>
                    <li><a href="#">National</a></li>
                    <li><a href="#">World</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Science</a></li>
            <li><a href="#">More</a></li>
        </ul>
    </div>
    <!-- // SIDE MENU -->

    <!-- HEADER / MENU -->
    <header class="header1 header-megamenu">
        <div class="navbar-header padding-vertical-10">
            <div class="container">
				<span class="offset-trigger hidden-xs">
				<span></span>
				<span></span>
				<span></span>
				</span>
                <a href="index.html" class="navbar-brand"><img src="images/logo.png" class="img-responsive" alt=""/></a>
                <div class="ad-banner pull-right hidden-xs">
                    <a href="#"><img src="images/ads/728x90.jpg" class="img-responsive" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span>Navigation</span>
                <span class="fa fa-navicon"></span>
            </button>

            <div class="search-wrap2">
                <form>
                    <input type="text" placeholder="Buscar">
                    <div class="sw2-close"><span class="fa fa-close"></span></div>
                </form>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.html">Homepage 1</a></li>
                            <li><a href="home-2.html">Homepage 2</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
                        <ul class="dropdown-menu">
                            <li><a href="category_01.html">Category 1</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post pages</a>
                        <ul class="dropdown-menu">
                            <li><a href="post_page_01.html">Post Page 1</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop-full.html">Shop - Fullwidth</a></li>
                        </ul>
                    </li>

                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extras</a>
                        <ul class="dropdown-menu">
                            <li><a href="header_menus_01.html">Header styles - 1</a></li>
                        </ul>
                    </li>

                    <li class="dropdown megamenu megamenu-5col megamenu-border">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">More <span class="fa fa-angle-down"></span></a>
                        <ul class="dropdown-menu no-padding">
                            <li>
                                <div class="row row-eq-height no-margin">
                                    <div class="col-md-3 padding-20">
                                        <h5>Homepages</h5>
                                        <a href="index.html">Homepage 1</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="pull-right hidden-xs">
                        <div class="search-trigger search-trigger2"><i class="fa fa-search"></i></div>
                    </li>
                </ul>

            </div>
        </div>
    </header>
    <!-- // HEADER / MENU -->

    @yield('contenido_body')

    <!-- FOOTER -->
    <footer class="bg-dark footer1 padding-top-60">
        <div class="container">
            <div class="row margin-bottom-30">
                <div class="col-md-4 col-sm-4 margin-bottom-30 footer-info">
                    <a href="index.html"><img src="images/logo.png" class="img-responsive" alt=""/></a>
                    <p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
                    <span><i class="fa fa-map-marker"></i> 1610 Connecticut Avenue, NW, Suite 500</span>
                    <span><i class="fa fa-envelope"></i> <a href="mailto:info@watcher.com">info@watcher.com</a></span>
                    <span><i class="fa fa-phone"></i> +1-202-555-0113</span>
                </div>

                <div class="col-md-4 col-sm-4 margin-bottom-30 footer-trending">
                    <h5>Trending</h5>
                    <ul class="trending">
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="images/footer/trend/1.jpg" class="img-responsive" alt=""/></a>
                            <h4><a href="post_page_02.html">Why Uber Is Trying To Make Nice With Its Drivers</a></h4>
                            <span>Sep. 25, 2016</span>
                        </li>
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="images/footer/trend/2.jpg" class="img-responsive" alt=""/></a>
                            <h4><a href="post_page_02.html">How to See If Your Dropbox Account Was Hacked</a></h4>
                            <span>Sep. 23, 2016</span>
                        </li>
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="images/footer/trend/3.jpg" class="img-responsive" alt=""/></a>
                            <h4><a href="post_page_02.html">You Can Now Bid on Steve Jobs' Famous Black Turtleneck</a></h4>
                            <span>Sep. 21, 2016</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 col-sm-4 margin-bottom-30 footer-follow">
                    <h5>Follow</h5>
                    <div class="footer-newsletter">
                        <form action="http://ckthemes.com/html/watcher/php/subscribe.php" id="invite1" method="POST">
                            <i class="fa fa-envelope"></i>
                            <input type="email" placeholder="Email address" class="e-mail" name="email" id="address1" data-validate="validate(required, email)">
                            <button type="submit">Subscribe</button>
                        </form>
                        <span>Don't worry we hate spam as much as you do</span>
                        <div id="result1"></div>
                    </div>
                    <div class="footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube-play"></i></a>
                    </div>
                </div>
            </div>

            <!-- FOOTER COPYRIGHT -->
            <div class="footer-bottom">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <p>&copy; Copyright 2016 Watcher.com. All rights reserved.</p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <ul class="footer-links">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertising</a></li>
                            <li><a href="#">Subscribe</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- // FOOTER -->

</div>

    {{-- Enlaces Externos --}}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    {{-- Enlaces --}}
    {!! HTML::script('js/slick/slick.min.js') !!}
    {!! HTML::script('js/socialShare.min.js') !!}
    {!! HTML::script('js/jquery.simpleWeather.min.js') !!}
    {!! HTML::script('js/lity/lity.min.js') !!}
    {!! HTML::script('js/wow.js') !!}

    {!! HTML::script('js/main.js') !!}

    <!-- Twitterfeed -->
    <script src="js/tweecool.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#tweecool').tweecool({
                //Change tweecool with touhr twitter username
                username : 'tweecool',
                profile_image: false,
                limit : 3
            });
        });
    </script>

    @yield('contenido_footer')

</body>
</html>