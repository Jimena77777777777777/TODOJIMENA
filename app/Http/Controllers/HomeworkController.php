<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Homework; // Modelo singular

class HomeworkController extends Controller
{
    // Métodos de peticiones

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Obtener todas las tareas desde la base de datos
        $homeworks = Homework::all();

        // Pasar las tareas a la vista
        return view('homeworks.index', compact('homeworks'));
    }
    
    public function create()
    {
        return view('homeworks.create');
    }

    public function sendData(Request $request)
    {
        $rules=[
                'name'=>'required|min:5'
        ];

        $messages=[
            'name.required'=>'El nombre de la tarea es obligatoria',
            'name.min'=>'La tarea debe tener al menos 5 caracteres'
        ];

        $this->validate($request,$rules, $messages);


        $homework = new Homework();
        $homework->name = $request->input('name');
        $homework->description = $request->input('description');
        $homework->save();

        return redirect('/tareas');
    }

    
}
