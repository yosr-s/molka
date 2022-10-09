@extends('themeback')
@section('title')
<title>liste client</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">liste client</h4>

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
                                                <th>Nom</th>
                                                <th>raison sociale</th>
                                                <th>adresse</th>
                                                <th>matricule fiscale</th>
                                                <th>telephone</th>
                                                <th>e-mail</th>
                                                <th>action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($donnees as $donnee)
                                            <tr>
                                                <td>{{ $donnee['name'] }}</td>
                                                <td>{{ $donnee['raison_sociale'] }}</td>
                                                <td>{{ $donnee['adresse'] }}</td>
                                                <td>{{ $donnee['matricule_fiscale'] }}</td>
                                                <td>{{ $donnee['tel'] }}</td>
                                                <td>{{ $donnee['email'] }}</td>
                                                <td>
                                                <a href="/modif-client"> 
                                                    <button type="button" class="btn btn-primary">modifier</button>
                                                </a>
                                                <a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer le client {{$donnee['name']}}')"
                                                 href="deleteClient/{{$donnee['id']}}"> Supprimer </a>
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
                              
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection