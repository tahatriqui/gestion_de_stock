@extends('layaouts.app')
@section('title','modifier un materiel')
@section('content')


<section class="container">
    <h1 class="mt-3 mb-3">Modifier un materiel :</h1>
    <form method="POST" action=" {{ route('materiel.modifier',$materiel->id) }}" >
        @method('put')
        @csrf
        <div class="mb-3">
        <label for="marque" class="form-label">Marque</label>
        <input value="{{$materiel->Marque }}" type="text" name="marque" class="form-control w-50" id="marque" >
        @error('marque')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <label for="services_tag" class="form-label">services tag</label>
        <input  value="{{$materiel->services_tag }}" type="text" name="services_tag" class="form-control w-50" id="services_tag" >
        @error('services_tag')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="code_barre" class="form-label">code barre</label>
        <input value='{{$materiel->code_barre }}'  type="text" name="code_barre" class="form-control w-50" id="code_barre" >
        @error('code_barre')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="configue" class="form-label">configue</label>
        <input  value='{{$materiel->configue }}' type="text" name="configue" class="form-control w-50" id="configue" >
        @error('code_barre')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <label for="date" class="form-label">ajouter la date</label>
        <input  value="{{ $materiel->la_date->format('Y-m-d') }}" type="date" name="date" class="form-control w-50" id="date" >
        @error('date')
        <div class="text-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="mb-3">
        <select name="etat">
            <option  disabled> choisit une etat</option>
            @forelse ($etats as $etat)
            @if($etat->id == $materiel->etats_id)
            <option selected value="{{ $etat->id }}">{{ $etat->etats }}</option>
            @else
            <option  value="{{ $etat->id }}">{{ $etat->etats }}</option>
            @endif

            @empty
            @endforelse
        </select>
        @error('etat')
        <div class="text-danger">{{ $message }}</div>
        @enderror


        <select name="division">
            <option   disabled> choisit une division</option>
            @forelse ($divisions as $division)
            @if($division->id == $materiel->divisions_id)
            <option selected value="{{ $division->id }}">{{ $division->name }}</option>
            @else
            <option value="{{ $division->id }}">{{ $division->name }}</option>
            @endif

            @empty
            @endforelse
        </select>
        @error('division')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <select name="categorie">
            <option selected disabled> choisit une categorie</option>
            @forelse ($categories as $categorie)
            @if($categorie->id == $materiel->categories_id)
            <option selected value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
            @else
            <option value="{{ $categorie->id }}">{{ $categorie->categorie }}</option>
            @endif
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
            @if($service->id == $materiel->services_id)
            <option selected value="{{ $service->id }}">{{ $service->services }}</option>
            @else
            <option value="{{ $service->id }}">{{ $service->services }}</option>
            @endif
            @empty
            @endforelse
        </select>
        @error('service')
        <div class="text-danger">{{ $message }}</div>
        @enderror

        <select name="user">
            <option selected disabled> choisit un utilisateur</option>
            @forelse ($users as $user)

            @if($user->id == $materiel->users_id)
            <option selected value="{{ $user->id }}">{{ $user->prenom ." ".$user->nom }}</option>
            @else
            <option value="{{ $user->id }}">{{ $user->prenom ." ".$user->nom }}</option>
            @endif
            @empty
            @endforelse
        </select>
            @error('user')
            <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
         </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</section>
@endsection
