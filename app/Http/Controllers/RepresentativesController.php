<?php

namespace App\Http\Controllers;

use App\Models\Representatives;
use App\Models\Countries;
use App\Http\Requests\RepresentativesRequest;

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
    public function store(RepresentativesRequest $request, Representatives $persons){
        $request = Representatives::create($request->validated());
        return redirect('/');
    }
}
