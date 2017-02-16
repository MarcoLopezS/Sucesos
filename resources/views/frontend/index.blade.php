@extends('layouts.frontend')

@php
    $IDnormal = 1;
    $IDdestacado = 1;
@endphp

@section('contenido_header')
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
                                $noticia_imagen = $noticia->imagen_620_x_470;
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
                            $noticia_imagen = $noticia->imagen_490_x_300;
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

                <h3 class="heading-1"><span>Columnistas</span></h3>
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <img src="/images/columnista.png" width="100%" alt="">
                    </div>
                </div>
            </div>

            <aside class="col-md-4 col-sm-4">
                <div class="side-widget margin-bottom-60">
                    <h3 class="heading-1"><span>Siguenos</span></h3>
                    <div class="side-share side-share2">
                        <div class='share s_facebook'>
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class='share s_linkedin'>
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class='share s_plus'>
                            <i class="fa fa-google-plus"></i>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>

                <div class="side-widget margin-bottom-50">
                    <h3 class="heading-1"><span>lo más visto</span></h3>
                    <ul class="trending padding-top-30 padding-bottom-15">
                        <li>
                            <div class="thumb">
                                <img src="/images/category/01/9.jpg" class="img-responsive" alt="">
                            </div>
                            <h4><a href="/noticia">Nest's New Product Is an Outdoor Security Camera</a></h4>
                            <div class="meta"><span class="date">Sep. 26, 2016</span><span class="rating">9.4</span></div>
                        </li>
                        <li>
                            <div class="thumb">
                                <img src="/images/category/01/13.jpg" class="img-responsive" alt="">
                            </div>
                            <span class="cat">Business</span>
                            <h4><a href="/noticia">What to Know About the History of the Fed's Beige Book</a></h4>
                            <div class="meta"><span class="date">Sep. 24, 2016</span><span class="rating">9.1</span><span class="comments">4</span></div>
                        </li>
                        <li>
                            <div class="thumb">
                                <div class="icon-24 gallery2"></div>
                                <div class="overlay-alt"></div>
                                <img src="/images/category/01/14.jpg" class="img-responsive" alt="">
                            </div>
                            <h4><a href="/noticia">The Ultimate Job Seeker's Guide to LinkedIn</a></h4>
                            <div class="meta"><span class="date">Sep. 22, 2016</span><span class="rating">8.8</span></div>
                        </li>
                    </ul>
                </div>

                <div class="side-widget margin-bottom-60">
                    <h3 class="heading-1"><span>Tags</span></h3>
                    <ul class="tags">
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Opinion</a></li>
                        <li><a href="#">Tecnología</a></li>
                        <li><a href="#">Entertainment</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">World</a></li>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Health</a></li>
                        <li><a href="#">Science</a></li>
                        <li><a href="#">Food</a></li>
                        <li><a href="#">Sports</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </div>

                <div class="side-widget margin-bottom-60">
                    <div class="side-widget margin-bottom-0">
                        <h3 class="heading-1"><span>Portada</span></h3>
                        <div class="layout_3--item">
                            <div class="thumb">
                                <a href="#"><img src="/images/portada.jpg" class="img-responsive" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
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
@stop