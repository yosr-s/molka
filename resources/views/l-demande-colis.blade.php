@extends('themeback')
@section('title')
<title>liste colis</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste demande colis</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">DataTables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 table-secondary table table-striped">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>id</th>
                                                <th>fournisseur</th>
                                                <th>quantité</th>
                                                <th>prix</th>
                                                <th>nom</th>
                                                <th>email</th>
                                                <th>adresse</th>
                                                <th>telephone</th>
                                                <th>action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($donnees as $donnee)
                                            <tr>
                                                <td>{{$donnee['id']}}</td>
                                                <td>{{$donnee['fournisseur']}}</td>
                                                <td>{{$donnee['qte']}}</td>
                                                <td>{{$donnee['prix']}}</td>
                                                <td>{{$donnee['nom']}}</td>
                                                <td>{{$donnee['email']}}</td>
                                                <td>{{$donnee['adresse']}}</td>
                                                <td>{{$donnee['tel']}}</td>
                                                <td>
                                                <a href="/pickup/{{$donnee['id']}}" class="btn btn-primary"> pickup </a>

                                                    
                                                <a href="/editConfirm/{{$donnee['id']}}" class="btn btn-success"> Confirmer la livraison </a>

                                                    <a href="/editRetour/{{$donnee['id']}}" class="btn btn-danger"> retour de la livraison </a>




                                                </td>
                                            </tr>
                                           @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                </div>
                                <!-- end cardaa -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection