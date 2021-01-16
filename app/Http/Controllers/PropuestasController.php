<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propuestas;
class PropuestasController extends Controller
{
   

public function show(Propuestas $propuestas )
{
if($propuestas){
    echo "<h1> Propuesta</h1>";
    echo "Descrip: {$propuestas->descripcion}";
}
$posted_by = $propuestas->posted_by()->first();
}




}
