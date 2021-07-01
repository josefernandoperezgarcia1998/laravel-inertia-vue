<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PageController extends Controller
{
    //Función que renderiza con el componente Inertia uan vista llamada "Dashboard" que está dentro de resources/js/pages/
    public function dashboard()
    {
        return Inertia::render('Dashboard');
    }
}
