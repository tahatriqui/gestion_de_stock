@extends('layaouts.app')
@section('title','ajouter un materiel')
@section('content')


<section class="container">
    <h1 class="mt-3 mb-3">Ajouter un materiel :</h1>
    <form method="POST" action="{{ route('materiel.ajouter') }}" >
        @csrf
        <div class="mb-3">
        <label for="marque" class="form-label">Marque</label>
        <input value="{{old('marque')}}" type="text" name="marque" class="form-control w-50" id="marque" >
        @error('marque')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="services_tag" class="form-label">services tag</label>
        <input value="{{old('services_tag')}}"  type="text" name="services_tag" class="form-control w-50" id="services_tag" >
        @error('services_tag')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="code_barre" class="form-label">code barre</label>
        <input  value="{{old('code_barre')}}"  type="text" name="code_barre" class="form-control w-50" id="code_barre" >
        @error('code_barre')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="configue" class="form-label">configue</label>
        <input value="{{old('configue')}}"  type="text" name="configue" class="form-control w-50" id="configue" >
        @error('code_barre')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="date" class="form-label">ajouter la date</label>
        <input  type="date" name="date" class="form-control w-50" id="date" >
        @error('date')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <select name="etat">
            <option selected disabled> choisit une etat</option>
            @forelse ($etats as $etat)
            <option value="{{ $etat->id }}">{{ $etat->etats }}</option>
            @empty
            @endforelse
        </select>
        @error('etat')
        <div class="text-danger">{{ $message }}</div>
        @enderror


        <select name="division">
            <option selected disabled> choisit une division</option>
            @forelse ($divisions as $division)
            <option value="{{ $division->id }}">{{ $division->name }}</option>
            @empty
            @endforelse
        </select>
        @error('division')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <select name="categorie">
            <option selected disabled> choisit une categorie</option>
            @forelse ($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
            @empty
            @endforelse
        </select>
        @error('division')
        <div class="text-danger">{{ $message }}</div>
        @enderror


<br>
<br>
        <select name="service">
            <option selected disabled> choisit un service</option>
            @forelse ($services as $service)
            <option value="{{ $service->id }}">{{ $service->services }}</option>
            @empty
            @endforelse
        </select>
        @error('service')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <select name="user">
            <option selected disabled> choisit un utilisateur</option>
            @forelse ($users as $user)
            <option value="{{ $user->id }}">{{ $user->prenom ." ".$user->nom }}</option>
            @empty
            @endforelse
        </select>
            @error('user')
            <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
         </div>
        <button type="submit" class="btn btn-primary">Ajouter </button>
    </form>
</section>
@endsection
