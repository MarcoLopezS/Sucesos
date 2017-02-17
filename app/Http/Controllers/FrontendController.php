<?php namespace Sucesos\Http\Controllers;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\NoticiaView;
use Sucesos\Repositories\Sucesos\CategoriaRepo;
use Sucesos\Repositories\Sucesos\NoticiaRepo;
use Sucesos\Repositories\Sucesos\TagRepo;

class FrontendController extends Controller
{
    protected $noticiaRepo;
    protected $tagRepo;
    protected $categoriaRepo;

    /**
     * FrontendController constructor.
     * @param CategoriaRepo $categoriaRepo
     * @param NoticiaRepo $noticiaRepo
     * @param TagRepo $tagRepo
     */
    public function __construct(CategoriaRepo $categoriaRepo,
                                NoticiaRepo $noticiaRepo,
                                TagRepo $tagRepo)
    {
        $this->categoriaRepo = $categoriaRepo;
        $this->noticiaRepo = $noticiaRepo;
        $this->tagRepo = $tagRepo;
    }

    public function home()
    {
        $destacado = $this->noticiaRepo->listaNoticiasDestacada();
        $normal = $this->noticiaRepo->listaNoticiasNormal();

        return view('frontend.index', compact('destacado','normal','tags'));
    }

    public function noticia($id, $url)
    {
        $noticia = $this->noticiaRepo->findOrFail($id);

        $view = new NoticiaView();
        $view->noticia_id = $id;
        $view->save();

        $relacionadas = $this->tagRepo->findOrFail($noticia->tags->first()->id);

        return view('frontend.noticia', compact('noticia','relacionadas'));
    }

    public function categoria($url)
    {
        $categoria = $this->categoriaRepo->where('slug_url', $url)->first();
        $noticias = $this->noticiaRepo->listaNoticiasCategoria($categoria->id);

        return view('frontend.categoria', compact('categoria','noticias'));
    }

    public function tag($url)
    {
        $tag = $this->tagRepo->where('slug_url', $url)->first();
        $noticias = $tag->noticiasTags();

        return view('frontend.etiqueta', compact('noticias','tag'));
    }
}
