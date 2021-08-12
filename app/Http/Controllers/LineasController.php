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

    // Metodo por el cual user ROOT accessa las lineas
    public function lineas_index()
    {
        $this->middleware('auth');
        // $this->middleware('isroot');
        $lineas = Lineas::all();
        return view('root.lineas', array('linea' => $lineas, 'linea' => $lineas));
    }




    // Editar linea
    public function editar($id)
    {
        $lineas = Lineas::find($id);
        $linea = Lineas::all();
        return view('root.lineas', array('linea' => $linea, 'lineas' => $lineas));
    }


    // Crear Linea

    protected function postCreateLinea(Request $req)
    {
        $lineas = Lineas::find($req['id']);

        $data = [
            'name' => $req['name'],
            'description' => $req['description'],

        ];
        if ($req['id'] == null) {
            $this->validate($req, [
                'name' => 'required|unique:lineas',
                'description' => 'required|min:40|unique:lineas',
            ]);
            Lineas::create($data);
        } else {
            $lineas->update($data);
        }

        return redirect('/lineas');
    }

    //Borra
    public function borra_lineas($id)
    {
        Lineas::destroy($id);
        return redirect()->route('lineas.index');
    }
}
