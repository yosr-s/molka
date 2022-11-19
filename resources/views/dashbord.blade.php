@extends('theme')
@section('contenu')

<article>
                <div class="title-wrap">

                <h2 class="section-title no-margin">       liste colis </h2>
                </div>
                <br>
                <br>
               <a href="/ajout-colis" class="btn btn-primary" style="color: #fff;position: absolute;right: 60px;">ajouter colis</a>  
               <br>
               <br>              
           <div class="theme-container container" >
               <div class="row">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Quantité	</th>
                        <th scope="col">prix	</th>
                        <th scope="col">Contenu		</th>
                        <th scope="col">action	</th>



                      </tr>
                    </thead>
                    <tbody>
                    @foreach($donnees as $donnee)
                      <tr>
                        <th scope="row">1</th>
                        <td>{{$donnee['fournisseur']}}</td>
                        <td>{{$donnee['qte']}}</td>
                        <td>{{$donnee['prix']}}</td>
                        <td>{{$donnee['contenu']}}</td>
                     <td>   
                      @if($donnee->pickup == 0)
                     <a href="/modifierColisClient/{{$donnee['id']}}" class="btn btn-primary"> modifier </a>

                                                    
<a class="btn btn-danger" onclick="return confirm('voulez-vous supprimer le colis {{$donnee['contenu']}}')"
href="deleteColisClient/{{$donnee['id']}}"> Supprimer </a>
@else <p>no right to modifications</p>
@endif
  
</td>


                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
                </div>
            </div>
                
</article>
@endsection
