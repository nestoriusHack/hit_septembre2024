@extends('base')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Insertion de formation</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Entrer Les informations de la formation</h6>
        </div>
        <div class="container mt-5">
            <div class="card">
                <div style="text-align: center" class="card-header">
                    Ajout des Formations
                </div>
                <div class="card-body">
                    <!-- Afficher les messages de succès -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                <center>
                    <form action="{{ route('create.formation') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="table-responsive">
                            <div class="col-sm-6">
                                <label for="nom">Titre</label>
                                <input type="text" class="form-control form-control-user" id="nom" placeholder="Nom de la formation" name="nom" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="description">Description</label>
                                <input type="text" class="form-control form-control-user" id="description" placeholder="Description" name="desc" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="image">Image | Photo</label>
                                <input type="file" class="form-control form-control-user" id="image" name="photo" accept="image/*" required>
                            </div>
                            <br>
                            <div class="col-sm-6">
                                <label for="prix">Cout de la formation</label>
                                <input type="text" class="form-control form-control-user" id="prix" placeholder="Prix" name="prix" required>
                            </div>
                            <br>

                                 <div class="col-sm-6">
                                <button type="submit" class="btn btn-primary btn-user">Ajoutez la formation</button>
                            </div>


                        </div>
                    </form>
                    <br>
                    <!-- Note pour la date du produit -->
                    <div class="col-sm-12">
                        <p><strong>NB :</strong> La date d'ajout sera affichée lors de la recuperation</p>
                    </div>
                </center>
                </div>
            </div>
        </div>


    </div>

</div>
<!-- /.container-fluid -->

@endsection
