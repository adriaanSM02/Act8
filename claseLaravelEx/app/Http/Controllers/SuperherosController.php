<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheros;


class SuperherosController extends Controller
{
    public function index(){
        $page_title = "Super Heros"; 

        $superheros = Superheros::all();

        return view('heros', compact('page_title', 'superheros'));
    }

    public function spmale(){
        $page_title = "Super Heros: Male"; 

        $men = Superheros::where('gender', '=', 'Male')->get();

        return view('herosmale', compact('page_title', 'men'));
    }

    public function spfemale(){
        $page_title = "Super Heros: Female";

        $women = Superheros::where('gender', '=', 'Female')->get();

        return view('herosfemale', compact('page_title', 'women'));
    }
}
