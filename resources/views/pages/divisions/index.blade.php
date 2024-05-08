@extends('layaouts.app')
@section('title','les division')
@section('content')


<a class="btn btn-success mt-2 mb-2" href="{{ route('division.ajouter') }}">Ajouter une division</a>

<h1 class="container ms-2 mb-4 mt-4" style="color:#090966" >Les devision</h1>
<table class="table ta">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">La divison</th>
        <th scope="col">Les actions</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       @forelse ($divisions as $key=>$division )
       <th scope="row">{{ $key + 1 }}</th>
       <td>{{ $division->name }}</td>
       <td>
        <a href="{{ route('division.modifier',$division->id) }}" type="button" class="btn btn-success">modifier</a>
        <form action="{{ route("division.delete",$division->id) }}" class="d-inline" method="POST" id="delete-form-{{ $division->id  }}">
            @csrf
            @method('DELETE')
            <button onclick="confirmDelete('delete-form-{{ $division->id }}')" type="button" class="btn btn-danger">supprime</button>
          </form>
          <a class="btn btn-dark" href="{{ route('division.filtre',['id' => $division->id, 'division' => $division->name]) }}">les services de division</a>
    </td>


    </tr>
     @empty
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
