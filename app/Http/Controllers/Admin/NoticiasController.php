<?php namespace Sucesos\Http\Controllers\Admin;

use Sucesos\Entities\Sucesos\Imagen;
use Sucesos\Entities\Sucesos\Noticia;
use Sucesos\Repositories\Sucesos\CategoriaRepo;
use Sucesos\Repositories\Sucesos\ImagenRepo;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Sucesos\Http\Controllers\Controller;

use Sucesos\Repositories\Sucesos\NoticiaRepo;
use Sucesos\Repositories\Sucesos\TagRepo;
use Sucesos\Repositories\UserRepo;

class NoticiasController extends Controller {

	protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'contenido' => 'required',
        'tags' => 'required',
        'categoria' => 'required',
        'tipo' => 'required',
        'published_at' => 'required',
        'publicar' => 'required|in:1,0'
	];

	protected $noticiaRepo;
    protected $imagenRepo;
    protected $categoriaRepo;
    protected $tagRepo;
    protected $userRepo;

    /**
     * NoticiasController constructor.
     * @param CategoriaRepo $categoriaRepo
     * @param ImagenRepo $imagenRepo
     * @param NoticiaRepo $noticiaRepo
     * @param TagRepo $tagRepo
     * @param UserRepo $userRepo
     */
    public function __construct(CategoriaRepo $categoriaRepo,
                                ImagenRepo $imagenRepo,
                                NoticiaRepo $noticiaRepo,
                                TagRepo $tagRepo,
                                UserRepo $userRepo)
	{
        $this->categoriaRepo = $categoriaRepo;
        $this->imagenRepo = $imagenRepo;
        $this->noticiaRepo = $noticiaRepo;
        $this->tagRepo = $tagRepo;
        $this->userRepo = $userRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
	public function index(Request $request)
	{
		$rows = $this->noticiaRepo->findAndPaginate($request);
        $categorias = $this->categoriaRepo->listPub();

        return view('admin.noticias.list', compact('rows','categorias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $autor = $this->userRepo->listAutores();
        $categorias = $this->categoriaRepo->listPub();
        $tags = $this->tagRepo->listPub();

		return view('admin.noticias.create', compact('autor','categorias','tags'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);

		//VARIABLES
		$titulo = $request->input('titulo');
		$slug_url = SlugUrl($titulo);
        $autor = $request->input('autor');
        $categoria = $request->input('categoria');
        $tags = $request->input('tags');
        $imagen = $request->input('imagen');
        $imagen_carpeta = $request->input('imagen_carpeta');

		//GUARDAR DATOS
		$post = new Noticia($request->all());
		$post->slug_url = $slug_url;
        $post->categoria_id = $categoria;
		$post->user_id = $autor;
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
        $row = $this->noticiaRepo->create($post, $request->all());

        //GUARDAR TAGS
        $row->tags()->sync($tags);

		//MENSAJE
		flash()->success('El registro se agregó satisfactoriamente.');

		//REDIRECCIONAR A PAGINA PARA VER DATOS
		return redirect()->route('admin.noticias.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->noticiaRepo->findOrFail($id);
        $autor = $this->userRepo->listAutores();
        $categorias = $this->categoriaRepo->listPub();
        $tags = $this->tagRepo->listPub();

		return view('admin.noticias.edit', compact('post','autor','categorias','tags'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
	public function update($id, Request $request)
	{
		//BUSCAR ID
		$post = $this->noticiaRepo->findOrFail($id);

		//VALIDACION DE DATOS
		$this->validate($request, $this->rules);

		//VARIABLES
		$titulo = $request->input('titulo');
		$slug_url = SlugUrl($titulo);
        $autor = $request->input('autor');
        $categoria = $request->input('categoria');
        $tags = $request->input('tags');
        $imagen = $request->input('imagen');
        $imagen_carpeta = $request->input('imagen_carpeta');

		//GUARDAR DATOS
		$post->slug_url = $slug_url;
        $post->categoria_id = $categoria;
        $post->user_id = $autor;
        $post->imagen = $imagen;
        $post->imagen_carpeta = $imagen_carpeta;
		$row = $this->noticiaRepo->update($post, $request->all());

        //GUARDAR TAGS
        $row->tags()->sync($tags);

		//MENSAJE
		flash()->success('El registro se actualizó satisfactoriamente.');

		//REDIRECCIONAR A PAGINA PARA VER DATOS
		return redirect()->route('admin.noticias.index');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return Response
     */
	public function destroy($id, Request $request)
	{
		//BUSCAR ID PARA ELIMINAR
		$post = $this->noticiaRepo->findOrFail($id);
		$post->delete();

		$message = 'El registro se eliminó satisfactoriamente.';

		if($request->ajax())
		{
			return response()->json([
				'message' => $message
			]);
		}

		return redirect()->route('admin.noticias.index');
	}


    /**
     * Fotos de Post
     *
     * @param $post
     * @return Response
     * @internal param int $id
     */
    public function photosList($post)
    {
        $posts = $this->noticiaRepo->findOrFail($post);
        $photos = $posts->imagenes;

        return view('admin.noticias-imagenes.list', compact('posts', 'photos'));
    }

    public function photosOrder($post, Request $request)
    {
        if($request->ajax())
        {
            $sortedval = $_POST['listPhoto'];
            try{
                foreach ($sortedval as $key => $sort){
                    $sortPhoto = Imagen::find($sort);
                    $sortPhoto->orden = $key;
                    $sortPhoto->save();
                }
            }
            catch (Exception $e)
            {
                return 'false';
            }
        }
    }

    public function photosCreate($post)
    {
        $posts = $this->noticiaRepo->findOrFail($post);

        return view('admin.noticias-imagenes.upload', compact('posts'));
    }

    public function photosStore($post, Request $request)
    {
        //CREAR CARPETA CON FECHA Y MOVER IMAGEN
        $this->noticiaRepo->CrearCarpeta();
        $ruta = "upload/".$this->noticiaRepo->FechaCarpeta();
        $archivo = $request->file('file');
        $imagen = $this->noticiaRepo->FileMove($archivo, $ruta);
        $imagen_carpeta = $this->noticiaRepo->FechaCarpeta();

        //BUSCAR ID DE POST
        $row = $this->noticiaRepo->findOrFail($post);

        //GUARDAR IMAGEN
        $row->imagenes()->create([
            'imagen' => $imagen,
            'imagen_carpeta' => $imagen_carpeta
        ]);
    }

    public function photosDelete($post, $id, Request $request)
    {
        $photo = $this->imagenRepo->findOrFail($id);
        $photo->delete();

        $message = 'El registro se eliminó satisfactoriamente.';

        if($request->ajax())
        {
            return response()->json([
                'message' => $message
            ]);
        }

        return redirect()->route('admin.noticias.img.list', $post);
    }
	
}