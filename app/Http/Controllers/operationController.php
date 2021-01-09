<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Illuminate\Http\Request;

class operationController extends Controller
{
    public function operation(){
        
        return view('operaciones');

    }

    public function baja(Request $request){
        $etiqueta = $request->get('etiqueta');
        $casx = Equipo::where('cas', $etiqueta)->get();
        return view('baja', compact('casx', 'etiqueta'));

    }

    //public function bajaD(Request $request){
      // $etiqueta = $request->get('etiqueta');
      // $casx = Equipo::where('cas','like','%'. $etiqueta .'%')->get();
      

      // return view('bajaD', compact('casx', 'etiqueta'));

        

 //   }
    
}
