@extends('layaouts.app')
@section('title','Materiel')
@section('content')

<a class="btn btn-success ms-2" href="{{ route('materiel.ajouterPage') }}">Ajouter un materiel</a>
<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >Les materiels</h1>

<table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Les marques</th>
        <th scope="col">service tag</th>
        <th scope="col">code barre</th>
        <th scope="col">La configuration</th>
        <th scope="col">L'etat</th>
        <th scope="col">La division</th>
        <th scope="col">Le service</th>
        <th scope="col">Le category</th>
        <th scope="col">La date</th>
        <th scope="col">L'utilisateur</th>
        <th scope="col">expire</th>

        <th scope="col">Les actions</th>

      </tr>
    </thead>
    <tbody>
      <tr>
       @forelse ($materiels as $key=>$materiel )
       <th scope="row">{{ $key + 1 }}</th>
       <td>{{ $materiel->Marque }}</td>
       <td>{{ $materiel->services_tag }}</td>
       <td>{{ $materiel->code_barre }}</td>
       <td>{{ $materiel->configue }}</td>
       <td>{{ $materiel->etat->etats }}</td>
       <td>{{ $materiel->division->name }}</td>
       <td>{{ $materiel->service->services }}</td>
       <td>{{ $materiel->categories->categorie }}</td>
       <td>{{ $materiel->la_date->year .'-'.$materiel->la_date->month."-".$materiel->la_date->day }}</td>
       <td>{{ $materiel->user->prenom . ' '  . $materiel->user->nom }} </td>
       <td>
        @if($materiel->la_date->year+5 <= $year)
        oui
        @else
        non
        @endif
       </td>

       <td>
        <a href="{{ route('materiel.modifierPage',$materiel->id) }}" type="button" class="btn btn-success">modifier</a>
        <form class="d-inline" action="{{ route("materiel.supprimer", $materiel->id )}}" method="POST" id="delete-form-{{ $materiel->id }}">
            @csrf
            @method('DELETE')
            <button onclick="confirmDelete('delete-form-{{ $materiel->id }}')" type="button" class="btn btn-danger">supprimer</button>
          </form>
    </td>


    </tr> @empty
      <tr><td align="center" colspan="8"> vide</td></tr>

       @endforelse

    </tbody>
</table>
        <script>
            function confirmDelete(formId) {
                if (confirm("t'es sure tu veux supprimer cette materiel?")) {
                  document.getElementById(formId).submit();
                }
              }

        </script>
@endsection
