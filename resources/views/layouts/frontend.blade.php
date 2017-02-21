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

    <!-- HEADER / MENU -->
    <header class="header1 header-megamenu">
        <div class="navbar-header padding-vertical-10">
            <div class="container">
				<a href="/" class="navbar-brand"><img src="/images/logo.png" class="img-responsive" alt=""/></a>
                <div class="ad-banner pull-right hidden-xs">
                    <a href="#"><img src="http://placeholdit.imgix.net/~text?txtsize=30&bg=c6c6c6&txtclr=000000&txt=Publicidad&w=729&h=90" class="img-responsive" alt=""/></a>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span>Navegación</span>
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
                    <li><a href="/">Inicio</a></li>
                    <li class="dropdown dropdown-v2">
                        <a href="#" class="dropdown-toggle"
                           data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Actualidad <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('categoria', 'investigacion') }}">Investigación</a></li>
                            <li><a href="{{ route('categoria', 'economia') }}">Economía</a></li>
                            <li><a href="{{ route('categoria', 'internacional') }}">Internacional</a></li>
                            <li><a href="{{ route('categoria', 'tecnologia') }}">Tecnología</a></li>
                            <li><a href="{{ route('categoria', 'denuncia') }}">Denuncia</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('categoria', 'entrevistas') }}">Entrevistas</a></li>
                    <li><a href="{{ route('categoria', 'historia') }}">Historia</a></li>
                    <li><a href="#">Columnistas</a></li>
                    <li><a href="{{ route('categoria', 'emprendedores') }}">Emprendedores</a></li>
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
                    <a href="/"><img src="/images/logo-bn.png" class="img-responsive" alt=""/></a>
                    <p>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat.</p>
                    <span><i class="fa fa-envelope"></i> <a href="mailto:info@watcher.com">info@sucesos.pe</a></span>
                </div>

                <div class="col-md-4 col-sm-4 margin-bottom-30 footer-trending">
                    <h5>Trending</h5>
                    <ul class="trending">
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="/images/footer/trend/1.jpg" class="img-responsive" alt=""/></a>
                            <h4><a href="post_page_02.html">Why Uber Is Trying To Make Nice With Its Drivers</a></h4>
                            <span>Sep. 25, 2016</span>
                        </li>
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="/images/footer/trend/2.jpg" class="img-responsive" alt=""/></a>
                            <h4><a href="post_page_02.html">How to See If Your Dropbox Account Was Hacked</a></h4>
                            <span>Sep. 23, 2016</span>
                        </li>
                        <li>
                            <a href="post_page_01.html" class="pull-left"><img src="/images/footer/trend/3.jpg" class="img-responsive" alt=""/></a>
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
                    <div class="col-md-6 col-sm-12">
                        <p>&copy; Copyright 2017 Sucesos.pe</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- // FOOTER -->

</div>

    {{-- Enlaces Externos --}}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    {{-- Enlaces --}}
    {!! HTML::script('js/slick/slick.min.js') !!}
    {!! HTML::script('js/socialShare.min.js') !!}
    {!! HTML::script('js/jquery.simpleWeather.min.js') !!}
    {!! HTML::script('js/lity/lity.min.js') !!}
    {!! HTML::script('js/wow.js') !!}

    {!! HTML::script(elixir('js/main.js')) !!}

    {!! HTML::script('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58a0ef96d417903d') !!}

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