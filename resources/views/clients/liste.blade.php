@extends('communs.main')
@section('content')
    <div class="card border border-raduis">
        <div class="card card-header text-white bg-success border-raduis">
            <h3 class="text-center text-white fw-bold">La liste des clients</h3>
        </div>
        <div class="row mt-4">
            <div class="col-2 form-group"></div>
            <div class="col-4 form-group">
                <input type="text" name="" id="" placeholder="Critère de recherche" class="form-control">
            </div>
            <div class="col-2 form-group">
                <input type="submit" value="Rechercher" class="btn btn-info text-white bg-success">
            </div>
            <div class="col-2 form-group">
                <a href="{{route('create.client')}}" class="btn btn-info bg-success text-white ml-auto">Nouveau client<i class="fa fa-plus"></i></a>
            </div>
        </div>

        
        <div class="card card-body mt-4">
            
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