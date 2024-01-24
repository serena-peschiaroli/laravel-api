@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Modifica</h1>
        
        <form action="{{route('admin.projects.update', ['project'=> $project->slug]) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $project->title) }}">
            </div>
            <div class="mb-3">
                <label for="repository_url" class="form-label">Url del progetto</label>
                <input type="text" class="form-control" id="repository_url" name="repository_url" value="{{ old('repository_url', $project->repository_url) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description"> {{ old('description', $project->description) }}</textarea>
            </div> 
            <button type="submit" class="btn btn-success">Salve le modifiche</button>
        </form>
        
    </div>
@endsection