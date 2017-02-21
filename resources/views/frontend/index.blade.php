@extends('layouts.frontend')

@php
    $IDnormal = 1;
    $IDdestacado = 1;
@endphp

@section('contenido_header')
    {{-- FlexSlider --}}
    {!! HTML::style(elixir('libs/flexslider/flexslider.css')) !!}
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
                                $noticia_categoria = $noticia->categoria_nombre;
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
                            $noticia_categoria = $noticia->categoria_nombre;
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
                    <img src="http://placeholdit.imgix.net/~text?txtsize=30&bg=c6c6c6&txtclr=000000&txt=Publicidad&w=710&h=100" class="img-responsive" alt=""/>
                </div>

                <h3 class="heading-1"><span>Columnistas</span></h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="flexslider loading">
                            <ul class="slides">
                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="columnista-item">
                                        <div class="datos">
                                            <div class="imagen"><img src="http://94557268b75eb4291d5e-41c649821d3b6b5cdbf6b11ec1d89955.r57.cf2.rackcdn.com/opinion/2015/04/28/1204715.jpg" alt=""></div>
                                            <div class="nombre">PASCAL BELTRÁN DEL RÍO</div>
                                        </div>
                                        <div class="columna">
                                            <div class="titulo">¿Institucionalidad o voluntarismo?</div>
                                        </div>
                                    </div>
                                </li>
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
            <h3 class="heading-1"><span>Sucesos TV</span></h3>
            <div class="clearfix"></div>
            <div class="col-md-8 col-sm-7 no-padding">
                <div class="video-container">
                    <video id="video" width="400" onclick="togglePause()" controls>
                        <source src="video/1.mp4" type="video/mp4">
                    </video>
                    <div class="layout_1--item vc-item1 active">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
                        <div class="overlay"></div>
                        <img src="images/home/06/1.jpg" class="img-responsive" alt=""/>
                        <div class="layout-detail padding-25">
                            <h4>Twitter Is Conflicted Over Shaunae Miller's Finish-Line Dive</h4>
                            <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 27, 2016</span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                    <div class="layout_1--item vc-item2">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
                        <div class="overlay"></div>
                        <img src="images/home/06/2.jpg" class="img-responsive" alt=""/>
                        <div class="layout-detail padding-25">
                            <h4>Twitter Is Conflicted Over Shaunae Miller's Finish-Line Dive</h4>
                            <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 27, 2016</span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                    <div class="layout_1--item vc-item3">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
                        <div class="overlay"></div>
                        <img src="images/home/06/3.jpg" class="img-responsive" alt=""/>
                        <div class="layout-detail padding-25">
                            <h4>Twitter Is Conflicted Over Shaunae Miller's Finish-Line Dive</h4>
                            <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 27, 2016</span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                    <div class="layout_1--item vc-item4">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
                        <div class="overlay"></div>
                        <img src="images/home/06/4.jpg" class="img-responsive" alt=""/>
                        <div class="layout-detail padding-25">
                            <h4>Twitter Is Conflicted Over Shaunae Miller's Finish-Line Dive</h4>
                            <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 27, 2016</span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                    <div class="layout_1--item vc-item5">
                        <div class="video-play"></div>
                        <span class="badge text-uppercase badge-overlay badge-tech">Tech</span>
                        <div class="overlay"></div>
                        <img src="images/home/06/5.jpg" class="img-responsive" alt=""/>
                        <div class="layout-detail padding-25">
                            <h4>Twitter Is Conflicted Over Shaunae Miller's Finish-Line Dive</h4>
                            <div class="meta"><span class="author">by Mahita G.</span><span class="date">Sep. 27, 2016</span><span class="comments">3</span><span class="views">284</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-5 no-padding">
                <div class="now-playing">
                    <i class="fa fa-play"></i>
                    <p>Desktop Showdown: Apple's Siri vs. Microsoft's Cortana <span>20:45</span></p>
                </div>
                <div class="video-list">
                    <ul>
                        <li class="vl-video1">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/1.jpg" class="img-responsive" alt=""/>
                            </div>
                            <p>Desktop Showdown: Apple's Siri vs. Microsoft's Cortana <span>20:45</span></p>
                        </li>
                        <li class="vl-video2">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/2.jpg" class="img-responsive" alt=""/>
                            </div>
                            <p>The Best New Features Coming to Your Windows<span>18:35</span></p>
                        </li>
                        <li class="vl-video3">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/3.jpg" class="img-responsive" alt=""/>
                            </div>
                            <p>This Child Model Is So Over Being On Live TV <span>11:20</span></p>
                        </li>
                        <li class="vl-video4">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/4.jpg" class="img-responsive" alt=""/>
                            </div>
                            <p>Outrage at bloodied Aleppo boy photo and lorem <span>15:25</span></p>
                        </li>
                        <li class="vl-video5">
                            <div class="thumb">
                                <div class="overlay-alt"></div>
                                <div class="video-play-32"></div>
                                <img src="images/home/06/thumb/5.jpg" class="img-responsive" alt=""/>
                            </div>
                            <p>The best lorem ipsum video of 2016 releaed <span>13:45</span></p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
@stop

@section('contenido_footer')
    {{-- FlexSlider --}}
    {!! HTML::script('libs/flexslider/jquery.flexslider.js') !!}
    {!! HTML::script('js/flexslider.js') !!}
@stop