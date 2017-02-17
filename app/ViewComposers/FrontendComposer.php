<?php namespace Sucesos\ViewComposers;

use Illuminate\Contracts\View\View;
use Sucesos\Entities\Sucesos\NoticiaView;
use Sucesos\Repositories\Sucesos\TagRepo;

class FrontendComposer
{
    protected $tagRepo;

    /**
     * FrontendComposer constructor.
     * @param TagRepo $tagRepo
     */
    public function __construct(TagRepo $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }

    public function compose(View $view)
    {
        //NOTICIAS MAS VISTAS
        $masVisto = NoticiaView::select(['noticia_id', \DB::raw('COUNT(*) visitas')])
                                ->orderBy('visitas', 'desc')
                                ->groupBy('noticia_id')
                                ->havingRaw('COUNT(*)')
                                ->take(5)->get();

        $view->masVisto = $masVisto;
        $view->tags = $this->tagRepo->listTags();
    }
    
}