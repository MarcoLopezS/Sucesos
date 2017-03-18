<?php namespace Sucesos\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Sucesos\Http\Controllers\Controller;

use Sucesos\Entities\User;
use Sucesos\Entities\UserProfile;
use Sucesos\Repositories\UserRepo;
use Sucesos\Repositories\UserProfileRepo;

class UsersController extends Controller {

    protected $rulesUser = [
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
    ];

    protected $rulesFoto = [
        'imagen' => 'required'
    ];

    protected $rulesProfile = [
        'nombres' => 'required',
        'apellidos' => 'required'
    ];

    protected $userRepo;
    protected $userProfileRepo;

    public function __construct(UserRepo $userRepo, 
                                UserProfileRepo $userProfileRepo)
    {
        $this->userRepo = $userRepo;
        $this->userProfileRepo = $userProfileRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
	public function index(Request $request)
	{
        $users = $this->userRepo->findUsersAndPaginate($request);

        return view('admin.users.list', compact('users'));
	}

    /**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
	}


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
	public function store(Request $request)
	{
        $dataProfile = $request->only('nombres', 'apellidos');
        $dataUser = $request->only('email', 'password');

        $this->validate($request, $this->rulesProfile);
        $this->validate($request, $this->rulesUser);

        $user = new User($dataUser);
        $user->active = 1;
        $row = $this->userRepo->create($user, $dataUser);

        $userProfile = new UserProfile($dataProfile);
        $userProfile->user_id = $row->id;
        $userProfile->imagen = 'icon-users.png';
        $userProfile->imagen_carpeta = 'carpeta/';
        $this->userProfileRepo->create($userProfile, $dataProfile);

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.user.index');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $user = $this->userRepo->findOrFail($id);

        return view('admin.users.show', compact('user'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        $user = $this->userRepo->findOrFail($id);

        return view('admin.users.edit', compact('user'));
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
        $user = $this->userProfileRepo->where('user_id', $id)->first();

        $rules = [
            'nombres' => 'required',
            'apellidos' => 'required'
        ];

        $this->validate($request, $rules);

        $nombre_completo = $request->input('nombres').' '.$request->input('apellidos');
        $url = SlugUrl($nombre_completo);
        $cargo = $request->input('cargo');
        $descripcion = $request->input('descripcion');

        $user->nombre_completo = $nombre_completo;
        $user->slug_url = $url;
        $user->cargo = $cargo;
        $user->descripcion = $descripcion;
        $this->userProfileRepo->update($user, $request->all());

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.user.index');
    }

    /*
     * Funcion para cambiar foto
     * @param $id
     * @param Request $request
     * @return Response
     */
    public function updateFoto($id, Request $request)
    {
        $this->validate($request, $this->rulesFoto);

        $user = $this->userProfileRepo->where('user_id',$id)->first();

        $this->userProfileRepo->update($user, $request->only('imagen','imagen_carpeta'));

        //MENSAJE
        flash()->success('El registro se actualizó satisfactoriamente.');

        return redirect()->route('admin.user.index');
    }

    /**
     * Funcion para cambiar contraseña de Perfil de usuario logeado
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword($id, Request $request)
    {
        $user = $this->userRepo->findOrFail($id);

        $rules = [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        $this->validate($request, $rules);

        $user->fill($request->all());
        $user->save();

        //REDIRECCIONAR A PAGINA PARA VER DATOS
        return redirect()->route('admin.user.index');
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


    /**
     * Funcion para mostar Perfil de usuario logeado
     */

    public function profile()
    {
        $user = auth()->user();

        return view('admin.users.profile', compact('user'));

    }

    /**
     * Funcion para cambiar datos de Perfil de usuario logeado
     */
    public function profileData()
    {
        $user = Auth::user();

        $profile = UserProfile::whereUserId($user->id)->first();

        $data = Input::all();

        $rules = [
            'nombre' => 'required',
            'apellidos' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->passes())
        {
            $profile->fill($data);
            $profile->save();

            //REDIRECCIONAR A PAGINA PARA VER DATOS
            return redirect()->route('admin.user.profile');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }
    }

    /**
     * Funcion para cambiar contraseña de Perfil de usuario logeado
     */

    public function profileChangePassword()
    {
        $user = Auth::user();

        $data = Input::all();

        $rules = [
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ];

        $validator = Validator::make($data, $rules);

        if($validator->passes())
        {
            $user->fill($data);
            $user->save();

            //REDIRECCIONAR A PAGINA PARA VER DATOS
            return redirect()->route('admin.user.profile');
        }
        else
        {
            return Redirect::back()->withInput()->withErrors($validator->messages());
        }
    }


}
