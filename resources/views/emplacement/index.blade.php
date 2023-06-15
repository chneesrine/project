@extends('layouts.modele')
@section('titre')
Listes des emplacements
@endsection
@section('contenu')

@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
    @endforeach
</div>      
@endif



<a href="{{ route("emplacement.create") }}" class="btn btn-primary" >Ajouter un emplacement</a>
<br>
<table class="table table-striped ">
    <tr>
        <td>id</td>
        <td>Adresse</td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($emplacements as $emplacement)
        <tr>
            <td>{{ $emplacement->id }}</td>
            <td>{{ $emplacement->Adresse }}</td>
            
            <td>
                <a href="{{ route("emplacement.edit",$emplacement->id) }}" class="btn btn-success">Modifier</a>
            </td>
            <td>
                <form action="{{ route("emplacement.destroy", $emplacement->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger text-white">
                        &#128465; 
                    </button>
                </form>
                
                
                
                
            </td>
        </tr>

    @endforeach
</table>
@endsection