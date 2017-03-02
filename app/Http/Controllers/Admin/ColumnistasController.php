<?php namespace Sucesos\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Columnista;
use Sucesos\Http\Controllers\Controller;
use Sucesos\Repositories\Sucesos\ColumnistaRepo;

class ColumnistasController extends Controller
{
    protected $columnistaRepo;

    protected $rules = [
        'nombre' => 'required',
        'apellidos' => 'required',
        'imagen' => 'required',
        'publicar' => 'required'
    ];

    /**
     * ColumnistasController constructor.
     * @param ColumnistaRepo $columnistaRepo
     */
    public function __construct(ColumnistaRepo $columnistaRepo)
    {
        $this->columnistaRepo = $columnistaRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = $this->columnistaRepo->listarColumnistasAdmin($request);

        return view('admin.columnistas.list', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.columnistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $nombre_completo = $request->input('nombre').' '.$request->input('apellidos');
        $url = SlugUrl($nombre_completo);

        $row = new Columnista($request->all());
        $row->slug_url = $url;
        $row->nombre_completo = $nombre_completo;
        $this->columnistaRepo->create($row, $request->all());

        flash()->success('El registro se creó satisfactoriamente');

        return redirect()->route('admin.columnistas.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->columnistaRepo->findOrFail($id);

        return view('admin.columnistas.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, $this->rules);

        $nombre_completo = $request->input('nombre').' '.$request->input('apellidos');
        $url = SlugUrl($nombre_completo);

        $row = $this->columnistaRepo->findOrFail($id);
        $row->slug_url = $url;
        $row->nombre_completo = $nombre_completo;
        $this->columnistaRepo->update($row, $request->all());

        flash()->success('El registro se modificó satisfactoriamente');

        return redirect()->route('admin.columnistas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
