<?php namespace Sucesos\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Sucesos\Entities\Sucesos\Tag;
use Sucesos\Http\Controllers\Controller;
use Sucesos\Repositories\Sucesos\TagRepo;

class TagsController extends Controller
{
    protected $tagRepo;

    protected $rules = [
        'titulo' => 'required|unique:tags,titulo',
        'publicar' => 'required'
    ];

    /**
     * TagsController constructor.
     * @param TagRepo $tagRepo
     */
    public function __construct(TagRepo $tagRepo)
    {
        $this->tagRepo = $tagRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = $this->tagRepo->findAndPaginate($request);

        return view('admin.tags.list', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
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

        $url = SlugUrl($request->input('titulo'));

        $row = new Tag($request->all());
        $row->slug_url = $url;
        $this->tagRepo->create($row, $request->all());

        flash()->success('El registro se agregró satisfactoriamente.');

        return redirect()->route('admin.tags.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->tagRepo->findOrFail($id);

        return view('admin.tags.edit', compact('post'));
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

        $url = SlugUrl($request->input('titulo'));

        $row = $this->tagRepo->findOrFail($id);
        $row->slug_url = $url;
        $this->tagRepo->update($row, $request->all());

        flash()->success('El registro se actualizó satisfactoriamente');

        return redirect()->route('admin.tags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->tagRepo->findOrFail($id);
        $post->delete();

        $message = 'El registro se eliminó satisfactoriamente.';

        return [
            'message' => $message
        ];

        return redirect()->route('admin.tags.index');
    }
}
