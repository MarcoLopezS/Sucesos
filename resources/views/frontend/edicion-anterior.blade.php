@extends('layouts.frontend')

@php
    $ed_titulo = 'Ediciones Anteriores';
@endphp

@section('titulo')
    {{ $ed_titulo }} | @parent
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
						<li>{{ $ed_titulo }}</li>
					</ul>
					<br>
					<h2>{{ $ed_titulo }}</h2>
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

					@foreach($ediciones as $edicion)
						@php
							$edicion_titulo = $edicion->titulo;
							$edicion_url = $edicion->url;
							$edicion_imagen = $edicion->imagen_edicion_anterior;
							$edicion_fecha = $edicion->fecha_edicion_anterior;
						@endphp
					<div class="item-edicion-anterior col-md-6">
						<div class="imagen">
							<a href="{{ $edicion_url }}">
								<img src="{{ $edicion_imagen }}" alt="{{ $edicion_titulo }}" class="img-responsive">
							</a>
							<div class="boton">
								<a href="{{ $edicion_url }}">Ver edición online</a>
							</div>
						</div>
						<div class="fecha">
							<i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
							{{ $edicion_fecha }}
						</div>
					</div>
					@endforeach

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