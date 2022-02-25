@extends('layouts.layout')
@section('title', 'Representante')
@section('content')
    <h1>Representante</h1>
    <a class="btn btn-success" href="{{route('persons.create')}}">Registrar</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Pais</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($persons as $person)
                <tr>
                    <td>{{$person->id}}</td>
                    <td>{{$person->id_country}}</td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
@endsection