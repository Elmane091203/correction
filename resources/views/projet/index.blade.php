@extends('layout.app')
    @section('content')
    <div class="container">
        <div class="row" style="margin:20px">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Devoir (Gestion de Projet)</h2>
                    </div>
                    <div class="card-body">
                        <br> <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom</th>
                                        <th>Description</th>
                                        <th>Date Debut</th>
                                        <th>Date de Fin</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  @foreach($projets as $projet)
                                    <tr>
                                        <td>{{ $projet->id}}</td>
                                        <td>{{ $projet->nom_projet}}</td>
                                        <td>{{ $projet->description}}</td>
                                        <td>{{ $projet->date_debut}}</td>
                                        <td>{{ $projet->date_fin}}</td>
                                        <td>
                                            <a href="{{ route('projet.show', ['id' =>$projet->id ]) }}" class="btn btn-primary">Details Projet</a>
                                        </td>
                                    </tr>
                                   @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
