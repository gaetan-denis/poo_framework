<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Cursus;

class CursusController extends Controller
{
    public function index() : View
    {
        $cursus= cursus::all();
        return view('cursus', ['cursus'=>$cursus]);
    }
}
