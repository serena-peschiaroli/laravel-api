@extends('layouts.admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6">
                <a href="{{route('admin.technologies.create')}}" class="btn btn-success mt-5"> Crea nuova categoria</a>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th scope="col"> id</th>
                            <th scope="col"> nome </th>
                            <th scope="col"> slug</th>
                            <th scope="col"> color</th>
                            <th scope="col"> azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($technologies as $tech)
                        <tr>
                            <th scope="row"> {{$tech->id}} </th>
                            <td> {{$tech->name}} </td>
                            <td> {{ $tech->slug}} </td>
                            <td> {{$tech->color}} </td>
                            <td>
                                <a class="btn btn-primary" href=" {{route('admin.technologies.show', ['technology' => $tech->slug])}} "> Dettagli</a>
                            </td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection