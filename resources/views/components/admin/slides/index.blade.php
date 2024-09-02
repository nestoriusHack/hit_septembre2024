@extends('base')
@section('content')
<div class="container">
    <h2 class="text-center my-4">Liste des slides</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('slides.create') }}" class="btn btn-primary mb-3">Ajouter une Image</a>
    <table class="table">
        <thead>
            <tr>
                <th>Images</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slides as $slide)
                <tr>
                    <td> <img width="100px" src="{{ asset('storage/'.  $slide->photo )}}" alt=""> </td>
                    <td>
                        <a href="{{ route('slides.edit', $slide->id) }}" class="btn btn-warning">Modifier</a>
                        <form action="{{ route('slides.destroy', $slide->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
