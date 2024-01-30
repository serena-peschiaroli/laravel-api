@extends('layouts.admin')

@section('content')

<h2> crea una nuova tecnologia</h2>

<form class mt-3 action="{{route('admin.technologies.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label"> Nome </label>
        <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
    </div>
    <div class="mb-3">
        <label for="color" class="form-label"> Colore Esadecimale </label>
        <input type="text" class="form-control" id="color" name="color" value="{{old('color')}}">
    </div>
    
    <button type="submit" class="btn btn-warning"> Salva </button>

</form>
    
@endsection

