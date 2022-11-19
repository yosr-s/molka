@extends('themeback')
@section('title')
<title>modifier admin</title>
@endsection
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">modifier un administrateur</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="/editAdmin" method="post">
                                            @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label" >Nom</label>
                                                        <input class="form-control" type="text" name="name" value="{{$donnee['name']}}" placeholder="nom" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Prénom</label>
                                                        <input class="form-control" type="text" name="prenom" value="{{$donnee['prenom']}}"  id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Login</label>
                                                        <input class="form-control" type="text" name="login" value="{{$donnee['login']}}"  id="example-text-input">
                                                    </div>
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" value="{{$donnee['email']}}"  id="example-email-input">
                                                    </div>
                                                    
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label" >Password</label>
                                                        <input class="form-control" type="password" name="password" value="{{$donnee['password']}}"  id="example-password-input">
                                                    </div>


                                                      <div class="form-group">
                <label for="exampleFormControlSelect1">Type</label>
                <select class="form-control" id="exampleFormControlSelect1" name="role" value="{{$donnee['role']}}">
                <option>admin</option>
                <option>livreur</option>
    
    </select>
  </div>



                                                      <div class="mb-3">
                                                                  <button type="submit"  class="btn btn-primary">modifier</button>

                                                    </div>
                                                   
                                                   
                                                    
                                                </div>
                                            </div>

</form>
                                           
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