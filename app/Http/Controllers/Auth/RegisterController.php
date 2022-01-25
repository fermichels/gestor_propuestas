<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Nullable;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
       
    }
    public function showRegistrationForm() {
        $user = (object)  array(
            'name' =>null, 'username' => null, 'email' => null, 'password' => null, 'tipo' => null, 'ceular' => null,
        );
        $users = User::all();
        return view('root.register', array('users' => $users,'user' => $user) );
    }

    public function editar_datos($id)
    {
        $user =User::find($id);
        $users = User::all();
        return view('alum.cambiardatos', array('users' => $users,'user' => $user) );
    }

    
        public function posteditar(Request $req)
        {
            $data = [
                'name' => $req['name'],
                'description' => $req['description'],
            ];
            User::update($data);
            return redirect()->back();
        }
    

    public function editar($id)
    {
        $user =User::find($id);
        $users = User::all();
        return view('root.register', array('users' => $users,'user' => $user) );
    }

    public function delete($id)
    {
        User::destroy($id);
        return  redirect('/register')->with('message', 'Borrado con exito!');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:55'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'tipo' => ['required', 'string', 'max:4'],
            'celular' => [ 'numeric', 'min:10','nullable',],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::updateOrCreate([
            'id'=>$data['id']
        ],[
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'tipo' => $data['tipo'],
            'celular' => $data['celular'],
        ]);
        return redirect('/register')->with('message', 'Guardado con exito!');
    }
}


