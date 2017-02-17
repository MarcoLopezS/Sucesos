<div class="side-widget margin-bottom-60">
    <h3 class="heading-1"><span>Tags</span></h3>
    <ul class="tags">
        @foreach($tags as $tag)
            @php
                $tag_titulo = $tag->titulo;
                $tag_url = $tag->url;
            @endphp
            <li><a href="{{ $tag_url }}">{{ $tag_titulo }}</a></li>
        @endforeach
    </ul>
    <div class="clearfix"></div>
</div>