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
                        <th scope="col">statut		</th>
                        <th scope="col">action	</th>



                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                      </tr>
                     
                    </tbody>
                  </table>
                </div>
            </div>
                
</article>
@endsection
