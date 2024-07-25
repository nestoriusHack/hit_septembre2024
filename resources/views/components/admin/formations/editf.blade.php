@extends('base')
@section('content')
<div class="container">
    <h2 class="text-center my-4">Modifier une Formation</h2>
    <form action="{{ route('formations.update', $formation->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom de la Formation</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $formation->nom }}" required>
        </div>
        <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" id="desc" name="desc" rows="3" required>{{ $formation->desc }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="text" class="form-control" id="date" name="date" value="{{ $formation->date }}" required>
        </div>
        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo">
        </div>
        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ $formation->prix }}" required>
        </div>
        <div class="form-group">
            <label for="categorie_id">Catégorie</label>
            <select class="form-control" id="categorie_id" name="categorie_id" required>
                @foreach ($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ $formation->categorie_id == $categorie->id ? 'selected' : '' }}>{{ $categorie->nom }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
