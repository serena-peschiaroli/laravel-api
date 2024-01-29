@extends('layouts.admin')

@section('content')

<div class="container mt-5">
     @if (Session::has('message'))
            <div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
     @endif
    <div class="row">
        <div class="col-12 justify-content-center">
            <div class="card text-center">
                <h2 class="card-title"> {{ $project->title}}</h2>
                <h3 class="card-title"> {{$project->type ? $project->type->name : 'Nessuna tipologia presente'}}</h3>
                <h6 class="card-subtitle mb-2 text-muted">{{$project->repository_url}}</h6>
                <div class="card-body">
                    <p class="card-text">{{$project->description}}.</p>
                </div>    
                <div class="card-body">
                   
                    @if($project->technologies->isNotEmpty())
                        <h3>Tecnologie usate:</h3>
                        <ul>
                            @foreach($project->technologies as $technology)
                                <li class="badge" style="background-color: {{$technology->color}}">{{ $technology->name }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>Nessuna tecnologia specificata</p>
                    @endif

                </div>
            </div>
            <div class="btn-wrapper">
                <a href="{{route('admin.projects.index')}}" class="btn btn-primary">Indietro</a>
                
                <a href="{{route('admin.projects.edit', ['project'=>$project->slug])}}" class="btn btn-warning"> Aggiorna</a>
            </div>
        </div>
    </div>
</div>
    
@endsection