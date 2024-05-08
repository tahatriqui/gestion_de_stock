@extends('layaouts.app')
@section('title','Category')
@section('content')

<a class="btn btn-success mt-2 mb-2" href="{{ route('categorie.ajouter') }}">Ajouter une categorie</a>

<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >Les categories</h1>
<table class="table ta w-50 container">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">La categorie</th>
            <th scope="col">Les actions</th>
        </tr>
        </thead>
        <tbody>
            @forelse($categories as $key => $cat)
                <tr>
                    <td
                     scope="row">{{ $key + 1 }}
                    </td>
                    <td>
                        {{ $cat->categorie }}
                    </td>
                    <td>
                        <a href="{{ route('categorie.modification',$cat->id) }}" type="button" class="btn btn-success">modifier</a>
                        <form action="{{ route("categorie.delete",$cat->id) }}" class="d-inline" method="POST" id="delete-form-{{ $cat->id  }}">
                            @csrf
                            @method('DELETE')
                            <button onclick="confirmDelete('delete-form-{{ $cat->id }}')" type="button" class="btn btn-danger">supprime</button>
                          </form>
                        <a href="{{route("categorie.filtre",$cat->id)}}" class="btn btn-dark">filtrer par category</a>
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
            if (confirm('Are you sure you want to delete this category?')) {
              document.getElementById(formId).submit();
            }
          }
    </script>

@endsection
