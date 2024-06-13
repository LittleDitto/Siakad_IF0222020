<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\ProgramStudi;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

class ProgramStudiController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        $prodi = ProgramStudi::all();
        //render view with posts
        return view('program_studi/index',compact('prodi'));
    }
}