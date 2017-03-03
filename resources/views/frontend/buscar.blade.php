@extends('layouts.frontend')

@php
    $buscar_titulo = $texto;
@endphp

@section('titulo')
    {{ $buscar_titulo }} | @parent
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
                        <li>{{ $buscar_titulo }}</li>
                    </ul>
                    <br>
                    <h2>{{ $buscar_titulo }}</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<!-- CATEGORY -->
	<div class="container padding-bottom-30">
		<div class="row">
			<div class="col-md-8 col-sm-7 dual-posts padding-bottom-30">

                @foreach($rows as $noticia)
                    @php
                        $noticia_titulo = $noticia->titulo;
                        $noticia_url = $noticia->url;
                        $noticia_descripcion = $noticia->descripcion;
                        $noticia_categoria = $noticia->categoria->titulo;
                        $noticia_categoria_url = $noticia->categoria->url;
                        $noticia_imagen = $noticia->imagen_tag;
                        $noticia_fecha = $noticia->fecha;
                    @endphp
                    <div class="row">
                        <div class="layout_3--item">
                            <div class="col-md-5 col-sm-6">
                                <div class="thumb">
                                    <a href="{{ $noticia_url }}"><img src="{{ $noticia_imagen }}" class="img-responsive" alt="{{ $noticia_titulo }}"/></a>
                                </div>
                            </div>

                            <div class="col-md-7 col-sm-6">
                                <span class="cat"><a href="{{ $noticia_categoria_url }}">{{ $noticia_categoria }}</a></span>
                                <h4><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></h4>
                                <p>{{ $noticia_descripcion }}</p>
                                <div class="meta"><span class="date">{{ $noticia_fecha }}</span></div>
                            </div>
                        </div>
                    </div>

                    <hr class="l4">
                @endforeach

				<!-- PAGINATION -->
                <div class="text-center">
                    {!! $rows->appends(Request::all())->render() !!}
                </div>
			</div>
			<!-- // CATEGORY -->

			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
                @include('frontend.partials.publicidad-sidebar')

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