<?php namespace Sucesos\Http\Controllers;

use Illuminate\Http\Request;
use Sucesos\Repositories\Sucesos\NoticiaRepo;

class FrontendController extends Controller
{
    protected $noticiaRepo;

    /**
     * FrontendController constructor.
     * @param NoticiaRepo $noticiaRepo
     */
    public function __construct(NoticiaRepo $noticiaRepo)
    {
        $this->noticiaRepo = $noticiaRepo;
    }

    public function home()
    {
        $destacado = $this->noticiaRepo->listaNoticiasDestacada();
        $normal = $this->noticiaRepo->listaNoticiasNormal();

        return view('frontend.index', compact('destacado','normal'));
    }

    public function noticia($id, $url)
    {
        $noticia = $this->noticiaRepo->findOrFail($id);

        return view('frontend.noticia', compact('noticia'));
    }
}
