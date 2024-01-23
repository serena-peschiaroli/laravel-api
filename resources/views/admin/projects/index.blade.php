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
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
               <tr>
                    <th scope="row">{{$project->id}}</th>
                    <td>{{$project->title}}</td>
                    <td>{{$project->description}}</td>
                    <td>{{$project->repository_url}}</td>
                </tr>
                
            @endforeach
            
        </tbody>
</table>
</div>
    
@endsection