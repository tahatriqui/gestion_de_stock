@extends('layaouts.app')
@section('title','creer un utilisateurs')
@section('content')

<a href="{{ route('show.user') }}" class="btn btn-success">retour a la page des utilisateur</a>

<section class="container">
<h1 class="mt-3 mb-3">Ajouter un utilisateur :</h1>
<form method="POST" action="{{route('ajoute.user')}}">
    @csrf

    <div class="mb-3">
      <label for="nom" class="form-label">nom</label>
      <input type="text" name="nom" class="form-control w-50" id="nom" >
        @error('nom')
       <small class="text-danger">{{ $message }}  <i  class="fa-solid fa-circle-exclamation"></i></small>

        @enderror
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">prenom</label>
        <input type="text" name="prenom" class="form-control w-50" id="prenom" >
        @error('prenom')
        <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
        @enderror
    </div>

      <div class="mb-3">
        <label for="cin" class="form-label">CIN</label>
        <input type="cin" name="cin" class="form-control w-50" id="cin" >
        @error('cin')
        <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control w-50" id="email" >
        @error('email')
        <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
        @enderror
      </div>

      <div class="mb-3">
        <label for="telephone" class="form-label"> telephone </label>
        <input type="tel" name="telephone" class="form-control w-50" id="telephone" >
        @error('telephone')
        <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
        @enderror
      </div>

      <div class="mb-3">
        <select name="div" id="">
            <option selected disabled value="">Select divison</option>
           @forelse ($divisions as $division )
            <option value="{{ $division->id }}">{{ $division->name}}</option>
           @empty
           <option>Ajouter une devision</option>
            @endforelse
        </select>
        @error('div')
            <small style="display: block" class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
        @enderror
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</section>

@endsection
