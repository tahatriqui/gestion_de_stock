@extends('layaouts.app')
@section('title','services')
@section('content')

<a class="btn btn-success ms-2" href="{{ route('services_view.ajouter') }}">Ajouter un service</a>
<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >Les services</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Les services</th>
        <th scope="col">division</th>
        <th scope="col">Bureau</th>
        <th scope="col">Les actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       @forelse ($services as $key=>$service )
       <th scope="row">{{ $key + 1 }}</th>
       <td>{{ $service->services }}</td>
       <td>{{ $service->division->name }}</td>
       <td>{{ $service->bureau }}</td>
       <td>
        <a href="{{ route('services.modifier',$service->id) }}" type="button" class="btn btn-success">modifier</a>
        <form class="d-inline" action="{{ route("delete.service", $service->id )}}" method="POST" id="delete-form-{{ $service->id }}">
            @csrf
            @method('DELETE')
            <button onclick="confirmDelete('delete-form-{{ $service->id }}')" type="button" class="btn btn-danger">supprime</button>
          </form>
    </td>


    </tr> @empty
      <tr><td align="center" colspan="8"> vide</td></tr>

       @endforelse

    </tbody>
</table>
        <script>

            function confirmDelete(formId) {
                if (confirm('Are you sure you want to delete this user?')) {
                  document.getElementById(formId).submit();
                }
              }

        </script>

@endsection
