@extends('layaouts.app')
@section('title','Etat')
@section('content')

<a class="btn btn-success mt-2 mb-2" href="{{ route('etat.ajoutePage') }}">Ajouter une Etats</a>

<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >Les Etats</h1>
<table class="table ta w-50 container">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">La etat</th>
            <th scope="col">Les actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse($etats as $key => $etat)
                <tr>
                    <td
                     scope="row">{{ $key + 1 }}
                    </td>
                    <td>
                        {{ $etat->etats }}
                    </td>
                    <td>
                        <a href="{{ route('etat.modifier',$etat->id) }}" type="button" class="btn btn-success">modifier</a>
                        <form action="{{ route("etat.delete",$etat->id) }}" class="d-inline" method="POST" id="delete-form-{{ $etat->id  }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="confirmDelete('delete-form-{{ $etat->id }}')" type="button" class="btn btn-danger">supprime</button>
                          </form>
                        <a href="{{route("etat.filtre",['id' => $etat->id, 'filtre' => $etat->etats])}}" class="btn btn-dark">filtrer par etat</a>
                        </td>
                </tr>
            @empty
            <tr>
                <td align="center" colspan="3"> vide</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <script>
        function confirmDelete(formId) {
            if (confirm('Are you sure you want to delete this etat?')) {
              document.getElementById(formId).submit();
            }
          }
    </script>

@endsection
