@extends('theme')
@section('title')
<title>contact</title>
@endsection
@section('contenu')
            <!-- /.Header -->

            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> contactez-nous </h2>
                                    <p class="fs-16 no-margin"> Get in touch with us easily </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">contact</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Contact Us -->
                <section class="contact-page pad-30">                    
                    <div class="theme-container container">               
                        <div class="row">
                            <div class="col-md-4 col-sm-6 col-md-offset-1">
                                <ul class="contact-detail title-2 pt-50">
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".40s"> <span>numéro de téléphone:</span> <p class="gray-clr"> +001-2463-957 <br> +001-4356-643 </p> </li>
                                    <li class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s"> <span>adresse e-mail:</span> <p class="gray-clr"> support@go.com <br> info@go.com </p> </li>
                                </ul>
                            </div>

                            <div class="col-md-5 col-sm-6 col-md-offset-1 contact-form">
                                <div class="calculate-form">
                                <div class="calculate-form">
                                    <form class="row" action="addContact" method="post">
                                        @csrf
                                        
                                       
                                      
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> nom: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" data-name="weight" name="nom" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                       
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> e-mail: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" name="email" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".20s">
                                            <div class="col-sm-3"> <label class="title-2"> sujet: </label></div>
                                            <div class="col-sm-9"> <input data-bind="in:value, f: float" name="sujet" data-name="weight" type="text" placeholder="" class="form-control"> </div>
                                        </div>
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-3"> <label class="title-2"> Message: </label></div>
                                            <div class="col-sm-9"> <textarea class="form-control" name="message" id="Message" required cols="25" rows="3"></textarea> </div>
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
                                        <div class="form-group wow fadeInUp" data-wow-offset="50" data-wow-delay=".30s">
                                            <div class="col-sm-9 col-xs-12 pull-right">
                                                <button type="submit" name="submit" id="submit_btn" class="btn-1"> envoyer message </button>
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Us -->

                <!-- Contact Map -->
                <section class="map">
                    <div class="theme-container container">                                                 
                        <div class="contact-map">
                            <img src="{{url('assets/img/background/contact-map.png')}}" alt="" />
                            <div class="map-indicator">
                                <img class="marker-1 wow fadeIn" data-wow-offset="50" data-wow-delay=".30s" alt="" src="{{url('assets/img/icons/marker-1.png')}}" />
                                <img class="marker-2 wow fadeIn" data-wow-offset="50" data-wow-delay=".40s" alt="" src="{{url('assets/img/icons/marker-1.png')}}" />
                                <img class="marker-3 wow fadeInUp" data-wow-offset="50" data-wow-delay=".50s" alt="" src="{{url('assets/img/icons/marker-1.png')}}" />
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /.Contact Map -->

            </article>
            <!-- /.Content Wrapper -->

            @endsection