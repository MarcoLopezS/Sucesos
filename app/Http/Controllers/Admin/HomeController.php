<?php namespace Sucesos\Http\Controllers\Admin;

use Sucesos\Http\Controllers\Controller;
use Sucesos\Repositories\Admin\ConfigurationRepo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $configurationRepo;

    /**
     * HomeController constructor.
     * @param ConfigurationRepo $configurationRepo
     */
    public function __construct(ConfigurationRepo $configurationRepo)
    {
        $this->configurationRepo = $configurationRepo;
    }


    public function index()
    {
    	return view('admin.home');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function uploadImagen(Request $request)
    {
        $archivo = UploadFile('upload', $request->file('file'));

        return $archivo;
    }

} 