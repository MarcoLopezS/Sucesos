@extends('layouts.frontend')

@php
    $nota_id = $noticia->id;
    $nota_titulo = $noticia->titulo;
    $nota_url = $noticia->url;
    $nota_descripcion = $noticia->descripcion;
    $nota_contenido = $noticia->contenido;
    $nota_imagen = $noticia->imagen_noticia;
    $nota_categoria = $noticia->categoria->titulo;
    $nota_categoria_url = $noticia->categoria->url;
    $nota_fecha = $noticia->fecha;
@endphp

@section('titulo')
    {{ $nota_titulo }} | @parent
@endsection

@section('contenido_header')
    {{-- FlexSlider --}}
    {!! HTML::style(elixir('libs/flexslider/flexslider.css')) !!}

    {{-- Open Graph --}}
    <meta property="og:title" content='{{ $nota_titulo  }}'>
    <meta property="og:type" content='article' >
    <meta property="og:url" content='{{ $nota_url }}' >
    <meta property="og:image" content='http://sucesos.pe/{{ $nota_imagen }}' >
    <meta property="og:site_name" content='http://sucesos.pe' >
    <meta property="fb:admins" content='1434798696787255'>
    <meta property="og:description" content='{{ $nota_descripcion }}'>
@stop

@section('contenido_body')
	<!-- PAGE HEADER -->
	<div class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="bcrumbs">
						<li><a href="/">Inicio</a></li>
						<li><a href="{{ $nota_categoria_url }}">{{ $nota_categoria }}</a></li>
						<li>{{ $nota_titulo }}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<!-- CONTENT -->
	<div class="container single-post padding-bottom-30">
		<div class="row">
			<div class="clearfix"></div>
			<div class="col-md-8 col-sm-7 padding-bottom-30">
				<div class="blog-excerpt">

                    <div class="blog-single-head">
                        <div class="meta"><span class="date">{{ $nota_fecha }}</span></div>
                        <h2>{{ $nota_titulo }}</h2>
                        <p><em>{{ $nota_descripcion }}</em></p>
                    </div>

                    <div class="single-share">
                        <span>Compartir:</span>
                        <div class="post-share">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div>

					<img src="{{ $nota_imagen }}" class="img-prin-blog img-responsive" alt="{{ $nota_titulo }}"/>

                    {{--<div class="flexslider loading">--}}
                        {{--<ul class="slides">--}}
                            {{--<li><img src="images/category/slider/1.jpg" class="img-responsive" alt=""/></li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}

                    <div class="contenido-blog">
                        {!! $nota_contenido !!}
                    </div>
				</div>

				<div class="single-topic">
					<span>Etiquetas:</span>
					<ul class="tags">
                        @foreach($noticia->tags as $tag)
						<li><a href="{{ $tag->url }}">{{ $tag->titulo }}</a></li>
                        @endforeach
					</ul>
				</div>

				<div class="clearfix"></div>

				<div class="margin-bottom-30"></div>
				<hr class="l4">

				<div class="clearfix"></div>

                <h3 class="heading-1"><span>Articulos relacionados</span></h3>
				<div class="row margin-bottom-30">

                    @foreach($relacionadas->noticiasRelacionadas($nota_id) as $noticia)
                        @php
                            $noticia_titulo = $noticia->titulo;
                            $noticia_url = $noticia->url;
                            $noticia_categoria = $noticia->categoria->titulo;
                            $noticia_categoria_url = $noticia->categoria->url;
                            $noticia_imagen = $noticia->imagen_noticia_relacionada;
                            $noticia_fecha = $noticia->fecha;
                        @endphp
                        <div class="col-md-4">
                            <div class="layout_2--item">
                                <div class="thumb">
                                    <a href="{{ $noticia_url }}"><img src="{{ $noticia_imagen }}" class="img-responsive" alt=""></a>
                                </div>
                                <span class="cat"><a href="{{ $noticia_categoria_url }}">{{ $noticia_categoria }}</a></span>
                                <h4><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></h4>
                                <div class="meta"><span class="date">{{ $noticia_fecha }}</span></div>
                            </div>
                        </div>
                    @endforeach

				</div>
			</div>
	
			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
                @include('frontend.partials.publicidad-sidebar')

				@include('frontend.partials.siguenos')

                @include('frontend.partials.mas-visto')
			</aside>
			<!-- // SIDEBAR -->

		</div>
	</div>
	<!-- // CONTENT -->
@stop

@section('contenido_footer')
    {{-- FlexSlider --}}
    {!! HTML::script('libs/flexslider/jquery.flexslider.js') !!}
    <script>
        $(document).on("ready", function() {
            $('.flexslider').flexslider({
                animation: 'slide',
                animationLoop: true,
                slideshow: true,
                slideshowSpeed: 4000,
                animationSpeed: 800,
                pauseOnHover: true,
                pauseOnAction:true,
                controlNav: true,
                directionNav: true
            });
        });
    </script>
@stop