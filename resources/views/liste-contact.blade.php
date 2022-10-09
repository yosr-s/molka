@extends('themeback')
@section('title')
<title>liste contact</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste messages</h4>

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
                                                <th>Nom</th>
                                                <th>e-mail</th>
                                                <th>sujet</th>
                                                <th>message</th>
                                                <th>action</th>
                                             
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach($donnees as $donnee)
                                            <tr>
                                                <td>{{$donnee['nom']}}</td>
                                                <td>{{$donnee['email']}}</td>
                                                <td>{{$donnee['sujet']}}</td>
                                                <td>{{$donnee['message']}}</td>
                                                <td>
                                                    <a href="/afficher-contact">
                                                    <button type="button" class="btn btn-primary">afficher</button>
                                                </a>
                                                <a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer le message{{$donnee['nom']}}')"
                                                 href="deleteMsg/{{$donnee['id']}}"> Supprimer </a>


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