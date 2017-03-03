<?php namespace Sucesos\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Sucesos\Entities\Sucesos\Video;
use Sucesos\Http\Controllers\Controller;
use Sucesos\Repositories\Sucesos\VideoRepo;

class VideosController extends Controller
{
    protected $videoRepo;

    protected $rules = [
        'titulo' => 'required',
        'descripcion' => 'required',
        'youtube' => 'required',
        'imagen' => 'required',
        'published_at' => 'required',
        'publicar' => 'required'
    ];

    /**
     * VideosController constructor.
     * @param VideoRepo $videoRepo
     */
    public function __construct(VideoRepo $videoRepo)
    {
        $this->videoRepo = $videoRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $rows = $this->videoRepo->findAndPaginate($request);

        return view('admin.videos.list', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.videos.create');
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

        $row = new Video($request->all());
        $row->slug_url = $url;
        $row->user_id = Auth::user()->id;
        $this->videoRepo->create($row, $request->all());

        flash()->success('El registro se agregró satisfactoriamente.');

        return redirect()->route('admin.videos.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = $this->videoRepo->findOrFail($id);

        return view('admin.videos.edit', compact('post'));
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

        $row = $this->videoRepo->findOrFail($id);
        $row->slug_url = $url;
        $this->videoRepo->update($row, $request->all());

        flash()->success('El registro se actualizó satisfactoriamente');

        return redirect()->route('admin.videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = $this->videoRepo->findOrFail($id);
        $post->delete();

        $message = 'El registro se eliminó satisfactoriamente.';

        return [
            'message' => $message
        ];

        return redirect()->route('admin.videos.index');
    }
}
