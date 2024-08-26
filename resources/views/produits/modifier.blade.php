@extends('communs.main')
@section('content')
    <div class="card border border-raduis">
        <div class="card card-header text-white bg-success border-raduis">
            <h3 class="text-center text-white fw-bold">Modification des produits</h3>
        </div>
        
        <div class="row mt-4">
            <div class="col-2 form-group"></div>
            <div class="col-4 form-group">
                <input type="text" name="" id="" placeholder="Rechercher" class="form-control">
            </div>
            <div class="col-2 form-group">
                <input type="submit" value="Rechercher" class="btn btn-info bg-success text-white">
            </div>
            <div class="col-2 form-group">
                <a href="{{route('create.produit')}}" class="btn btn-info bg-success ml-auto text-white ">Nouveau produit<i class="fa fa-plus"></i></a>
            </div>
        </div>

        <div class="card card-body mt-4">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nom">Dédignation</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Quantité</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Prix d'achat unitaire</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>                      
                    
                    </div>
                    <div class="col-6">
                        
                        <div class="form-group">
                            <label for="nom">Prix de vente unitaire</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Photo</label>
                            <input type="file" name="nom" id="nom" class="form-control">
                        </div>
                        
                        <div class="row">
                            <div class="col-6">
                                <input type="submit" value="Modifier" name="enregistrer" id="nom" class="btn btn-success text-white  mt-4 form-control">
                                
                            </div>
                            <div class="col-6">
                                <input type="submit" value="Annuler" name="annuler" id="nom" class="btn btn-danger text-white form-control mt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <h3 class="text-center mt-4">La liste des produits enregistrer</h3>
            <table>
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Désignation</th>
                            <th>Quantité</th>
                            <th>Prix achat unitaire</th>
                            <th>Prix vente unitaire</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Ordinateur</td>
                            <td>21</td>
                            <td>2.500.000 GNF</td>
                            <td>3.200.000 GNF</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm btn-rounded">
                                    Editer
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-warning text-white btn-sm btn-rounded">
                                    Delete
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>iphone11</td>
                            <td>15</td>
                            <td>2.100.000 GNF</td>
                            <td>2.400.000 GNF</td>
                            <td>
                                <a href="" class="btn btn-success btn-sm btn-rounded">
                                    Editer
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="" class="btn btn-warning text-white btn-sm btn-rounded">
                                    Delete
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </table>        
        </div>
    </div>
@endsection