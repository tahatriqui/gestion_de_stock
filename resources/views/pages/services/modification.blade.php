@extends('layaouts.app')
@section('title','userPage')
@section('content')

<section class="container">
<h1 class="mt-3 mb-3">Modifier un service :</h1>
<form method="POST" action="{{ route('services.edit',$service->id) }}">
    @method('PUT')
    @csrf
    <div class="mb-3">
      <label for="service" class="form-label">Service</label>
      <input value="{{ $service->services }}" type="text" name="service" class="form-control w-50" id="service" >
    </div>

    <div class="mb-3">
        <label for="bureau" class="form-label">bureau</label>
        <input value="{{ $service->bureau }}" type="text" name="bureau" class="form-control w-50" id="bureau" >
      </div>

      <div class="mb-3">
        <select name="div" id="">
            <option value="">Select User</option>
           @forelse ($divisions as $division )
            <option value="{{ $division->id }}">{{ $division->name}}</option>
           @empty
           <option>Ajouter une devision</option>
           @endforelse
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
  </form>

</section>

@endsection
