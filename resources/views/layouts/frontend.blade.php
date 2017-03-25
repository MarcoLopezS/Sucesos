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
            Sucesos - El poder de la información
        @show
    </title>

    <meta name="robots" content="index,follow" />
    <meta name='googlebot' content='index, follow' />
    <meta name="token" id="token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

    {{-- Enlaces Externos --}}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:400,400i') !!}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:500,700') !!}
    {!! HTML::style('https://fonts.googleapis.com/css?family=Roboto:700i,900') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}

    @yield('contenido_header')

    {{-- Estilos --}}
    {!! HTML::style(elixir('css/ts.css')) !!}
    {!! HTML::style('js/slick/slick.css') !!}
    {!! HTML::style('js/lity/lity.min.css') !!}
    {!! HTML::style(elixir('css/animate.css')) !!}
    {!! HTML::style(elixir('css/style.css')) !!}

</head>
<body>

<div class="wrapper">

    <!-- HEADER / MENU -->
    <header class="header1 header-megamenu">
        <div class="navbar-header padding-vertical-10">
            <div class="container">
				<a href="/" class="navbar-brand"><img src="/images/logo.png" class="img-responsive" alt=""/></a>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="container">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span>Navegación</span>
                <span class="fa fa-navicon"></span>
            </button>

            <div class="search-wrap2">
                <form action="/buscar" method="get">
                    <input name="b" type="text" placeholder="Buscar">
                    <div class="sw2-close"><span class="fa fa-close"></span></div>
                </form>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">Inicio</a></li>
                    <li class="dropdown dropdown-v2">
                        <a href="{{ route('categoria', 'actualidad') }}" class="dropdown-toggle">
                            Actualidad <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ route('categoria', 'investigacion') }}">Investigación</a></li>
                            <li><a href="{{ route('categoria', 'economia') }}">Economía</a></li>
                            <li><a href="{{ route('categoria', 'internacional') }}">Internacional</a></li>
                            <li><a href="{{ route('categoria', 'tecnologia') }}">Tecnología</a></li>
                            <li><a href="{{ route('categoria', 'denuncia') }}">Denuncia</a></li>
                            <li><a href="{{ route('categoria', 'emprendedores') }}">Emprendedores</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('categoria', 'entrevistas') }}">Entrevistas</a></li>
                    <li><a href="{{ route('categoria', 'historia') }}">Historia</a></li>
                    <li><a href="#">Columnistas</a></li>
                    <li><a href="{{ route('categoria', 'personajes') }}">Personajes</a></li>
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
    <footer class="bg-dark footer1">
        <div class="container">

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

    <!--[if lt IE 9]>
    {!! HTML::script('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') !!}
    {!! HTML::script('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') !!}
    <![endif]-->

    {{-- Enlaces Externos --}}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    {{-- Enlaces --}}
    {!! HTML::script('js/slick/slick.min.js') !!}
    {!! HTML::script('js/socialShare.min.js') !!}
    {!! HTML::script('js/lity/lity.min.js') !!}
    {!! HTML::script('js/wow.js') !!}

    {!! HTML::script(elixir('js/main.js')) !!}

    {!! HTML::script('//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-58a0ef96d417903d') !!}

    @yield('contenido_footer')

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-20229980-35', 'auto');
        ga('send', 'pageview');

    </script>

</body>
</html>