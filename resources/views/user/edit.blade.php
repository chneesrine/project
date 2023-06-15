@extends('layouts.modele')
@section('titre')
Mettre à jour profil
@endsection
@section('contenu')



<form action="{{ route("user.update",$User->id) }}" method="POST">
    @csrf
    @method("put")
    <div class="mb-3">
        <label for="" class="form-label">Nom & prénom</label>
        <input type="text" class="form-control"  name="name" value="{{ $User->name }}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Numéro</label>
        <input type="text" class="form-control"  name="Numéro" value="{{ $User->Numéro }}"/>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Email</label>
        <input type="email" class="form-control"  name="email" value="{{ $User->email }}"/>
    </div>
    <div class="mb-3">
        <input type="checkbox" name="changepassword" id="changepassword">
        <label for="changepassword" class="form-label">Changement du mot de passe</label>
        <input type="password" class="form-control" name="password" value=""/>
    </div>

    <button type="submit" class="btn btn-success">Mettre à jour mes paramètre</button>
</form>
@endsection