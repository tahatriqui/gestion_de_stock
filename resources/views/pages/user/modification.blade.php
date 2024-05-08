@extends('layaouts.app')
@section('title','userPage')
@section('content')

<section class="container">
<h1 class="mt-3 mb-3">Modifier l'utilisateur :</h1>
<form method="POST" action="{{route('user.edit',$user->id)}}">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="nom" class="form-label">nom</label>
      <input type="text"  value="{{ $user->nom }}" name="nom" class="form-control w-50" id="nom" >
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" value="{{ $user->prenom }}" name="prenom" class="form-control w-50" id="prenom" >
      </div>

      <div class="mb-3">
        <label for="cin" class="form-label">CIN</label>
        <input type="cin" value="{{ $user->cin }}" name="cin" class="form-control w-50" id="cin" >
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" value="{{ $user->email }}" name="email" class="form-control w-50" id="email" >
      </div>

      <div class="mb-3">
        <label for="email" class="form-label"> telephone </label>
        <input type="tel" name="telephone" value="{{ $user->telephone }}" class="form-control w-50" id="email" >
      </div>
      <div class="mb-3">
        <select name="div" id="">
            <option value="">Select une division</option>
           @forelse ($divisions as $division )
            <option value="{{ $division->id }}">{{ $division->name}}</option>
           @empty
           <option>ajouter une devision</option>
           @endforelse
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</section>

@endsection
