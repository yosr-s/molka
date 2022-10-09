@extends('themeback')
@section('title')
<title>modifier client</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                       
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">modifier un client</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" placeholder="nom" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">raison sociale</label>
                                                        <input class="form-control" type="number" placeholder="raison sociale" id="example-number-input">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Adresse</label>
                                                        <input class="form-control" type="text" placeholder="adresse" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-number-input" class="form-label">matricule fiscale</label>
                                                        <input class="form-control" type="number" placeholder="matricule fiscale" id="example-number-input">
                                                    </div>

                                                      <div class="mb-3">
                                                        <label for="example-tel-input" class="form-label">Telephone</label>
                                                        <input class="form-control" type="tel" placeholder="tel" id="example-tel-input">
                                                    </div>

                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                                    </div>
                                                  
                                                  
                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label">Password</label>
                                                        <input class="form-control" type="password" value="hunter2" id="example-password-input">
                                                    </div>
                                                   <div class="mb-3">
                                                                  <button type="button" class="btn btn-primary">modifier</button>

                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>

                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                       
                      
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection