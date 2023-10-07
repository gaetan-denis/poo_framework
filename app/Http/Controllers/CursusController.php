<?php

namespace App\Http\Controllers;
use Illuminate\View\View;

class CursusController extends Controller
{
    public function index() : View
    {
        return view('cursus');
    }
}
