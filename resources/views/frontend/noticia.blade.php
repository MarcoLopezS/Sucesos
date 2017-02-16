@extends('layouts.frontend')

@section('titulo')
    Noticia | @parent
@endsection

@section('contenido_header')
    {{-- FlexSlider --}}
    {!! HTML::style(elixir('libs/flexslider/flexslider.css')) !!}
@stop

@section('contenido_body')
	<!-- PAGE HEADER -->
	<div class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<ul class="bcrumbs">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Politica</a></li>
						<li>GyM se reorganiza: ¿qué opinan los analistas y AFP?</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- // PAGE HEADER -->

	<!-- CONTENT -->
	<div class="container single-post padding-bottom-30">
		<div class="row">
			<div class="clearfix"></div>
			<div class="col-md-8 col-sm-7 padding-bottom-30">
				<div class="blog-excerpt">
					{{--<img src="/images/category/single/5.jpg" class="img-responsive" alt=""/>--}}

                    <div class="flexslider loading">
                        <ul class="slides">
                            <li><img src="images/category/slider/1.jpg" class="img-responsive" width="300" alt=""/></li>
                            <li><img src="images/category/slider/2.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/3.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/4.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/5.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/6.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/7.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/8.jpg" class="img-responsive" alt=""/></li>
                            <li><img src="images/category/slider/9.jpg" class="img-responsive" alt=""/></li>
                        </ul>
                    </div>

					<div class="blog-single-head margin-top-25">
						<h2>GyM se reorganiza: ¿qué opinan los analistas y AFP?</h2>
						<div class="meta"><span class="author">por Marco Polo.</span><span class="date">Febrero 10, 2017</span></div>
                        <p><em>El grupo GyM, Graña y Montero, busca remediar las secuelas de su asociación con Odebrecht</em></p>
                    </div>

					<p>La asociación de  Graña y Montero (GyM) con Odebrecht y la cancelación del Gasoducto Sur Peruano (GSP) han pasado una factura muy alta a la constructora peruana. Reflejo de ello es el desplome de su cotización bursátil desde diciembre pasado (-45%).</p>
					<p>En respuesta, GyM ha iniciado un proceso de reorganización gerencial y venta de activos no estratégicos por US$300 mlls. con el que busca retomar la confianza de los inversionistas. ¿Lo conseguirá? </p>

					<h5>El error más grande</h5>

					<p>Carlos Rojas, CEO de Andino Asset Management, es claro en señalar que el directorio de GyM ha “fallado en su evaluación de riesgos” en el caso del gasoducto. Para el analista, este ha sido el error más grande de la compañía en los últimos 15 años, pero no el único. Rojas recuerda las pérdidas derivadas de los contratos para la mina Inmaculada y la hidroeléctrica Cerro El Águila.</p>

                    <p>“El gasoducto les quedó muy grande. Por eso, creo que GyM tiene que reducirse a un tamaño en que pueda manejarse eficientemente. Las ventas de activos son necesarias y a una velocidad mayor a la propuesta”, sostiene.</p>

                    <p>Flor Felices, analista de Inteligo SAB, remarca que la reputación de la constructora peruana se ha visto dañada por su asociación con Odebrecht, pero reconoce que las medidas de reorganización que está implementando y su reciente ‘conference call’ con inversionistas “transmiten tranquilidad” al mercado. </p>

                    <p>“Nuestra recomendación es comprar [acciones de GyM] porque el precio está muy castigado y no refleja el valor fundamental de la empresa. Esto cambiará solo si en las próximas semanas se conoce algo más que la vincule con actos de corrupción”, señala.</p>
				</div>	

				<div class="single-topic">
					<span>Topics:</span> 
					<ul class="tags">
						<li><a href="#">Apple</a></li>
						<li><a href="#">Finance</a></li>
						<li><a href="#">European Union</a></li>
						<li><a href="#">Germany</a></li>
					</ul>
				</div>

				<div class="clearfix"></div>
				<div class="margin-bottom-10"></div>
				<div class="clearfix"></div>

				<div class="single-share">
					<span>Compartir:</span>
					<div class="post-share">
                        <div class="addthis_inline_share_toolbox"></div>
					</div>
				</div>

				<div class="margin-bottom-30"></div>
				<hr class="l4">

				<div class="post-author margin-bottom-90">
					<img src="/images/author.png" alt=""/>

					<h5>Marco Polo</h5>
					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
					<div class="social">
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
					</div>
				</div>

				<div class="clearfix"></div>

                <h3 class="heading-1"><span>Articulos relacionados</span></h3>
				<div class="row margin-bottom-30">
					<div class="col-md-4">
						<div class="layout_2--item">
							<div class="thumb">
								<a href="post_page_01.html"><img src="/images/category/01/3.jpg" class="img-responsive" alt=""></a>
							</div>
							<span class="cat">Business</span>
							<h4><a href="post_page_01.html">Unilever Buys Dollar Shave Club for $1 Billion</a></h4>
							<div class="meta"><span class="author">by Rana F.</span><span class="date">Sep. 28, 2016</span><span class="comments">2</span></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="layout_2--item">
							<div class="thumb">
								<a href="post_page_01.html"><img src="/images/category/01/2.jpg" class="img-responsive" alt=""></a>
							</div>
							<span class="cat">Business</span>
							<h4><a href="post_page_01.html">Unilever Buys Dollar Shave Club for $1 Billion</a></h4>
							<div class="meta"><span class="author">by Rana F.</span><span class="date">Sep. 28, 2016</span><span class="comments">2</span></div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="layout_2--item">
							<div class="thumb">
								<a href="post_page_01.html"><img src="/images/category/01/5.jpg" class="img-responsive" alt=""></a>
							</div>
							<span class="cat">Business</span>
							<h4><a href="post_page_01.html">Unilever Buys Dollar Shave Club for $1 Billion</a></h4>
							<div class="meta"><span class="author">by Rana F.</span><span class="date">Sep. 28, 2016</span><span class="comments">2</span></div>
						</div>
					</div>
				</div>
			</div>
	
			<!-- SIDEBAR -->
			<aside class="col-md-4 col-sm-5">
				<div class="ads ad-300 margin-bottom-60">
					<span>Publicidad</span>
					<img src="http://placeholdit.imgix.net/~text?txtsize=30&bg=c6c6c6&txtclr=000000&txt=Publicidad&w=300&h=250" class="img-responsive" alt=""/>
				</div>

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

				<div class="side-widget margin-bottom-30">
					<h3 class="heading-1"><span>Lo más visto</span></h3>
					<ul class="trending-text">
						<li>
							<em>1</em>
							<p><a href="post_page_01.html">Nests New Product Is an Outdoor Security Camera</a> <span>Sep 26, 2016</span></p>
						</li>
						<li>
							<em>2</em>
							<p><a href="post_page_01.html">What to Know About the History of the Fed's Beige Book</a> <span>Sep 24, 2016</span></p>
						</li>
						<li>
							<em>3</em>
							<p><a href="post_page_01.html">The Ultimate Job Seeker's Guide to LinkedIn</a> <span>Sep 22, 2016</span></p>
						</li>
						<li>
							<em>2</em>
							<p><a href="post_page_01.html">A Major Legal Fight Just Opened Up in the Hyperloop</a> <span>Sep 21, 2016</span></p>
						</li>
						<li>
							<em>5</em>
							<p><a href="post_page_01.html">These Are Some of the Best Drone Photos in the World</a> <span>Sep 20, 2016</span></p>
						</li>
					</ul>
				</div>
			</aside>
			<!-- // SIDEBAR -->

		</div>
	</div>
	<!-- // CONTENT -->
@stop

@section('contenido_footer')
    {{-- FlexSlider --}}
    {!! HTML::script('libs/flexslider/jquery.flexslider.js') !!}
    <script>
        $(document).on("ready", function() {
            $('.flexslider').flexslider({
                animation: 'fade',
                animationLoop: true,
                slideshow: true,
                slideshowSpeed: 4000,
                animationSpeed: 800,
                pauseOnHover: true,
                pauseOnAction:true,
                controlNav: true,
                directionNav: true
            });
        });
    </script>
@stop