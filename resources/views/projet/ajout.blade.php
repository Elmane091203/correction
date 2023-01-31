@extends('layout.app')
    @section('content')
    <div class="container mt-5">
            <div class="card m-2 p-2 bg-secondary">
                <div class="card-head h4 bg-warning p-2">
                    <div class="text-center text-primary">Veuillez remplir les champs</div>
                </div>
            </div>
            <div class="card mt-4 col-md-8 offset-md-2">
                <div class="h4 text-center bg-primary p-2 text-white">Formulaire d'ajout de Projet</div>
                <div class="card-body text-center">
                    <form action="/store" class="align-middle" method="post">
                        @csrf
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Nom du Projet</label>
                            <input name="nom_projet" type="text" class="form-control col-md-8">
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Description du Projet</label>
                            <textarea name="description" cols="30" rows="1" class="form-control col-md-8"></textarea>
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Date de debut du Projet</label>
                            <input name="date_debut" type="date" class="form-control col-md-8">
                        </div>
                        <div class="row col-md-12 mt-3">
                            <label for="" class="col-md-4 h5 text-left pt-1">Date de fin du Projet</label>
                            <input name="date_fin" type="date" class="form-control col-md-8">
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Enregistrer</button>
                    </form>
                </div>
            </div>
        </div>
@endsection