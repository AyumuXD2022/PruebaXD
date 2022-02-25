@extends('layouts.layout')
@section('title', 'Creando')
@section('content')
    <h1 class="mt-3">Registro</h1>
    <main>
        <form action="" method="">
            <div class="mb-3">
                <label for="country" class="form-label">Pais</label>
                <input type="text" class="form-control"  name="country" id="country" placeholder="Pais...">
            </div>
            <div class="mb-3">
                <label for="id_country" class="form-label">Ciudad</label>
                <select  class="form-control" name="id_country" id="id_country">
                    <option selected disabled>Selecciona</option>
                    @foreach ($continents as $continent)
                        <option value="{{$continent->id}}">{{$continent->continent}}</option>
                    @endforeach
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </main>
    
@endsection