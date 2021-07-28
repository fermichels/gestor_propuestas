<?php

namespace App\Http\Controllers;

use App\Models\lineas;
use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class PropuestasController extends Controller
{
    protected $redirectTo = '/propuestas';
    public function propuestas_index()
    {
        $this->middleware('auth');
       //; $this->middleware('isroot');
       

       $propuestas = Propuestas::byUser(Auth::id())->get();
        
        $lineas = lineas::all();
        return view('tutor.propuestastutor', array('propuestas' => $propuestas, 'lineas' => $lineas ) );

	
       
    }
    public function ver_por_lineas($id)
    {
        $this->middleware('auth');
      
         $user = User::all();
       
        $lineas = Lineas::find($id);
		$propuestas = $lineas->propuestas;
       
        
          return view('alum.propuestasalum', array('propuestas' => $propuestas,'user' => $user, 'lineas' => $lineas ) );
         
    }

public function ver_propuestas()
{
    $this->middleware('auth');
  
     $user = User::all();
   
    $lineas = Lineas::all();
    $propuestas = Propuestas::all();
   
    
      return view('alum.propuestasalum', array('propuestas' => $propuestas,'user' => $user, 'lineas' => $lineas ) );
     
}
    

    public function lineas_index()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
       

       $propuestas = Propuestas::all();
        
        $lineas = lineas::all();
        return view('alum.lineasalum', array('propuestas' => $propuestas,'lineas' => $lineas) );

	
       
    }





    public function root_propuestas()
    {
        $this->middleware('auth');
       // $this->middleware('isroot');
        $propuestas = Propuestas::all();
        $user = User::all();
        $lineas = lineas::all();
         return view('root.verpropuestas', array('propuestas' => $propuestas,'user' => $user, 'lineas' => $lineas ) );

	
       
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
    
		return redirect()->back();
    }

    public function editar($id)
    {
        $propuesta =Propuestas::find($id);
        $propuestas = Propuestas::all();
        $user = User::all();
        $lineas = lineas::all();
         return view('tutor.propuestastutor', array('propuesta' => $propuesta,'propuestas'
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
return view('tutor.propuestastutor');
}




}
