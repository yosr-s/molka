@extends('themeback')
@section('contenu')

                <div class="page-content">
                    <div class="container-fluid">

                        

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">ajouter un colis</h4>
                                       
                                    </div>
                                    <div class="card-body p-4">
                                        <form action="addColis" method="post">
                                            @csrf 
        
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">contenu</label>
                                                        <input class="form-control" type="text" name="contenu" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">quantité</label>
                                                        <input class="form-control" type="text" name="qte" id="example-text-input">
                                                    </div>

                                                     <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">prix</label>
                                                        <input class="form-control" type="text" name="prix" id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">nom</label>
                                                        <input class="form-control" type="text" name="nom" id="example-email-input">
                                                    </div>
                                                    
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-email-input" class="form-label">Email</label>
                                                        <input class="form-control" type="email" name="email" id="example-email-input">
                                                    </div>
                                                    
                                                   
                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label">adresse</label>
                                                        <input class="form-control" type="text" name="adresse" id="example-password-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-password-input" class="form-label">telephone</label>
                                                        <input class="form-control" type="text" name="tel" id="example-password-input">
                                                    </div>


                                                   



                                                      <div class="mb-3">
                                                                  <button type="submit" class="btn btn-primary">Ajouter</button>

                                                    </div>
                                                   
                                                   
                                                    
                                                </div>
                                            </div>

                                           
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        

                       

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
                @endsection