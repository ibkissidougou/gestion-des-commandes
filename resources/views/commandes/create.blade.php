@extends('communs.main')
@section('content')
    <div class="card border border-raduis">
        <div class="card card-header text-white bg-success border-raduis">
            <h3 class="text-center text-white fw-bold">Ajouter une commande</h3>
        </div>
        
        <div class="card card-body mt-4">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nom">Téléphone</label>
                            <select name="" id="" class="form-control">
                                <option value="">626212893</option>
                                <option value="">623610622</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Prenom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>                      
                        <div class="form-group">
                            <label for="nom">Adresse</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>                      
                        <div class="form-group">
                            <label for="nom">Domicile</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>                      
                    
                    </div>
                    <div class="col-6">
                        
                        <div class="form-group">
                            <label for="nom">Désignation</label>
                            <select name="" id="" class="form-control">
                                <option value="">iphone 11</option>
                                <option value="">Ordinateur</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nom">Prix de vente unitaire</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Photo</label>
                            <img src="{{asset('images/inde.jpg')}}" height="300" width="300" class="img-fluid" alt="">
                        </div>                       
                        
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input type="submit" value="Ajouter" name="enregistrer" id="nom" class="btn btn-success text-white  mt-4 form-control">
                            
                        </div>
                        <div class="col-6">
                            <input type="submit" value="Annuler" name="annuler" id="nom" class="btn btn-danger text-white form-control mt-4">
                        </div>
                    </div>
                </div>
            </form>
            <h3 class="text-center mt-4">La liste des produits commandé</h3>
            <table>
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Client</th>
                            <th>Téléphone</th>
                            <th>Prix vente unitaire</th>
                            <th>images</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Moussa conde</td>
                            <td>626212893</td>
                            <td>2.500.000 GNF</td>
                            <td>photos</td>
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
                            <td>Moussa conde</td>
                            <td>626212893</td>
                            <td>2.500.000 GNF</td>
                            <td>photos</td>
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