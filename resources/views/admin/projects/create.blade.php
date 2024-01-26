@extends('layouts.admin')

@section('content')

    <div class="container">
        <h1>Crea nuovo progetto</h1>
        
        <form action="{{route('admin.projects.store')}}" method="POST">
            @csrf
        <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}">
                @error('title')
                <div class='invalid-feedback'> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="repository_url" class="form-label">Url del progetto</label>
                <input type="text" class="form-control @error('repository_url') is-invalid @enderror" id="repository_url" name="repository_url" value="{{ old('repository_url') }}">
                @error('repository_url')
                    <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type_id"> Seleziola la tipologia</label>
                <select name="type_id" id="type_id" class="form-select">
                    <option @selected(old('type_id')) value="">Nessun tipo</option>
                    @foreach ($types as $type)
                        <option @selected(old('type_id') == $type->id) value="{{ $type->id}}">{{$type->name}}</option>
                        
                    @endforeach
                </select>

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div> 
            <button type="submit" class="btn btn-success">Invia</button>
        </form>
        
    </div>
@endsection