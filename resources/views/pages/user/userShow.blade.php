@extends('layaouts.app')
@section('title','les utilisateurs')
@section('content')

    <a class="btn btn-success mt-2 mtb-2" href="{{ route('user') }}"> Creer un utilisateur: </a>
<h1>Les utilisateur</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">nom</th>
        <th scope="col">prenom</th>
        <th scope="col">cin</th>
        <th scope="col">telephone</th>
        <th scope="col">email</th>
        <th scope="col">division</th>
        <th scope="col">les actions</th>


      </tr>
    </thead>
    <tbody>
      <tr>
       @forelse ($users as $key=>$user )
       <th scope="row">{{ $key + 1 }}</th>
       <td>{{ $user->nom }}</td>
       <td>{{ $user->prenom }}</td>
       <td>{{ $user->cin }}</td>
       <td>{{ $user->telephone }}</td>
       <td>{{ $user->email }}</td>
       <td>{{ $user->division->name }}</td>
       <td>
        <a href="{{ route("user.modifier",$user->id) }}" type="button" class="btn btn-success">modifier</a>
        <form class="d-inline" action="{{ route("delete.user", $user->id )}}" method="POST" id="delete-form-{{ $user->id }}">
            @csrf
            @method('DELETE')
            <button onclick="confirmDelete('delete-form-{{ $user->id }}')" type="button" class="btn btn-danger">supprime</button>
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
