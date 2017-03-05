@extends('layouts.frontend')

@php
    $categoria_titulo = $categoria->titulo;
@endphp

@section('titulo')
    {{ $categoria_titulo }} | @parent
@endsection

@section('contenido_header')
@stop

@section('contenido_body')
	<!-- PAGE HEADER -->
	<div class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="bcrumbs">
						<li><a href="/">Inicio</a></li>
						<li>{{ $categoria_titulo }}</li>
					</ul>
					<br>
					<h2>{{ $categoria_titulo }}</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<!-- CATEGORY -->
	<div class="container padding-bottom-30">
		<div class="row">
			<div class="col-md-8 col-sm-7 more-posts padding-bottom-30">
				<div class="row">
					<div class="col-md-12">

                        @foreach($noticias as $noticia)
                            @php
                                $noticia_titulo = $noticia->titulo;
                                $noticia_url = $noticia->url;
                                $noticia_descripcion = $noticia->descripcion;
                                $noticia_imagen = $noticia->imagen_categoria;
                                $noticia_fecha = $noticia->fecha;
                            @endphp
                            <div class="layout_3--item full">
                                <div class="thumb">
                                    <a href="{{ $noticia_url }}"><img src="{{ $noticia_imagen }}" class="img-responsive" alt="{{ $noticia_titulo }}"/></a>
                                </div>

                                <div class="item-detail">
                                    <h4><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></h4>
                                    <div class="meta"><span class="date">{{ $noticia_fecha }}</span></div>

                                    <p>{{ $noticia_descripcion }}</p>
                                    <a href="{{ $noticia_url }}" class="rmore">Seguir leyendo</a>
                                </div>
                            </div>
                            <hr class="l4">
                        @endforeach

					</div>
				</div>

				<!-- PAGINATION -->
                <div class="text-center">
                    {!! $noticias->appends(Request::all())->render() !!}
                </div>
			</div>
			<!-- // CATEGORY -->

			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
                @include('frontend.partials.siguenos')

                @include('frontend.partials.mas-visto')

                @include('frontend.partials.tags')
			</aside>
			<!-- // SIDEBAR -->

		</div>
	</div>
	<!-- // CONTENT -->
@stop

@section('contenido_footer')
@stop