@extends('layouts.modele')
@section('titre')
Modification d'un appareil
@endsection
@section('contenu')
    

    <form action="{{ route("appariel.update", $appariel->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">

            <label for="id" class="form-label">Emplacement</label>
           @php
          $emplacements = App\Models\Emplacement::all();
          @endphp

         <select class="form-select" name="emplacement_id" id="emplacement_id">
         @foreach ($emplacements as $emplacement)
         <option value="{{ $emplacement->id }}" @if ($emplacement->id === $appariel->emplacement_id) selected @endif>{{ $emplacement->Adresse }}</option>
         @endforeach
         </select>

        </div>
       
       
        

        <div class="mb-3">
            <input type="checkbox" class="form-check-input" id="Actif" name="Actif" @if ($appariel->Actif) checked @endif>
            <label for="Etat" class="form-label">Activé</label>
        </div>

        <button type="submit" class="btn btn-success">Modifier</button>
    </form>
@endsection
