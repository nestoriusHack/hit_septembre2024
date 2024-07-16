@extends('base')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Insertion des produits</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entrer Les Informations du Produits</h6>
        </div>
        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    Ajouter un produit
                </div>
                <div class="card-body">
                    <!-- Afficher les messages de succès -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('produits.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <div class="col-sm-6">
                                <label for="nom">Nom du Produit</label>
                                <input type="text" class="form-control form-control-user" id="nom" placeholder="Nom du produit" name="nomproduit" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="description">Description du Produit</label>
                                <input type="text" class="form-control form-control-user" id="description" placeholder="Description" name="descriptionproduit" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="image">Image du produit</label>
                                <input type="file" class="form-control form-control-user" id="image" name="imageproduit" accept="image/*" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="document">Document à insérer</label>
                                <input type="file" class="form-control form-control-user" id="document" name="documentproduit" accept=".pdf,.doc,.docx">
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="prix">Prix du produit</label>
                                <input type="text" class="form-control form-control-user" id="prix" placeholder="Prix du produit" name="prixproduit" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-user">Ajouter le produit</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <!-- Note pour la date du produit -->
                    <div class="col-sm-12">
                        <p><strong>NB :</strong> La date du produit sera affichée lors de l'affichage.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

@endsection
