<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Lineas;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LineasController extends Controller
{
    

     /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/lineas';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function lineas_index()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
       $lineas = Lineas::all();
        return view('root.lineas', array('linea' => $lineas,'lineas' => $lineas) );
       
    }
    public function showRegistrationForm() {
        $lineas = (object)  array(
            'name' =>null, 'description' => null,
        );
        $lineas = Lineas::all();
        return view('root.lineas', array('linea' => $lineas,'lineas' => $lineas) );
    }


    public function editar($id)
    {
        $lineas =Lineas::find($id);
        $lineas = Lineas::all();
        return view('root.lineas', array('lineas' => $lineas,'lineas' => $lineas) );
    }


    
    public function borra_lineas($id)
    {
    	Lineas::destroy($id);
        return redirect()->route('lineas_index');
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
            'name' => ['required', 'string', 'max:150'],
            'description' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\lineas
     */
    // public function create(array $data)
    // {
    //     return Lineas::updateOrCreate([
    //         'id'=>$data['id']
    //     ],[
    //         'name' => $data['name'],
    //         'description' => $data['description'], 
    //     ]);
    //     Lineas::create($data);

    //     return redirect()->route('lineas_index');


    //     }
        public function create(Request $req)
    {
    	//dd($req['autor_1']);
        $data = [
            'name'=> $req['name'],
            'description'=> $req['description'],
            
        ];
        Lineas::create($data);

        return redirect()->route('lineas_index');
    }

}
