<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{

    public function index () {
        $programs = Program::all();
        return view('program', compact('programs'));
    }

    public function program1 () {
        $program = Program::where('name', 'Program 1')->first();
        return view('detail-program', compact('program'));
    }

    public function program2 () {
        $program = Program::where('name', 'Program 2')->first();
        return view('detail-program', compact('program'));
    }

    public function program3 () {
        $program = Program::where('name', 'Program 3')->first();
        return view('detail-program', compact('program'));
    }

    public function program4 () {
        $program = Program::where('name', 'Program 4')->first();
        return view('detail-program', compact('program'));
    }
}
