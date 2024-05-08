@extends('layaouts.app')
@section('title',$filtre)
@section('content')
<h1  class="container ms-4 mb-5 mt-5">
    Les materiel qui sont :
    <span style="color:#0e0e9c">{{$filtre}}<span/>
</h1>

<table class="table w-50 container table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">la marque</th>
            <th scope="col">services tag</th>
            <th scope="col">code barre</th>
            <th scope="col">la configuration</th>
        </tr>
    </thead>
    <tbody>
        @forelse($materiels as $key => $materiel)
        <tr>
            <td>{{$key+1 }}</td>
            <td>{{ $materiel->Marque }}</td>
            <td>{{ $materiel->services_tag }}</td>
            <td>{{ $materiel->code_barre }}</td>
            <td>{{ $materiel->configue }}</td>

        </tr>
        @empty
        <tr>
            <td colspan="2">Aucun service trouvé.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection
