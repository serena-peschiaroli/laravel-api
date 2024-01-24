@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Crea nuovo progetto</h1>
        
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
        <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3">
                <label for="repository_url" class="form-label">Url del progetto</label>
                <input type="text" class="form-control" id="repository_url" name="repository_url" value="{{ old('repository_url') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div> 
            <button type="submit" class="btn btn-success">Invia</button>
        </form>
        <div class="btn-wrapper">
            
        </div>
        
    </div>
@endsection