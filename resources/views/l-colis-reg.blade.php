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
                                    <h4 class="mb-sm-0 font-size-18">Liste colis par region</h4>

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
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100 table-secondary table table-stripped">
                                            <thead class="table-dark">
                                            <tr>
                                                <th>id</th>
                                                <th>fournisseur</th>
                                                <th>quantité</th>
                                                <th>prix</th>
                                                <th>nom</th>
                                                <th>email</th>
                                                <th>adresse</th>
                                                <th>tel</th>
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
                                                <a href="/modifierColisP/{{$donnee['id']}}" class="btn btn-primary"> modifier </a>

                                                <a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer le colis {{$donnee['contenu']}}')"
                                                 href="deleteColisP/{{$donnee['id']}}"> Supprimer </a>

                                                 <a href="/bonlivr/{{$donnee['id']}}" class="btn btn-warning"> PDF </a>

                                                    




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