@extends('layaouts.app')

@section('title','filtre division')

@section('content')

<h1 class="container ms-2 mb-4 mt-4" style="color:#090966">{{$division}}</h1>

<table class="table w-50 container table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Les services</th>
        </tr>
    </thead>
    <tbody>
        @forelse($services as $key => $service)
        <tr>
            <td>{{$key+1 }}</td>
            <td>{{ $service->services }}</td>

        </tr>
        @empty
        <tr>
            <td colspan="2">Aucun service trouvé.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@endsection
