<?php

namespace App\Http\Controllers\owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ownerController extends Controller
{
    public function owner(){
        return Inertia::render('Frontend/views/owner');
    }
}
