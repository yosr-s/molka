@extends('theme')
@section('title')
<title>ajouter colis</title>
@endsection
@section('contenu')
            <article> 
                <!-- Banner -->
               
                <!-- /.Banner -->

                <!-- Track Product -->
              
                <!-- /.Track Product -->

                <!-- About Us -->
               
                <!-- /.About Us -->

                <!-- Calculate Your Cost -->
                <section class="calculate pt-100">
                    <div class="theme-container container">  
                        <span class="bg-text right wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s"> ajouter </span>
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <img src="{{url('assets/img/block/Courier-Man.png')}}" alt="" class="wow slideInLeft" data-wow-offset="50" data-wow-delay=".20s" />
                            </div>
                            <div class="col-md-6">   
                                <div class="pad-10"></div>
                                <h2 class="section-title pb-10 wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s" > modifier colis </h2>
                               
                                <div class="calculate-form">
                                    <form class="row"  action="/editColisClient" method="post">
                                    @csrf 
                                            <input type="text" hidden name="id" value="{{$donnee['id']}}">
        
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> désignation: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="height" value="{{$donnee['fournisseur']}}" name="fournisseur" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> quantité: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="width" value="{{$donnee['qte']}}" name="qte" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2">prix: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="depth" value="{{$donnee['prix']}}" name="prix" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> contenu: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" value="{{$donnee['contenu']}}" name="contenu" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> nom client: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" value="{{$donnee['nom']}}" name="nom" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> e-mail client: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" name="email" data-name="weight" value="{{$donnee['email']}}" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> adresee client: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" name="adresse" data-name="weight" value="{{$donnee['adresse']}}" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> tel client: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" name="tel" data-name="weight" type="text" value="{{$donnee['tel']}}" placeholder="" class="form-control"> </div>
                                        </div>
                                       
                                                                       
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                                <div class="btn-1"> <span> Total + 6dt prix de livraison: </span>
                                                    <span data-bind="out:price, f:currency" data-name="cost" class="btn-1 dark">
                                                        <span class="pr-sign">-&nbsp;</span> $<span class="pr-wrap" style="display: none;"><span class="pr">0</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-9 col-xs-12 pull-right"> 
                                        <button class="btn btn-warning" type="submit">modifier colis</button>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="pt-80 hidden-lg"></div>
                            </div>
                        </div>
                    </div>
                </section>
               
            </article>
            <!-- /.Content Wrapper -->

            <!-- Footer -->
@endsection