<?php namespace Sucesos\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Sucesos\Entities\Sucesos\NoticiaView;
use Sucesos\Entities\Sucesos\Suscripcion;
use Sucesos\Mail\SuscripcionAdmin;
use Sucesos\Mail\SuscripcionGracias;
use Sucesos\Repositories\Sucesos\CategoriaRepo;
use Sucesos\Repositories\Sucesos\ColumnaRepo;
use Sucesos\Repositories\Sucesos\ColumnistaRepo;
use Sucesos\Repositories\Sucesos\NoticiaRepo;
use Sucesos\Repositories\Sucesos\PortadaRepo;
use Sucesos\Repositories\Sucesos\TagRepo;
use Sucesos\Repositories\Sucesos\VideoRepo;

class FrontendController extends Controller
{
    protected $noticiaRepo;
    protected $tagRepo;
    protected $categoriaRepo;
    protected $columnistaRepo;
    protected $columnaRepo;
    protected $videoRepo;
    protected $portadaRepo;

    /**
     * FrontendController constructor.
     * @param CategoriaRepo $categoriaRepo
     * @param NoticiaRepo $noticiaRepo
     * @param TagRepo $tagRepo
     * @param ColumnistaRepo $columnistaRepo
     * @param ColumnaRepo $columnaRepo
     * @param VideoRepo $videoRepo
     * @param PortadaRepo $portadaRepo
     */
    public function __construct(CategoriaRepo $categoriaRepo,
                                NoticiaRepo $noticiaRepo,
                                TagRepo $tagRepo,
                                ColumnistaRepo $columnistaRepo,
                                ColumnaRepo $columnaRepo,
                                VideoRepo $videoRepo,
                                PortadaRepo $portadaRepo)
    {
        $this->categoriaRepo = $categoriaRepo;
        $this->noticiaRepo = $noticiaRepo;
        $this->tagRepo = $tagRepo;
        $this->columnistaRepo = $columnistaRepo;
        $this->columnaRepo = $columnaRepo;
        $this->videoRepo = $videoRepo;
        $this->portadaRepo = $portadaRepo;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        $destacado = $this->noticiaRepo->listaNoticiasDestacada();
        $normal = $this->noticiaRepo->listaNoticiasNormal();
        $columnas = $this->columnaRepo->listaColumnasHome();
        $videos = $this->videoRepo->listaVideosHome();
        $portada = $this->portadaRepo->listaPortadaHome();

        return view('frontend.index', compact('destacado','normal','columnas','videos','portada'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function categoria($url)
    {
        $categoria = $this->categoriaRepo->where('slug_url', $url)->first();
        $noticias = $this->noticiaRepo->listaNoticiasCategoria($categoria->id);

        return view('frontend.categoria', compact('categoria','noticias'));
    }

    /**
     * @param $id
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function noticia($id, $url)
    {
        $noticia = $this->noticiaRepo->findOrFail($id);

        $view = new NoticiaView();
        $view->noticia_id = $id;
        $view->save();

        $relacionadas = $this->tagRepo->findOrFail($noticia->tags->first()->id);

        return view('frontend.noticia', compact('noticia','relacionadas'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tag($url)
    {
        $tag = $this->tagRepo->where('slug_url', $url)->first();
        $noticias = $tag->noticiasTags();

        return view('frontend.etiqueta', compact('noticias','tag'));
    }

    /**
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function columnista($url)
    {
        $columnista = $this->columnistaRepo->where('slug_url', $url)->first();
        $noticias = $this->columnaRepo->listaNoticiasColumnista($columnista->id);

        return view('frontend.columnista', compact('columnista','noticias'));
    }

    /**
     * @param $id
     * @param $url
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function columna($id, $url)
    {
        $noticia = $this->columnaRepo->findOrFail($id);
        $relacionadas = $this->columnaRepo->listaColumnasRelacionadas($noticia);

        return view('frontend.columna', compact('noticia','relacionadas'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function buscar(Request $request)
    {
        $texto = $request->input('b');
        $rows = $this->noticiaRepo->busquedaFrontend($texto);

        return view('frontend.buscar', compact('rows','texto'));
    }

    /*
     * PORTADA
     */
    public function portada()
    {
        $portada = $this->portadaRepo->listaPortadaHome();

        return view('frontend.portada', compact('portada'));
    }

    /*
     * SUSCRIPCION
     */
    public function suscripcion()
    {
        return view('frontend.suscripcion');
    }

    public function suscripcionPost(Request $request)
    {
        $rules = [
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|min:8|max:8|unique:suscripcion,dni',
            'telefono' => 'required',
            'email' => 'required|email|unique:suscripcion,email',
            'direccion' => 'required',
            'referencia' => 'required'
        ];

        $this->validate($request, $rules);

        $row = new Suscripcion($request->all());
        $row->save();

        Mail::to($request->input('email'), $request->input('nombres'))
                ->send(new SuscripcionGracias($row));

        Mail::send(new SuscripcionAdmin($row));

        return [
            'success' => true
        ];
    }
}
