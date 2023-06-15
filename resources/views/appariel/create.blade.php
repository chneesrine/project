@extends('layouts.modele')
@section('titre')
Ajout d'un appareil
@endsection
@section('contenu')



<form action="{{ route("appariel.store") }}" method="POST">
    @csrf

    <div class="mb-3">
    <label for="id" class="form-label">Emplacement</label>
        <select  class="form-select" name="emplacement_id" id="emplacement_id">
            @foreach ($emplacements as $emplacement)
            <option value="{{ $emplacement->id }}">{{ $emplacement->Adresse }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <input type="checkbox" class="form-check-input" id="Actif"  name="Actif"/>
    <label for="Etat" class="form-label">Activé</label>
        
    
    </div>

    <button type="submit" class="btn btn-success">Ajouter</button>
</form>
@endsection