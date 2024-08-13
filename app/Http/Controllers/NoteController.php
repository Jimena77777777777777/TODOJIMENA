<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note; // Asegúrate de tener el modelo Note

class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Obtener todas las notas desde la base de datos
        $notes = Note::all(); // Asumiendo que tienes un modelo Note

        // Pasar las notas a la vista
        return view('notes.index', compact('notes'));
    }

    public function create()
    {
        return view('notes.create');
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


        $note = new Note();
        $note->name = $request->input('name');
        $note->description = $request->input('description');
        $note->save();

        return redirect('/notas');
    }

    public function edit(Note $note)
{
    return view('notes.edit', compact('note')); 
}





public function update(Request $request, Note $note)
{
    $rules=[
            'name'=>'required|min:5'
    ];

    $messages=[
        'name.required'=>'El nombre de la tarea es obligatoria',
        'name.min'=>'La tarea debe tener al menos 5 caracteres'
    ];

    $this->validate($request,$rules, $messages);


    
    $note->name = $request->input('name');
    $note->description = $request->input('description');
    $note->save();

    return redirect('/notas');
}

public function destroy(Note $note)
{
    $note->delete(); // Corregir "delate" a "delete"
    return redirect('notas');
}









}
