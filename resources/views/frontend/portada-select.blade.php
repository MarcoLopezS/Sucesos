@extends('layouts.frontend')

@php
	$portada_titulo = $portada->titulo;
	$portada_embed = $portada->embed;
@endphp

@section('titulo')
	{{ $portada_titulo }} | @parent
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
                        <li><a href="/ediciones-anteriores">Ediciones Anteriores</a></li>
                    </ul>
                    <br>
                    <h2>{{ $portada_titulo }}</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<div class="container padding-bottom-30">
		<div class="row">

			<div class="col-md-12 col-sm-12 padding-bottom-30">

                <div class="magazine-container">

                    <div class="magazine-section stackable">
                        <div class="magazine-image-details column">

	                        {!! $portada_embed !!}

                        </div>
                    </div>

                </div>

			</div>

		</div>
	</div>
@stop

@section('contenido_footer')
@stop