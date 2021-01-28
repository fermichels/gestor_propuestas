<?php

namespace App\Http\Controllers;

use App\Models\lineas;
use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PropuestasController extends Controller
{
    protected $redirectTo = '/propuestas';
    public function propuestas_index()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
        $propuestas = Propuestas::all();
        $user = User::all();
        $lineas = lineas::all();
         return view('root.propuestas', array('propuestas' => $propuestas,'user' => $user, 'lineas' => $lineas ) );

	
       
    }
    protected function postUpdateOrCreatePropuesta(Request $req)
	{
        $propuestas = Propuestas::find( $req['id'] );
        
		
		$data = [
			'titulo'=> $req['titulo'],
            'descripcion'=> $req['descripcion'],
            'estado'=> 'ACT',
            'linea_id'=> $req['linea_id'],
            'user_id'=> Auth::user()->id,
			
		];
		if($req['id']==null){

            Propuestas::create($data);
        }else{
            $propuestas->update($data);
        }
    
		return redirect()->route('propuestas');
    }

    public function editar($id)
    {
        $propuesta =Propuestas::find($id);
        $propuestas = Propuestas::all();
        $user = User::all();
        $lineas = lineas::all();
         return view('root.propuestas', array('propuesta' => $propuesta,'propuestas'
          => $propuestas,'user' => $user, 'lineas' => $lineas ) );
     

        
    }






    public function borra_propuestas($id)
    {
    	Propuestas::destroy($id);
        return redirect()->route('propuestas');
    }
public function show(Propuestas $propuestas )
{
if($propuestas){
 
    $propuestas = Propuestas::all();
    
}
return view('root.propuestas');
}




}
