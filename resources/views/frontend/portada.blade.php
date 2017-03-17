@extends('layouts.frontend')

@section('titulo')
    Portada | @parent
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
                        <li>Portada</li>
                    </ul>
                    <br>
                    <h2>Portada</h2>
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
                            <div class="image">
                                <img class="fill" src="/images/portada.jpg">
                            </div>
                            <div class="details">
                                <h2>Suscríbete a Sucesos</h2>
                                <h3>La suscripción por un año incluye:</h3>
                                <ul>
                                    <li class="icon bullet-arrow">52 ediciones físicas (incluye ediciones especiales)</li>
                                    <li class="icon bullet-arrow">Kit lector: 03 libros originales de la editorial G7</li>
                                </ul>
                                <div class="exp-button">
                                    <a href="/suscripcion">Suscríbete aquí</a>
                                </div>

                                <div class="magazine-others column">

                                    <div class="magazine">
                                        <div class="image">
                                            <img class="fill" src="/images/portada-1.jpg">
                                        </div>
                                    </div>

                                    <div class="magazine">
                                        <div class="image">
                                            <img class="fill" src="/images/portada-2.jpg">
                                        </div>
                                    </div>

                                    <div class="magazine">
                                        <div class="image">
                                            <img class="fill" src="/images/portada-3.jpg">
                                        </div>
                                    </div>

                                    <div class="clear"></div>

                                </div>
                            </div>
                        </div>



                    </div>

                </div>

			</div>

		</div>
	</div>
@stop

@section('contenido_footer')
@stop