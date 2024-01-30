@extends('layouts.admin')

@section('content')

    <div class="container">
        <h2> Tecnologia: {{$technology->name}} </h2>
        <p>Slug: {{ $technology->slug}} </p>
        <div class="d-flex">
          <p> Colore: {{ $technology->color}}</p>  
            <div style="width: 20px; height: 20px; background-color: {{ $technology->color }};"></div> 
        </div>
       
        

        @if (count($technology->projects) > 0)
            <h3>Tutti i progetti con questa technologia</h3>
            <ul>
                @foreach ($technology->projects as $project)
                    <li>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">{{ $project->title }}</a>
                    </li>
                @endforeach
            </ul>
        @else
            <p>Nessun progetto ancora presente con questa tecnologia</p>
        @endif

    </div>
    
@endsection