@extends('layouts.admin')

@section('contenido_header')
{{-- DROPZONE --}}
{!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css') !!}
@stop

@section('contenido_admin_title')
    Columnista - Nuevo
@stop

@section('contenido_admin')
<div class="row">
    <div class="col-md-12">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>

<!--main content-->
<div class="row">
    <!--row starts-->
    <div class="col-lg-12">

        <div class="row">

            {!! Form::open(['route' => 'admin.columnistas.store', 'method' => 'POST', 'files' => 'true', 'id' => 'formRegister']) !!}

                <div class="col-md-5">

                    <div class="portlet light bordered">

                        <div class="portlet-body form">

                            <div class="form-body">

                                <div class="form-group">
                                    {!! Form::label('nombre', 'Nombre', ['class' => 'control-label bold']) !!}
                                    {!! Form::text('nombre', null, ['id' => 'titulo', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('apellidos', 'Apellidos', ['class' => 'control-label bold']) !!}
                                    {!! Form::text('apellidos', null, ['id' => 'titulo', 'class' => 'form-control']) !!}
                                </div>

                                <div class="form-group">
                                    {!! Form::label('descripcion', 'Descripción', ['class' => 'control-label bold']) !!}
                                    {!! Form::textarea('descripcion', null, ['class' => 'form-control', 'rows' => '5',
                                    'onkeydown' => 'limitText(this.form.descripcion,this.form.countdown,220);',
                                    'onkeyup' => 'limitText(this.form.descripcion,this.form.countdown,220);']) !!}
                                    <span class="help-block">Caracteres permitidos:
                                        <strong>
                                            <input name="countdown" type="text" style="border:none; background:none;" value="220" size="3" readonly id="countdown">
                                        </strong>
                                    </span>
                                </div>

                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="portlet light bordered">
                        <div class="portlet-title"><div class="caption">Foto</div></div>

                        <div class="portlet-body form">

                            <div class="form-horizontal">

                                <div class="form-body">

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="dropzone"></div>
                                            {!! Form::hidden('imagen', null, ['id' => 'upload_imagen']) !!}
                                            {!! Form::hidden('imagen_carpeta', null, ['id' => 'upload_imagen_carpeta']) !!}
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="portlet light bordered">

                        <div class="portlet-body form">

                            <div class="form-body">

                                <div class="form-group">
                                    {!! Form::label('publicar', 'Publicar', ['class' => 'control-label bold']) !!}
                                    <div class="mt-radio-inline">
                                        <label class="mt-radio">
                                            {!! Form::radio('publicar', '1', true,  ['id' => 'publicar']) !!} Si
                                            <span></span>
                                        </label>
                                        <label class="mt-radio">
                                            {!! Form::radio('publicar', '0', null,  ['id' => 'publicar']) !!} No
                                            <span></span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-responsive btn-primary btn-md" type="submit"><i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar</button>
                                    <a href="{{ route('admin.columnistas.index') }}" class="btn btn-responsive btn-default btn-md">Cancelar</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            {!! Form::close() !!}

        </div>

    </div>
    <!--md-6 ends-->

</div>

@stop

@section('contenido_footer')
{{-- Dropzone --}}
{!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js') !!}
{!! HTML::script('assets/apps/scripts/dropzone-imagen.js') !!}
@stop