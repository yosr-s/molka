@extends('themeback')
@section('title')
<title>ajouter admin</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Ajouter un administrateur</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
                                    <form action="addAdmin" method="post">
                                            @csrf 
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Nom</label>
                                                        <input class="form-control" type="text" placeholder="nom" name="name" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="prenom" placeholder="Prénom" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Login</label>
                                                        <input class="form-control" type="text" name="login" placeholder="Login" id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" placeholder="admin@example.com" id="example-email-input">
                                                    </div>
                                                    
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label">Password</label>
                                                        <input class="form-control" name="password" type="password" placeholder="******" id="example-password-input">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleFormControlSelect1">Type</label>
                                                        <select class="form-control" id="exampleFormControlSelect1" name="role">
                                                        <option>admin</option>
                                                        <option>livreur</option>
                                                        
                                                        </select>
                                                    </div>


                                                    



                                                      <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

                                                    </div>
                                                   
                                                   
                                                    
                                                </div>
                                            </div>

                                           
                                        </div>
                                    </div>
</form>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        

                       

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection