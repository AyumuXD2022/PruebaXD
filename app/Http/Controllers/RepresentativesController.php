<?php

namespace App\Http\Controllers;

use App\Models\Representatives;
use App\Models\Countries;

use Illuminate\Http\Request;

class RepresentativesController extends Controller
{
    public function index(){
        $persons = Representatives::all();
        return view('index', compact('persons'));
    }
    public function create(){
        $countries = Countries::all();
        return view('su.countries',compact('countries'));
    }
    public function store(){
        
    }
}
