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
     **
     * @var string
     */
    protected $redirectTo = '/lineas';

    /**
     * Create a new controller instance.
     
     * @return void
     */
    public function lineas_index()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
        $lineas = Lineas::all();
         return view('root.lineas', array('linea' => $lineas,'linea' => $lineas) );

	
       
    }
    public function showRegistrationForm() {
        $lineas = (object)  array(
            'name' =>null, 'description' => null,
        );
        $linea = Lineas::all();
        return view('root.lineas', array('linea' => $linea,'lineas' => $lineas) );
    }


 
    public function editar($id)
    {
        $lineas =Lineas::find($id);
        $linea = Lineas::all();
        return view('root.lineas', array('linea' => $linea,'lineas' => $lineas) );

        
    }
  
  
    protected function postUpdateOrCreateLinea(Request $req)
	{
		$lineas = Lineas::find( $req['id'] );
		
		$data = [
			'name'=> $req['name'],
			'description'=> $req['description'],
			
		];
		if($req['id']==null){
            Lineas::create($data);
        }else{
            $lineas->update($data);
        }
    
		return redirect()->route('lineas.index');
    }

    public function borra_lineas($id)
    {
    	Lineas::destroy($id);
        return redirect()->route('lineas.index');
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
    public function update(Request $request, $id)
{
    Lineas::where('id', $id)->update($request->all());
    return redirect()->route('lineas.index');
}

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\lineas
     */
    //     public function create(Request $req)
    // {
    // 	//dd($req['autor_1']);
    //     $data = [
    //         'name'=> $req['name'],
    //         'description'=> $req['description'],
            
    //     ];
    //     Lineas::create($data);

    //     return redirect()->route('lineas.index');
    // }
    

}