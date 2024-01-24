@extends('layouts.admin')

@section('content')

<div class="container">
     @if (Session::has('message'))
            <div class="alert alert-success">
              {{ Session::get('message') }}
            </div>
     @endif
    <div class="mt-5 d-flex justify-content-end">
        <a href="{{ route('admin.projects.create')}}" class="btn btn-primary"> Nuovo </a>
    </div>
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
                        <button type="button" class="btn btn-danger" id="btnDelete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-slug="{{ $project->slug }}" >
                                Cancella
                        </button>
                    </td>

                </tr>
                
            @endforeach
            
        </tbody>
    </table>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="deleteModal">Conferma Cancellazione</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="deleteForm" action="{{ route('admin.projects.destroy', ['project'=>$project->slug]) }}" class="d-inline-block" method="POST">
                    @csrf
                    @method('DELETE')

                
                    <div class="modal-body">
                        Vuoi spostare questo record nel cestino?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                        <button type="sumbit" class="btn btn-danger" id="confirmDelete">Conferma</button>
                    </div>
                </form>    
            </div>
        </div>
    </div>
</div>
    
@endsection