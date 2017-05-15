<!DOCTYPE html>
<!--[if IE 8]> <html lang="es" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="es" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--><html lang="es"><!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>Administrador</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="token" id="token" content="{{ csrf_token() }}">

    {{-- ENLACE EXTERNO --}}
    {!! HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') !!}
    {!! HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css') !!}
    {!! HTML::style('https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css') !!}

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/layouts/layout/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ elixir('assets/layouts/layout/css/custom.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('contenido_header')

</head>

<body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">

    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="/">
                    <img src="/images/logo.png" width="175" alt="logo" class="logo-default" />
                </a>
                <div class="menu-toggler sidebar-toggler"></div>
            </div>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <!-- BEGIN PAGE ACTIONS -->
            <div class="page-actions">
                <div class="btn-group">
                    <button type="button" class="btn red-haze btn-sm dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                        <span class="hidden-sm hidden-xs">Acceso rápido</span>
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('admin.columnistas.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nuevo columnista </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.noticias.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nueva noticia </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.videos.create') }}">
                                <i class="fa fa-plus" aria-hidden="true"></i> Nueva video </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE ACTIONS -->
            <!-- BEGIN PAGE TOP -->
            <div class="page-top">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <div class="top-menu">
                    <ul class="nav navbar-nav pull-right">
                        <!-- BEGIN USER LOGIN DROPDOWN -->
                        <li class="dropdown dropdown-user dropdown-dark">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                <span class="username username-hide-on-mobile"> {{ Auth::user()->nombre_completo }} </span>
                                <img alt="" class="img-circle" src="/assets/layouts/layout/img/avatar-male.jpg" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-default">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user" aria-hidden="true"></i> Mi Perfil
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ url('/logout') }}"
                                       onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out" aria-hidden="true"></i> Cerrar sesión
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <!-- END USER LOGIN DROPDOWN -->
                    </ul>
                </div>
                <!-- END TOP NAVIGATION MENU -->
            </div>
            <!-- END PAGE TOP -->
        </div>
        <!-- END HEADER INNER -->
    </div>
    <!-- END HEADER -->

    <div class="clearfix"></div>

    <!-- BEGIN CONTAINER -->
    <div class="page-container">

        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar navbar-collapse collapse">
                <!-- BEGIN SIDEBAR MENU -->
                <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="nav-item start {!! (Request::is('admin') ? 'active open' : '') !!}">
                        <a href="/admin">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li class="nav-item {!! (Request::is('admin/columnistas*') ? 'active open' : '') !!}" >
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                            <span class="title">Columnistas</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {!! (Request::is('admin/columnistas') ? 'active open' : '') !!}s">
                                <a href="{{ route('admin.columnistas.index') }}" class="nav-link ">
                                    <span class="title">Todos los columnistas</span>
                                </a>
                            </li>
                            <li class="nav-item {!! (Request::is('admin/columnistas/create') ? 'active open' : '') !!}">
                                <a href="{{ route('admin.columnistas.create') }}" class="nav-link ">
                                    <span class="title">Nuevo columnista</span>
                                </a>
                            </li>
                        </ul>
                    </li>

	                <li class="nav-item {!! (Request::is('admin/portadas*') ? 'active open' : '') !!}" >
		                <a href="javascript:;" class="nav-link nav-toggle">
			                <i class="fa fa-book" aria-hidden="true"></i>
			                <span class="title">Portadas</span>
			                <span class="arrow"></span>
		                </a>
		                <ul class="sub-menu">
			                <li class="nav-item {!! (Request::is('admin/portadas') ? 'active open' : '') !!}s">
				                <a href="{{ route('admin.portadas.index') }}" class="nav-link ">
					                <span class="title">Todas las portadas</span>
				                </a>
			                </li>
			                <li class="nav-item {!! (Request::is('admin/portadas/create') ? 'active open' : '') !!}">
				                <a href="{{ route('admin.portadas.create') }}" class="nav-link ">
					                <span class="title">Nueva portada</span>
				                </a>
			                </li>
		                </ul>
	                </li>

                    <li class="nav-item {!! (Request::is('admin/noticias*') || Request::is('admin/tags*') ? 'active open' : '') !!}" >
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                            <span class="title">Noticias</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {!! (Request::is('admin/noticias') ? 'active open' : '') !!}s">
                                <a href="{{ route('admin.noticias.index') }}" class="nav-link ">
                                    <span class="title">Todas las noticias</span>
                                </a>
                            </li>
                            <li class="nav-item {!! (Request::is('admin/noticias/create') ? 'active open' : '') !!}">
                                <a href="{{ route('admin.noticias.create') }}" class="nav-link ">
                                    <span class="title">Nueva noticia</span>
                                </a>
                            </li>
                            <li class="nav-item {!! (Request::is('admin/tags*') ? 'active open' : '') !!}">
                                <a href="{{ route('admin.tags.index') }}" class="nav-link ">
                                    <span class="title">Etiquetas</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item {!! (Request::is('admin/videos*') ? 'active open' : '') !!}" >
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-youtube-play" aria-hidden="true"></i>
                            <span class="title">Videos</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item {!! (Request::is('admin/videos') ? 'active open' : '') !!}s">
                                <a href="{{ route('admin.videos.index') }}" class="nav-link ">
                                    <span class="title">Todos los videos</span>
                                </a>
                            </li>
                            <li class="nav-item {!! (Request::is('admin/videos/create') ? 'active open' : '') !!}">
                                <a href="{{ route('admin.videos.create') }}" class="nav-link ">
                                    <span class="title">Nuevo video</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item start {!! (Request::is('admin/user*') ? 'active open' : '') !!}">
                        <a href="{{ route('admin.user.index') }}">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span class="title">Usuarios</span>
                            <span class="selected"></span>
                        </a>
                    </li>

                    <li class="">
                        <a href="{{ url('/logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form-side').submit();">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <span class="title">Cerrar sesión</span>
                        </a>

                        <form id="logout-form-side" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
            <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR -->

        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">

            <div class="page-content">

                <!-- BEGIN PAGE HEADER-->
                <div class="page-head">
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <div class="page-title">
                        <h1>
                            @yield('contenido_admin_title')
                        </h1>
                    </div>
                </div>
                <!-- END PAGE HEADER-->

                @yield('contenido_admin')

            </div>
        </div>
        <!-- END CONTENT -->

    </div>
    <!-- END CONTAINER -->

    <!-- BEGIN FOOTER -->
    <div class="page-footer">
        <div class="page-footer-inner"> &copy; 2017 </div>
        <div class="scroll-to-top">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </div>
    </div>
    <!-- END FOOTER -->

    <!--[if lt IE 9]>
    {!! HTML::script('assets/global/plugins/respond.min.js') !!}
    {!! HTML::script('assets/global/plugins/excanvas.min.js') !!}
    {!! HTML::script('assets/global/plugins/ie8.fix.min.js') !!}
    <![endif]-->

    {{-- ENLACES EXTERNOS --}}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') !!}
    {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') !!}
    {!! HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') !!}

    {{-- BEGIN PAGE LEVEL SCRIPTS --}}
    {!! HTML::script('/assets/global/scripts/app.min.js?') !!}
    {!! HTML::script('/assets/layouts/layout/scripts/layout.min.js') !!}
    {!! HTML::script('assets/layouts/global/scripts/quick-nav.min.js') !!}

    @yield('contenido_footer')

</body>

</html>