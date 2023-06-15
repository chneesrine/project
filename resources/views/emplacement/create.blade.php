@extends('layouts.modele')
@section('titre')
Ajout d'un emplacement
@endsection
@section('contenu')



<form action="{{ route("emplacement.store") }}" method="POST">
    @csrf
    <div class="mb-3">
    <label for="" class="form-label">Adresse</label>
        <input type="address" class="form-control"  name="Adresse"/>
    </div>
    <button type="submit" class="btn btn-success">Ajouter</button>
</form>
@endsection