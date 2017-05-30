<?php namespace Sucesos\Http\Controllers\Admin;

use Sucesos\Entities\Sucesos\Portada;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Sucesos\Http\Controllers\Controller;

use Sucesos\Repositories\Sucesos\PortadaRepo;

class PortadasController extends Controller {

	protected $rules = [
        'titulo' => 'required',
        'published_at' => 'required',
        'publicar' => 'required|in:1,0',
        'imagen' => 'required'
	];

	protected $portadaRepo;

    /**
     * PortadasController constructor.
     * @param PortadaRepo $portadaRepo
     */
    public function __construct(PortadaRepo $portadaRepo)
	{
        $this->portadaRepo = $portadaRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function index()
	{
		$rows = $this->portadaRepo->findAndPaginate();

        return view('admin.portadas.list', compact('rows','categorias'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.portadas.create');
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

		//GUARDAR DATOS
		$post = new Portada($request->all());
		$post->slug_url = $slug_url;
        $row = $this->portadaRepo->create($post, $request->all());

		//MENSAJE
		flash()->success('El registro se agregó satisfactoriamente.');

		//REDIRECCIONAR A PAGINA PARA VER DATOS
		return redirect()->route('admin.portadas.index');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->portadaRepo->findOrFail($id);

		return view('admin.portadas.edit', compact('post'));
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
        //VALIDACION DE DATOS
        $this->validate($request, $this->rules);

		//BUSCAR ID
		$post = $this->portadaRepo->findOrFail($id);

		//VARIABLES
		$titulo = $request->input('titulo');
		$slug_url = SlugUrl($titulo);

		//GUARDAR DATOS
		$post->slug_url = $slug_url;
		$row = $this->portadaRepo->update($post, $request->all());

		//MENSAJE
		flash()->success('El registro se actualizó satisfactoriamente.');

		//REDIRECCIONAR A PAGINA PARA VER DATOS
		return redirect()->route('admin.portadas.index');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return array
     */
	public function destroy($id, Request $request)
	{
		//BUSCAR ID PARA ELIMINAR
		$post = $this->portadaRepo->findOrFail($id);
		$post->delete();

		$message = 'El registro se eliminó satisfactoriamente.';

        return [
            'message' => $message
        ];
	}

}