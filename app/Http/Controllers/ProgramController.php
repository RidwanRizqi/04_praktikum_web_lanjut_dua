<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index () {
        return view('program');
    }

    public function program1 () {
        return view('detail-program', ['category' => 'program1']);
    }

    public function program2 () {
        return view('detail-program', ['category' => 'program2']);
    }

    public function program3 () {
        return view('detail-program', ['category' => 'program3']);
    }
}
