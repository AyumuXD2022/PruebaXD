<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Continents;

class CountriesController extends Controller
{
    public function index(){
        $continents = Continents::all();
        return view('su.country',compact('continents'));
    }
    public function create(){
        $continents = Continents::all();
        return view('su.country',compact('continents'));
    }
}
