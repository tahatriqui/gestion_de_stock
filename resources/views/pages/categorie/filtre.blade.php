@extends('layaouts.app')
@section('title',$categorie->categorie)
@section('content')

<a class="btn btn-success mt-2 mb-2" href="{{ route('categorie.index') }}">retour a la page des categories</a>

<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >{{$categorie->categorie}}</h1>
<table class="table ta w-50 container">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Les marque</th>
        </tr>
        </thead>
        <tbody>
            @forelse($materiel as $key => $mat)
                <tr>
                    <td
                     scope="row">{{ $key + 1 }}
                    </td>
                    <td>
                        {{$mat->Marque}}
                    </td>
                </tr>
            @empty
            <tr>
                <td align="center" colspan="3"> vide</td>
            </tr>
            @endforelse
        </tbody>
    </table>


@endsection
