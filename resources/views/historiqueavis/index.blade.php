@extends('layouts.modele')
@section('titre')
Historiqueavis
@endsection
@section('contenu')


<form action="{{ route("Historiqueavis.index") }}">
  <select name="annee" id="annee">
      @for ($i = 2020; $i < 2026; $i++)
      <option value="{{$i}}" @if ($annee==$i) SELECTED @endif>{{$i}}</option>
      @endfor
  
  </select>
  <select name="mois" id="mois">
      @for ($m = 1; $m < 13; $m++)
      <option value="{{$m}}"  @if ($mois==$m) SELECTED @endif>{{$m}}</option>
      @endfor
  
  </select>
  
  
  <select name="emp" id="emp">
      @foreach ($emplacements as $emplacement)
      <option value="{{$emplacement->id}}" @if ($emplacement->id==$emp) SELECTED @endif>{{$emplacement->Adresse}}</option>
      @endforeach
  </select>
 
  <style>
      .custom-button {
          background-color: blue;
          color: white;
+      }
  </style>
  
  
  <button type="submit" class="btn btn-primary custom-button">
      {{ __('Afficher') }}
  </button>
  
  
 
  </form>
  <div style="width: 900px; height: 1200px;">
      <canvas id="myChart"></canvas>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
      // Récupérer les données de la variable PHP $avis
      const avis =[
  @foreach ($avis as $row) [
  @foreach ($row as $col)
      {{ $col }},
  @endforeach ], 
  @endforeach
  ];
      console.log("avis");
      console.log(avis);
      // Extraire les étiquettes (jours) et les données de chaque type d'avis
      const jours = [];
      const tresSatisfait = [];
      const satisfait = [];
      const peuSatisfait = [];
      const nonSatisfait = [];
      
      Array.from(avis).forEach(row => {
          jours.push(row[0]);
          tresSatisfait.push(row[1]);
          satisfait.push(row[2]);
          peuSatisfait.push(row[3]);
          nonSatisfait.push(row[4]);
      });
      
      console.log("peu satisfait");
      console.log(peuSatisfait);
      console.log("satisfait");
      console.log(satisfait);
      console.log("tres satisfait");
      console.log(tresSatisfait);
      console.log("non satisfait");
      console.log(nonSatisfait);
      console.log("jours");
      console.log(jours);
  
      // Créer le graphique avec Chart.js
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'bar',
          data: {
              labels: jours,
              datasets: [
                  {label: 'Très satisfait',
data: tresSatisfait,
backgroundColor: 'rgba(0, 128, 0)',  // Couleur verte avec une opacité de 0.2
borderColor: 'rgba(0, 128, 0, 1)',      // Couleur verte avec une opacité de 1
borderWidth: 1

                  },
                  {
                    label: 'Satisfait',
data: satisfait,
backgroundColor: 'rgba(255, 165, 0)',  // Couleur orange avec une opacité de 0.2
borderColor: 'rgba(255, 165, 0, 1)',      // Couleur orange avec une opacité de 1
borderWidth: 1

                  },
                  {
                    label: 'Peu satisfait',
data: peuSatisfait,
backgroundColor: 'rgba(0, 0, 255)',  // Couleur bleue avec une opacité de 0.2
borderColor: 'rgba(0, 0, 255, 1)',      // Couleur bleue avec une opacité de 1
borderWidth: 1

                  },
                  {
                    label: 'Non satisfait',
data: nonSatisfait,
backgroundColor: 'rgba(255, 0, 0)',  // Couleur rouge avec une opacité de 0.2

borderColor: 'rgba(255, 0, 0, 1)',      // Couleur rouge avec une opacité de 1
borderWidth: 1

                  }
              ]
          },
          options: {
              responsive: true,
              
          }
      });
  </script>
@endsection
