<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class FrontendController extends Controller
{
    public function index(){
        // return  Inertia::render('Welcome', [
        //     'canLogin' => Route::has('login'),
        //     'canRegister' => Route::has('register'),
        //     'laravelVersion' => Application::VERSION,
        //     'phpVersion' => PHP_VERSION,
        // ]);
        return Inertia::render('Frontend/Home');
    }
    public function about(){
        return Inertia::render('Frontend/About', ['title' => 'About us Page']);
    }
    public function contact(){
        return Inertia::render('Frontend/Contact', ['title' => 'Contact us Page']);
    }

    public function login(){
        return Inertia::render('Auth/Login');
    }
    public function register(){
        return Inertia::render('Auth/Register');
    }
}
