@extends('layaouts.app')
@section('title','ajouter etat')
@section('content')





<section class="container">
    <h1 class="mt-3 mb-3">Ajouter une etat :</h1>
    <form method="POST" action="{{ route('etat.ajouter') }}" >
        @csrf
        <div class="mb-3">
        <label for="etat" class="form-label">etat</label>
        <input  type="text" name="etat" class="form-control w-50" id="etat" >
        @error('etat')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Ajouter etat</button>
    </form>
</section>

@endsection


