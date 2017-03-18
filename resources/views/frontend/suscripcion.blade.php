@extends('layouts.frontend')

@section('titulo')
    Suscripción | @parent
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
                        <li>Suscripción</li>
                    </ul>
                    <br>
                    <h2>Suscribete</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<div class="container padding-bottom-30">
		<div class="row">

			<div class="col-md-12 col-sm-12 padding-bottom-30">

                <div id="formulario-suscripcion">

                    <div v-if="!enviado">
                        <form autocomplete="off">

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" v-bind:class="{'has-error': errors.nombres}">
                                        <label for="nombres">Nombre:</label>
                                        <input type="text" name="nombres" class="form-control" v-model="suscripcion.nombres">
                                        <p class="help-block" v-if="errors.nombres">@{{ errors.nombres }}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group" v-bind:class="{'has-error': errors.apellidos}">
                                        <label for="apellidos">Apellidos:</label>
                                        <input type="text" name="apellidos" class="form-control" v-model="suscripcion.apellidos">
                                        <p class="help-block" v-if="errors.apellidos">@{{ errors.apellidos }}</p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group" v-bind:class="{'has-error': errors.dni}">
                                        <label for="dni">DNI:</label>
                                        <input type="text" name="dni" class="form-control" maxlength="8" v-model="suscripcion.dni">
                                        <p class="help-block" v-if="errors.dni">@{{ errors.dni }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group" v-bind:class="{'has-error': errors.telefono}">
                                        <label for="telefono">Teléfono:</label>
                                        <input type="text" name="telefono" class="form-control" v-model="suscripcion.telefono">
                                        <p class="help-block" v-if="errors.telefono">@{{ errors.telefono }}</p>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="form-group" v-bind:class="{'has-error': errors.email}">
                                        <label for="email">Email:</label>
                                        <input type="text" name="email" class="form-control" v-model="suscripcion.email">
                                        <p class="help-block" v-if="errors.email">@{{ errors.email }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" v-bind:class="{'has-error': errors.direccion}">
                                        <label for="direccion">Dirección:</label>
                                        <input type="text" name="direccion" class="form-control" v-model="suscripcion.direccion">
                                        <p class="help-block" v-if="errors.direccion">@{{ errors.direccion }}</p>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group" v-bind:class="{'has-error': errors.referencia}">
                                        <label for="referencia">Referencia:</label>
                                        <input type="text" name="referencia" class="form-control" v-model="suscripcion.referencia">
                                        <p class="help-block" v-if="errors.referencia">@{{ errors.referencia }}</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                                <a href="javascript:;" class="boton-enviar" @@click.prevent="guardarSuscripcion">
                                    <i v-show="loading" class="fa fa-cog fa-spin fa-lg fa-fw"></i>
                                    Enviar datos
                                    <i v-show="loading" class="fa fa-cog fa-spin fa-lg fa-fw"></i>
                                </a>
                            </div>

                            <div class="col-md-12 text-center">
                                <p>Válido para suscripciones en Lima Metropolitana - Sujeto a verificación de distritos de repartos.</p>
                            </div>

                        </form>
                    </div>

                    <div class="suscripcion-envio text-center" v-else>
                        <p>Ha enviado sus datos correctamente.</p>

                        <h3>Gracias por suscribirse.</h3>

                        <a href="/" class="boton-enviar">Volver a Sucesos.pe</a>
                    </div>

                </div>

			</div>

		</div>
	</div>
@stop

@section('contenido_footer')
    {!! HTML::script(elixir('js/suscripcion.js')) !!}
@stop