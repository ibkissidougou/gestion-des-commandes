@extends('communs.main')
@section('content')
    <div class="card border border-raduis">
        <div class="card card-header text-white bg-success border-raduis">
            <h3 class="text-center text-white fw-bold">Enregistrement des clients</h3>
        </div>
        <div class="card card-body">
            <form action="" method="POST">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nom">Nom</label>
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
                        <div class="form-group">                            
                            <input type="submit" value="Enregistrer" name="enregistrer" id="nom" class="btn btn-success text-white  mt-4 form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="nom">Prenom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Téléphone</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nom">Photo</label>
                            <input type="file" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="form-group">                            
                            <input type="submit" value="Annuler" name="annuler" id="nom" class="btn btn-danger text-white form-control mt-4">
                        </div>
                    </div>
                </div>
            </form>
            <h3 class="text-center mt-4">La liste des clients enregistrer</h3>
            <table>
                <table class="table table-bordered table-hover mt-4">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Domicile</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Conde</td>
                            <td>Moussa</td>
                            <td>Kissidougou</td>
                            <td>Dar es salam</td>
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
                            <td>Cisse</td>
                            <td>Sory</td>
                            <td>Kissidougou</td>
                            <td>Dar es salam</td>
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