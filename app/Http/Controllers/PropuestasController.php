<?php

namespace App\Http\Controllers;

use App\Models\lineas;
use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Models\User;

class PropuestasController extends Controller
{
   
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
            'estado'=> $req['estado'],
            'linea_id'=> $req['linea_id'],
            'user_id'=> $req['user_id'],
			
		];
		if($req['id']==null){
            Propuestas::create($data);
        }else{
            $propuestas->update($data);
        }
    
		return redirect()->route('propuestas.index');
    }

    public function borra_lineas($id)
    {
    	Lineas::destroy($id);
        return redirect()->route('lineas.index');
    }
public function show(Propuestas $propuestas )
{
if($propuestas){
 
    $propuestas = Propuestas::all();
    
}
return view('root.propuestas');
}




}
