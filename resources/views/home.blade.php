@extends('layouts.modele')


@section('titre')
BIENVENUE A NOTRE SITE !    
@endsection

@section('contenu')

<div class="col-sm-6">

    <div class="btn-group" role="group" aria-label="Options de satisfaction">
        <button type="button" class="btn btn-success btn-lg">Trés satisfait</button>
        <button type="button" class="btn btn-warning btn-lg">satisfait</button>
        <button type="button" class="btn btn-info btn-lg">Peu satisfait</button>
        <button type="button" class="btn btn-danger btn-lg">Non satisfait</button>
    </div>

</div>


@endsection