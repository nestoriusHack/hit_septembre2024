@extends('base')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Listes des produits</h1>
    <p class="mb-4">Ici vous pouvez voir vos articles, supprimer, modifier...</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Listes des produits</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($produits as $produit)
                            <tr>
                                <td>{{ $produit->id }}</td>
                                <td>{{ $produit->nomproduit }}</td>
                                <td><img src="{{ asset('storage/'. $produit->imageproduit)  }}"  width="50" height="50" ></td>
                                <td>{{ $produit->descriptionproduit }}</td>
                                <td>{{ formatPrice((float)$produit->prixproduit) }}</td>
                                <td>
                                    <a href="{{ route('products.edit', $produit->id) }}" class="btn btn-warning">Modifier</a>
                                    <form action="{{ route('products.destroy', $produit->id) }}" method="POST" style="display:inline-block;">
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
        </div>
    </div>

</div>
<!-- /.container-fluid -->


@endsection
