@extends('layaouts.app')
@section('title','userPage')
@section('content')


<section class="container">
<h1 class="mt-3 mb-3">Ajouter un service :</h1>
<form method="POST" action="{{ route('services.ajouter') }}">
    @csrf
    <div class="mb-3">
      <label for="service" class="form-label">Service</label>
      <input  type="text" name="service" class="form-control w-50" id="service" >
      @error("service")
            <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
      @enderror
    </div>

    <div class="mb-3">
        <label for="bureau" class="form-label">bureau</label>
        <input  type="text" name="bureau" class="form-control w-50" id="bureau" >
            @error("bureau")
            <small class="text-danger">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
            @enderror
      </div>

      <div class="mb-3">
        <select name="div" id="">
            <option selected disabled >Select une devision</option>
           @forelse ($divisions as $division )
            <option value="{{ $division->id }}">{{ $division->name}}</option>
           @empty
           <option>Ajouter une devision</option>
           @endforelse
        </select>
            @error("div")
            <small class="text-danger d-block">{{ $message }} <i  class="fa-solid fa-circle-exclamation"></i></small>
            @enderror
      </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>

</section>

@endsection
