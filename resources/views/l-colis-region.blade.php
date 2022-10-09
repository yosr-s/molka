@extends('themeback')
@section('title')
<title>ajouter client</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">

                                    

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title">Liste par region <span class="text-muted fw-normal ms-2">(834)</span></h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                                    <div>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item">
                                                <a class="nav-link" href="apps-contacts-list.html" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" href="apps-contacts-grid.html" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-secondary"><i class="bx bx-plus me-1"></i> Add New</a>
                                    </div>
                                    <div class="dropdown">
                                        <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='manouba'}}">
                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           
                                       

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de manouba</p>

                                        </div>
                                    </div>
                                    </a>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                         
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='mednine'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de mednine</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                                <!-- end card -->
                           
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='monastir'}}">
                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           
                                      

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de monastir</p>

                                        </div>
</a>
                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='nabeul'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de nabeul</p>

                                        </div>
                                        </a>
                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->

                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='sfax'}}">
                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           
                                        

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de sfax</p>

                                        </div>
                                        </a>
                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='sidi bou zid'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de sidi bou zid </p>

                                        </div>
                                        </a>
                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='siliana'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de siliana</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='sousse'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           
                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de sousse</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='tatouine'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de tatouine</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='tozeur'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de tozeur </p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='tunis'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de tunis</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='zaghouan'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de zaghouan</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='ariana'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de ariana</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='beja'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de beja</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='ben arous'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de ben arous</p>

                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='bizerte'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de bizerte</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='gabes'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de gabes</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='gafsa'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de gafsa</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='jendouba'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de jendouba</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='kairouan'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de kairouan</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='kasserien'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de kasserien</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='kebili'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de kebili</p>

                                        </div>
                                        </a>
                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='kef'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de kef</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>  <div class="col-xl-3 col-sm-6">
                                <div class="card">
                                    <div class="card-body">
                                    <a href="/listeparregion/{{$reg='mahdia'}}">

                                       
                                        <div class="d-flex align-items-center">
                                            <div>

                                                <img src="{{url('asset/images/users/tn.png')}}" alt="" class="avatar-lg rounded-circle img-thumbnail">
                                            </div>
                                          
                                        </div>
                                        <div class="mt-3 pt-1">
                                           

                                            <p class="text-muted mb-0 mt-2"><i class="mdi mdi-google-maps font-size-15 align-middle pe-2 text-primary"></i>
                                              gouvernorat de mahdia</p>
                                        </div>
                                        </a>

                                    </div>

                                   
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                            
                        </div>
                        <!-- end row -->

                        <div class="row g-0 align-items-center mb-4">
                            <div class="col-sm-6">
                                <div>
                                    <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-sm-end">
                                    <ul class="pagination mb-sm-0">
                                        <li class="page-item disabled">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a href="#" class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection