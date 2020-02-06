<?php

namespace App\Http\Controllers;

use App\Estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    
    public function index(){ 

        $alumnosDatos['alumnos']=Estudiantes::paginate(5);
        return view('alumnos.index',  $alumnosDatos);
    }

    public function create(){ 
        return view('/alumnos.create');
    }

    public function store(Request $request){ 
        $datosAlumno = request()->except('_token');
        
        Estudiantes::insert($datosAlumno);
        return redirect('alumnos');
    }

   
    public function destroy($id){

        Estudiantes::destroy($id);
        return redirect('alumnos');

    }

}
