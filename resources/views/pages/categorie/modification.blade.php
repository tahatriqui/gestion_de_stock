@extends('layaouts.app')
@section('title','modifier division')
@section('content')





<section class="container">
    <h1 class="mt-3 mb-3">Modifier une categorie :</h1>
    <form method="POST" action="{{ route('categorie.edit',$categorie->id) }}" >
        @method('PUT')
        @csrf
        <div class="mb-3">
        <label for="categorie" class="form-label">categorie</label>
        <input value="{{ $categorie->categorie }}"  type="text" name="categorie" class="form-control w-50" id="categorie " >
        @error('categorie')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Modifier categorie</button>
    </form>
</section>

@endsection


