<?php namespace Sucesos\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Columna;
use Sucesos\Http\Controllers\Controller;
use Sucesos\Repositories\Sucesos\ColumnaRepo;
use Sucesos\Repositories\Sucesos\ColumnistaRepo;

class ColumnaController extends Controller
{
    protected $columnistaRepo;
    protected $columnaRepo;

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'contenido' => 'required',
        'published_at' => 'required',
        'publicar' => 'required'
    ];

    /**
     * ColumnaController constructor.
     * @param ColumnistaRepo $columnistaRepo
     * @param ColumnaRepo $columnaRepo
     */
    public function __construct(ColumnistaRepo $columnistaRepo,
                                ColumnaRepo $columnaRepo)
    {
        $this->columnistaRepo = $columnistaRepo;
        $this->columnaRepo = $columnaRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param $columnista
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index($columnista, Request $request)
    {
        $prin = $this->columnistaRepo->findOrFail($columnista);
        $rows = $this->columnaRepo->findAndPaginate($columnista, $request);

        return view('admin.columnas.list', compact('prin', 'rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param $columnista
     * @return \Illuminate\Http\Response
     */
    public function create($columnista)
    {
        $prin = $this->columnistaRepo->findOrFail($columnista);

        return view('admin.columnas.create', compact('prin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param $columnista
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($columnista, Request $request)
    {
        $this->validate($request, $this->rules);

        $url = SlugUrl($request->input('titulo'));

        $cols = $this->columnaRepo->where('columnista_id',$columnista)->update(['destacado' => 0]);

        $col = new Columna($request->all());
        $col->slug_url = $url;
        $col->columnista_id = $columnista;
        $col->user_id = auth()->user()->id;
        $col->destacado = 1;
        $this->columnaRepo->create($col, $request->all());

        flash()->success('El registro se agregó satisfactoriamente');

        return redirect()->route('admin.columnistas.columna.index', $columnista);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $columnista
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($columnista, $id)
    {
        $prin = $this->columnistaRepo->findOrFail($columnista);
        $post = $this->columnaRepo->findOrFail($id);

        return view('admin.columnas.edit', compact('prin','post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $columnista
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($columnista, Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $url = SlugUrl($request->input('titulo'));

        $col = $this->columnaRepo->findOrFail($id);
        $col->slug_url = $url;
        $col->columnista_id = $columnista;
        $this->columnaRepo->update($col, $request->all());

        flash()->success('El registro se actualizó satisfactoriamente');

        return redirect()->route('admin.columnistas.columna.index', $columnista);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $columnista
     * @param  int  $id
     * @return array
     */
    public function destroy($columnista, $id)
    {
        //BUSCAR ID PARA ELIMINAR
        $post = $this->columnaRepo->findOrFail($id);
        $post->delete();

        $message = 'El registro se eliminó satisfactoriamente.';

        return [
            'message' => $message
        ];
    }
}
