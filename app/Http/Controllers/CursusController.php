<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Course;

class CursusController extends Controller
{
    public function index() : View
    {
        $cursus= Course::all();
        return view('cursus', ['cursus'=>$cursus]);
    }
}
