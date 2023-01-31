@extends('layout.app')
    @section('content')
        <div class="container mt-5">
            <div class="card m-2 p-2 text-center">
                <div class="card-head h4 bg-warning p-2">
                    <div class="text-center text-primary">Details du projet {{$projet->nom_projet}}</div>
                </div>
                <div class="card-body">
                    <div class="row col-md-12 mt-3">
                        <label for="" class="col-md-4 h5 text-left pt-1">Nom du Projet</label>
                        <label for="" class="col-md-8 h5 text-left pt-1">{{$projet->nom_projet}}</label>
                    </div>
                    <div class="row col-md-12 mt-3">
                        <label for="" class="col-md-4 h5 text-left pt-1">Description du Projet</label>
                        <p>{{ $projet->description}}</p>
                    </div>
                    <div class="row col-md-12 mt-3">
                        <label for="" class="col-md-4 h5 text-left pt-1">Date de debut du Projet</label>
                        <label for="" class="col-md-8 h5 text-left pt-1">{{ $projet->date_debut}}</label>
                    </div>
                    <div class="row col-md-12 mt-3">
                        <label for="" class="col-md-4 h5 text-left pt-1">Date de fin du Projet</label>
                        <label for="" class="col-md-8 h5 text-left pt-1">{{ $projet->date_fin}}</label>
                    </div>
                </div>     
            </div>
            <div class="card">
                <table class="table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>Nom Phase</th>
                        <th>Priorite</th>
                        <th>Duree</th>
                    </thead>
                    <tbody>
                        @foreach($projet->phases as $phase)
                            <tr>
                                <td>{{$phase->id}}</td>
                                <td>{{$phase->nom_phase}}</td>
                                <td>{{$phase->priorite}}</td>
                                <td>{{$phase->duree}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
