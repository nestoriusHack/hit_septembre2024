@extends('base')

@section('content')
<div class="container">
    <h2 class="text-center my-4">Ajouter une image</h2>

    <!-- Affichage des messages d'erreur -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulaire d'ajout de slide -->
    <form action="{{ route('slides.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group col-sm-6 mx-auto">
            <label for="image">Image | Photo</label>
            <input type="file" class="form-control" id="image" name="photo" accept="image/*" required>
        </div>
        <br>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('slides.index') }}" class="btn btn-primary">voir la liste</a>
        </div>
    </form>
</div>
@endsection
