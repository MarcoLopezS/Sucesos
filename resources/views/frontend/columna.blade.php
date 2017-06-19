@extends('layouts.frontend')

@php
    $nota_id = $noticia->id;
    $nota_titulo = $noticia->titulo;
    $nota_url = $noticia->url;
    $nota_descripcion = $noticia->descripcion;
    $nota_contenido = $noticia->contenido;
    $nota_imagen = $noticia->imagen_noticia;
    $nota_categoria = $noticia->columnista->nombre_completo;
    $nota_categoria_url = $noticia->columnista->url;
    $nota_categoria_imagen = $noticia->columnista->imagen_admin;
    $nota_fecha = $noticia->fecha;
    $idRel = 1;
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
    <meta property="og:image" content='{{ asset($nota_categoria_imagen) }}' >
    <meta property="og:site_name" content='http://sucesos.pe' >
    <meta property="fb:admins" content='1434798696787255'>
    <meta property="og:description" content='{{ $nota_descripcion }}'>
    <meta property="article:author" content='{{ $nota_categoria_url }}'>
@stop

@section('contenido_body')
	<!-- PAGE HEADER -->
	<div class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="bcrumbs">
						<li><a href="/">Inicio</a></li>
						<li><a href="#">{{ $nota_categoria }}</a></li>
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

                    @if($noticia->imagen <> "")
					    <img src="{{ $nota_imagen }}" class="img-prin-blog img-responsive" alt="{{ $nota_titulo }}"/>
                    @endif

                    <div class="contenido-blog">
                        {!! $nota_contenido !!}
                    </div>
				</div>	

				<div class="clearfix"></div>

				<div class="margin-bottom-30"></div>
				<hr class="l4">

                <div class="row">
                    <div class="col-md-6">
                        <div class="blog-prev">
                            <i class="fa fa-angle-left"></i>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog-next text-right">
                            <i class="fa fa-angle-right"></i>
                        </div>
                    </div>
                    @foreach($relacionadas as $rel)
                        @php
                            $noticia_titulo = $rel->titulo;
                            $noticia_url = $rel->url;
                        @endphp
                            <p id="rel-{{ $idRel }}"><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></p>
                        @php
                            $idRel = $idRel + 1;
                        @endphp
                    @endforeach
                </div>
			</div>
	
			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
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