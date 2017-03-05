@extends('layouts.frontend')

@php
    $IDnormal = 1;
    $IDdestacado = 1;
@endphp

@section('contenido_header')
    {{-- FlexSlider --}}
    {!! HTML::style('https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/flexslider.min.css') !!}

    {{-- Video --}}
    {!! HTML::style('libs/royalslider/royalslider.css') !!}
    {!! HTML::style('libs/royalslider/skins/default/rs-default.css') !!}
@stop

@section('contenido_body')
    <div class="container margin-top-30">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="layout_1 margin-bottom-30">
                    <div class="row">
                        <div id="destacado-izq" class="col-md-8"></div>
                        <div id="destacado-der" class="col-md-4"></div>

                        @foreach($destacado as $noticia)
                            @php
                                $noticia_titulo = $noticia->titulo;
                                $noticia_url = $noticia->url;
                                $noticia_imagen = $noticia->imagen_noticia_destacada;
                                $noticia_categoria = $noticia->categoria->titulo;
                                $noticia_fecha = $noticia->fecha;
                            @endphp
                            <div id="destacado-{{ $IDdestacado }}" class="layout_1--item">
                                <a href="{{ $noticia_url }}">
                                    <span class="badge text-uppercase badge-overlay">{{ $noticia_categoria }}</span>
                                    <div class="overlay"></div>
                                    <img src="{{ $noticia_imagen }}" class="img-responsive" alt=""/>
                                    <div class="layout-detail padding-25">
                                        <h4>{{ $noticia_titulo }}</h4>
                                        <div class="meta"><span class="date">{{ $noticia_fecha }}</span></div>
                                    </div>
                                </a>
                            </div>
                            @php
                                $IDdestacado = $IDdestacado + 1;
                            @endphp
                        @endforeach

                    </div>
                </div>
                <div class="layout_2 margin-bottom-20">

                    <div id="normal-sup" class="row"></div>
                    <div id="normal-inf" class="row"></div>

                    @foreach($normal as $noticia)
                        @php
                            $noticia_titulo = $noticia->titulo;
                            $noticia_url = $noticia->url;
                            $noticia_imagen = $noticia->imagen_noticia_normal;
                            $noticia_categoria = $noticia->categoria->titulo;
                            $noticia_fecha = $noticia->fecha;
                        @endphp

                        <div id="normal-{{ $IDnormal }}" class="col-md-4 col-sm-4">
                            <div class="layout_2--item">
                                <div class="thumb">
                                    <a href="{{ $noticia_url }}"><img src="{{ $noticia_imagen }}" class="img-responsive" alt=""/></a>
                                </div>
                                <span class="cat">{{ $noticia_categoria }}</span>
                                <h4><a href="{{ $noticia_url }}">{{ $noticia_titulo }}</a></h4>
                                <div class="meta"><span class="date">{{ $noticia_fecha }}</span></div>
                            </div>
                        </div>

                        @php
                            $IDnormal = $IDnormal + 1;
                        @endphp
                    @endforeach

                </div>

                <div class="ads ad-300 margin-bottom-60">
                    <span>Publicidad</span>
                    <img src="/images/publicidad-noticias.png" class="img-responsive" alt=""/>
                </div>

                <h3 class="heading-1"><span>Columnistas</span></h3>
                <div class="row seccion-columnistas">
                    <div class="col-md-12 col-sm-12">
                        <div class="flexslider loading">
                            <ul class="slides columnistas">

                                @foreach($columnas as $columna)
                                    @php
                                        $columnista = $columna->columnista->nombre_completo;
                                        $columnista_foto = $columna->columnista->imagen_home;
                                        $columna_titulo = $columna->titulo;
                                        $columna_url = $columna->url;
                                    @endphp
                                <li>
                                    <div class="columnista-item">
                                        <div class="nombre">{{ $columnista }}</div>
                                        <div class="imagen"><img src="{{ $columnista_foto }}" alt="{{ $columnista }}"></div>
                                        <div class="titulo">
                                            <a href="{{ $columna_url }}">{{ $columna_titulo }}</a>
                                        </div>
                                    </div>
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <aside class="col-md-4 col-sm-4">
                @include('frontend.partials.siguenos')

                @include('frontend.partials.mas-visto')

                @include('frontend.partials.tags')

                @include('frontend.partials.publicidad-sidebar')

                @include('frontend.partials.portada')
            </aside>
        </div>
    </div>

    <div class="padding-bottom-50 video-container-white">
        <div class="container">
            <h3 class="heading-1"><span class="tv"><img src="/images/logo-tv.png" class="img-responsive" alt="Sucesos TV"></span></h3>
            <div class="clearfix"></div>

            <div id="video-gallery" class="royalSlider videoGallery rsDefault">

                @foreach($videos as $video)
                    @php
                        $video_titulo = $video->titulo;
                        $video_youtube = $video->youtube;
                        $video_imagen = $video->imagen_home;
                    @endphp
                <a class="rsImg" data-rsw="845" data-rsh="475" data-rsvideo="{{ $video_youtube }}" href="{{ $video_imagen }}">
                    <div class="rsTmb">
                        <h5>{{ $video_titulo }}</h5>
                    </div>
                </a>
                @endforeach

            </div>
        </div>
    </div>
@stop

@section('contenido_footer')
    {{-- FlexSlider --}}
    {!! HTML::script('https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.3/jquery.flexslider.min.js') !!}
    {!! HTML::script(elixir('js/flexslider.js')) !!}

    {{-- Video --}}
    {!! HTML::script('libs/royalslider/jquery.royalslider.min.js') !!}
    <script>
        $('#video-gallery').royalSlider({
            arrowsNav: false,
            fadeinLoadedSlide: true,
            controlNavigationSpacing: 0,
            controlNavigation: 'thumbnails',
            thumbs: {
                autoCenter: false,
                fitInViewport: true,
                orientation: 'vertical',
                spacing: 0,
                paddingBottom: 0
            },
            keyboardNavEnabled: true,
            imageScaleMode: 'fill',
            imageAlignCenter: true,
            slidesSpacing: 0,
            loop: false,
            loopRewind: true,
            numImagesToPreload: 3,
            video: {
                autoHideArrows: true,
                autoHideControlNav: false,
                autoHideBlocks: true
            },
            autoScaleSlider: true,
            autoScaleSliderWidth: 960,
            autoScaleSliderHeight: 400,
            imgWidth: 800,
            imgHeight: 400
        });
    </script>
@stop