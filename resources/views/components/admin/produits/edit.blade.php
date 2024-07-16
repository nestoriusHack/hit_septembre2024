@extends('base')
@section('content')
<div class="container">
    <h1>Modifier le produit</h1>
    <form action="{{ route('products.update', $produit->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nomproduit">Nom</label>
            <input type="text" name="nomproduit" class="form-control" value="{{ $produit->nomproduit }}">
        </div>
        <div class="form-group">
            <label for="descriptionproduit">Description</label>
            <textarea name="descriptionproduit" class="form-control">{{ $produit->descriptionproduit }}</textarea>
        </div>
        <div class="form-group">
            <label for="imageproduit">Image</label>
            <input type="file" name="imageproduit" class="form-control">
            @if($produit->imageproduit)
                <img src="{{ asset('storage/' . $produit->imageproduit) }}" alt="{{ $produit->nomproduit }}" width="100">
            @endif
        </div>
        <div class="form-group">
            <label for="documentproduit">Document</label>
            <input type="file" name="documentproduit" class="form-control">
            @if($produit->documentproduit)
                <a href="{{ asset('storage/' . $produit->documentproduit) }}" target="_blank">Voir le document</a>
            @endif
        </div>
        <div class="form-group">
            <label for="prixproduit">Prix</label>
            <input type="text" name="prixproduit" class="form-control" value="{{ $produit->prixproduit }}">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
    <br>
</div>
@endsection
