<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BackendController extends Controller
{
    public function Role(){
        return Inertia::render('Backend/Roles');
    }
    public function Table(){
        return Inertia::render('Backend/Table');
    }
}
