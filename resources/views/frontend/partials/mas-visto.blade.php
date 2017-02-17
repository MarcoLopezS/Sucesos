@php($viewItem = 1)
<div class="side-widget margin-bottom-30">
    <h3 class="heading-1"><span>Lo más visto</span></h3>
    <ul class="trending-text">
        @foreach($masVisto as $view)
            @php
                $visto_titulo = $view->noticia->titulo;
                $visto_url = $view->noticia->url;
                $visto_fecha = $view->noticia->fecha;
            @endphp
            <li>
                <em>{{ $viewItem }}</em>
                <p><a href="{{ $visto_url }}">{{ $visto_titulo }}</a> <span>{{ $visto_fecha }}</span></p>
            </li>
            @php($viewItem = $viewItem + 1)
        @endforeach
    </ul>
</div>