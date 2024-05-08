@extends('layaouts.app')
@section('title','userPage')
@section('content')

        <section class="container">
            <h1 class="mt-3 mb-3">Ajouter une division :</h1>
            <form method="POST" action="{{ route('division.add') }}">
                @csrf
                <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input  type="text" name="division" class="form-control w-50" id="division" >
                @error('division')
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </form>
        </section>
        
@endsection
