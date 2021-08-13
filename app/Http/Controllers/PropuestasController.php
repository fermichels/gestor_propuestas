<?php

namespace App\Http\Controllers;

use App\Models\lineas;
use Illuminate\Http\Request;
use App\Models\Propuestas;
use App\Models\User;
use App\Models\Tema;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\React;

class PropuestasController extends Controller
{
    protected $redirectTo = '/propuestas';


    /* Metodo responsable por mostrar
    solamente las propuestas publicadas por el usuario
    logueado */
    public function propuestas_index()
    {
        $this->middleware('auth');
        //; $this->middleware('isroot');
        $propuestas = Propuestas::byUser(Auth::id())->get();
        $lineas = lineas::all();
        return view('tutor.propuestastutor', array('propuestas' => $propuestas, 'lineas' => $lineas));
    }


    /*  Metodo responsable por filtrar las propuestas
    por lineas de investigación */
    public function ver_por_lineas($id)
    {
        $this->middleware('auth');
        $user = User::all();
        $lineas = Lineas::find($id);
        $propuestas = $lineas->propuestas;
        $propuestas = $propuestas->where('estado', '=', 'ACT');
        return view('alum.propuestasalum', array('propuestas' => $propuestas, 'user' => $user, 'lineas' => $lineas));
    }


    /* Metodo responsable por visualizar 
    las propuestas ya asignadas */
    public function ver_asig()
    {
        $this->middleware('auth');
        $user = User::all();
        $lineas = Lineas::all();
        $propuestas = Propuestas::all();
        $propuestas = $propuestas->where('estado', '=', 'ASG');
        return view('alum.propuestasalumasig', array('propuestas' => $propuestas, 'user' => $user, 'lineas' => $lineas));
    }

    public function mis_propuestas_asig()
    {
        $this->middleware('auth');
        $propuestas = Propuestas::byUser(Auth::id())->get();
        $propuestas = $propuestas->where('estado', '=', 'ASG');
        $lineas = lineas::all();
        $temas = Tema::all();
        return view('tutor.mispropuestasasig', array('propuestas' => $propuestas, 'lineas' => $lineas, 'temas' => $temas));
    }



    /* Metodo responsable por mostrar las
     propuestas */
    public function ver_propuestas()
    {
        $this->middleware('auth');
        $user = User::all();
        $lineas = Lineas::all();
        $propuestas = Propuestas::all();
        switch (Auth::user()->tipo) {
            /* Devuelve la vista para usuarios del tipo "ROOT" */
            case 'ROOT':
                return view('root.verpropuestas', array('propuestas' => $propuestas, 'user' => $user, 'lineas' => $lineas));
                break;
                 /* Devuelve la vista para usuarios del tipo "TUTO" */
            case 'TUTO':
                return view('tutor.verpropuestas', array('propuestas' => $propuestas, 'user' => $user, 'lineas' => $lineas));
                break;
        };
    }

   /*  Muestra las lineas para los alumnos 
    para filtrar propuestas por la
    linea seleccionada */
    public function lineas_index()
    {
        $this->middleware('auth');
        // $this->middleware('isroot');
        $propuestas = Propuestas::all();
        $lineas = lineas::all();
        return view('alum.lineasalum', array('propuestas' => $propuestas, 'lineas' => $lineas));
    }




    // Metodo Post para la creacion de propuestas
    protected function postUpdateOrCreatePropuesta(Request $req)
    {
        $propuestas = Propuestas::find($req['id']);
        $data = [
            'titulo' => $req['titulo'],
            'descripcion' => $req['descripcion'],
            'estado' => 'ACT',
            'linea_id' => $req['linea_id'],
            'user_id' => Auth::user()->id,
        ];

        if ($req['id'] == null) {
            $this->validate($req, [
                'titulo' => 'required|min:10|max:255|unique:propuestas',
                'descripcion' => 'required|min:40|unique:propuestas',
                'linea_id' => 'required',
            ]);
            Propuestas::create($data);
        } else {
            $propuestas->update($data);
        }

        return redirect('/propuestas')->with('message', 'Guardado con exito!');
    }


    //Metodo para editar propuestas
    public function editar($id)
    {
        $propuesta = Propuestas::find($id);
        $propuestas = Propuestas::all();
        $user = User::all();
        $lineas = lineas::all();
        return view('tutor.propuestastutor', array('propuesta' => $propuesta, 'propuestas'
        => $propuestas, 'user' => $user, 'lineas' => $lineas));
    }


    //Metodo para borrar propuestas
    public function borra_propuestas($id)
    {
        Propuestas::destroy($id);
        switch (Auth::user()->tipo) {
            case 'ROOT':
                return redirect()->route('root_propuestas');
                break;
            case 'TUTO':
                return redirect()->route('propuestas');
                break;
        };
    }


    
}
