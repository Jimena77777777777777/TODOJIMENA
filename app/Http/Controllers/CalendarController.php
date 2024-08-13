<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

class CalendarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Obtener todas las notas desde la base de datos
        $calendars = Calendar::all(); 

        // Pasar las notas a la vista
        return view('calendars.index', compact('calendars'));
    }

}