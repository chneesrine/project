@extends('layouts.modele')
@section('titre')
Listes des appareils
@endsection
@section('contenu')


@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
    <p>{{ $error }}</p>
  @endforeach
</div>      
@endif

<a href="{{ route("appariel.create") }}" class="btn btn-primary" >Ajouter un appareil</a>
<br>
<table class="table table-striped ">
    <tr>
        <td>ID</td>
        <td>Adresse</td>
        
        <td>Actif</td>
        <td></td>
        <td></td>
    </tr>
    @foreach ($appariels as $appariel)
        <tr>
            <td>{{ $appariel->id }}</td>
            <td>{{ $appariel->emplacement->Adresse }}</td>
            <td>@if ($appariel->Actif==true)
                Oui
            @else
                Non
            @endif</td>
            
            
            <td>
                <a href="{{ route("appariel.edit",$appariel->id) }}" class="btn btn-success">Modifier</a>
            </td>
            <td>
                <form action="{{ route("appariel.destroy", $appariel->id) }}" method="POST">
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