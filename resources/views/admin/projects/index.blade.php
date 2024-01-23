@extends('layouts.admin')

@section('content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Url</th>
            <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
               <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->repository_url}}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug])}}" class="btn btn-success"> Dettagli </a>
                        <a href="{{ route('admin.projects.create')}}" class="btn btn-primary"> Nuovo </a>
                    </td>

                </tr>
                
            @endforeach
            
        </tbody>
</table>
</div>
    
@endsection