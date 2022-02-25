@extends('layouts.layout')
@section('title', 'Creando')
@section('content')
    <h1 class="mt-3">Registro</h1>
    <main>
        <form action="" method="">
            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" class="form-control"  name="city" id="city" placeholder="La ciudad">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="name" id="name" placeholder="Nombre...">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Apellido</label>
                <input type="text" class="form-control"  name="surname" id="surname" placeholder="Apellido...">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Telefono</label>
                <input type="text" class="form-control"  name="phone" id="phone" placeholder="55 55555555">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control"  name="email" id="name" placeholder="correo@correo.com">
            </div>
            <div class="mb-3">
                <label for="id_country" class="form-label">Ciudad</label>
                <select  class="form-control" name="id_country" id="id_country">
                    <option selected disabled>Selecciona</option>
                    @foreach ($countries as $country)
                        <option value="{{$country->id}}">{{$country->country}}</option>
                    @endforeach
                    
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </main>
    
@endsection