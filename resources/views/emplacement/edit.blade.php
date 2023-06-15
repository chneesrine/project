@extends('layouts.modele')
@section('titre')
Modification d'un emplacement
@endsection
@section('contenu')



<form action="{{ route("emplacement.update",$Emplacement->id) }}" method="POST">
    @csrf
    @method("put")
    <div class="mb-3">
        <label for="" class="form-label">Adresse</label>
        <input type="address" class="form-control"  name="Adresse" value="{{ $Emplacement->Adresse }}"/>
    </div>

    <button type="submit" class="btn btn-success">Modifier</button>
</form>
@endsection