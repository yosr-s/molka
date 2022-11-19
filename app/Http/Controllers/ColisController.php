<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\colis;
use Auth;


class ColisController extends Controller
{
    //affichage
    public function getColis(){
        $dataColis=colis::all();
        return view('l-demande-colis',['donnees'=>$dataColis]);
    }
    //affichage liste colis front
    public function getColisClient(){
        $dataColis=colis::where('email',Auth::user()->email)->get();

       

        return view('dashbord', ['donnees'=>$dataColis]);
    }
    //afficher liste colis back

    public function getlisteColis(){
        $dataColis=colis::all();
        return view('l-colis',['donnees'=>$dataColis]);
    }
    //modifier colis Client
    
    public function getColisIdClient($id){
        $dataColisShow=colis::find($id);
        return view('/modif-colis-client',['donnee'=>$dataColisShow]);


    }
    public function updateColisClient(Request $req){
        $colis = colis::find($req->id);
        $colis->contenu=$req->contenu;
        $colis->qte=$req->qte;
        $colis->prix=$req->prix;
        $colis->nom=$req->nom;
        $colis->email=$req->email;
        $colis->adresse=$req->adresse;
        $colis->fournisseur=$req->fournisseur;
        $colis->tel=$req->tel;
        $colis->save();



        return redirect('/dashbord')->with('message','votre colis a bien été modifié');


    }

    //modifier colis back
    
    public function updateColis(Request $req){
        $colis = colis::find($req->id);
        $colis->contenu=$req->contenu;
        $colis->qte=$req->qte;
        $colis->prix=$req->prix;
        $colis->nom=$req->nom;
        $colis->email=$req->email;
        $colis->adresse=$req->adresse;
        $colis->tel=$req->tel;
        $colis->save();



        return redirect('/l-colis')->with('message','votre colis a bien été modifié');


    }
    //supprimer colis back
    public function deleteColis($id){
        $dataColisDelete=colis::find($id);
        $dataColisDelete->delete();
        return redirect('/l-colis')->with('message','le colis a bien été supprimé');


    }
    //supprimer colis Client
    public function deleteColisClient($id){
        $dataColisDelete=colis::find($id);
        $dataColisDelete->delete();
        return redirect('/dashbord')->with('message','le colis a bien été supprimé');


    }

    //supprimer colis payé
    public function deleteColisP($id){
        $dataColisDelete=colis::find($id);
        $dataColisDelete->delete();
        return redirect('/l-colis-payee')->with('message','le colis a bien été supprimé');


    }
    //récupérer id colis back

    public function getColisId($id){
        $dataColisShow=colis::find($id);
        return view('/modif-colis',['donnee'=>$dataColisShow]);


    }


    //afficher liste colis par region
    public function lreg($reg){
        $dataColisShow=colis::where('region',$reg)->get();
        return view('/l-colis-reg',['donnees'=>$dataColisShow]);


    }


    //ajouter colis back
    public function addColis(Request $req){
        $colis = new colis;
        $colis->contenu=$req->contenu;
        $colis->qte=$req->qte;
        $colis->prix=$req->prix;
        $colis->nom=$req->nom;
        $colis->email=$req->email;
        $colis->adresse=$req->adresse;
        $colis->tel=$req->tel;
        
        $colis->save();
        return redirect('/l-demande-colis')->with('message','votre colis a été bien ajouté');


        

    }

    //ajout colis front
    public function addColisClient(Request $req){
        $colis = new colis;
        $colis->contenu=$req->contenu;
        $colis->qte=$req->qte;
        $colis->prix=$req->prix;
        $colis->nom=$req->nom;
        $colis->email=$req->email;
        $colis->adresse=$req->adresse;
        $colis->fournisseur=$req->fournisseur;
        $colis->tel=$req->tel;
        
        $colis->save();
        return redirect('/dashbord')->with('message','votre colis a été bien ajouté');


        

    }
    //modif de stat 0/1
    public function updateConfirm(Request $req){
        $colis = colis::find($req->id);
        $colis->stat=1;
        
        $colis->save();



        return redirect('/l-demande-colis')->with('message','votre colis est livré avec succées');


    }
    public function updatePickup(Request $req){
        $colis = colis::find($req->id);
        $colis->pickup=1;
        
        $colis->save();



        return redirect('/l-demande-colis')->with('message','votre colis est recu par le livreur');


    }

    public function updateRetour(Request $req){
        $colis = colis::find($req->id);
        $colis->stat=2;
        
        $colis->save();



        return redirect('/l-demande-colis')->with('message','votre colis a été retourné');


    }

    public function getColisLivreParJour(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->where('stat',1)->get();
        return view('/l-colis-livree-jour',['donnees'=>$dataColis]);
    }

    public function getBonLivreParJour(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->where('stat',1)->get();
        $c=colis::whereDate('created_at', date('Y-m-d'))->where('stat',1)->count();
        $s=colis::whereDate('created_at', date('Y-m-d'))->where('stat',1)->sum('colis.prix');
        return view('/bonlivree',['donnees'=>$dataColis,'count'=>$c,'sum'=>$s]);
    }

    public function getColisParJour(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->get();
        return view('/l-colis-jour',['donnees'=>$dataColis]);
    }

    public function getColisRetourParJour(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->where('stat',2)->get();
        return view('/l-colis-retour-jour',['donnees'=>$dataColis]);
    }

    public function getBonRetourParJour(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->where('stat',2)->get();
        $c=colis::whereDate('created_at', date('Y-m-d'))->where('stat',2)->count();
        $s=colis::whereDate('created_at', date('Y-m-d'))->where('stat',2)->sum('colis.prix');
        return view('/bonretour',['donnees'=>$dataColis,'count'=>$c,'sum'=>$s]);
    }

    public function updatePaye(Request $req){
        $colis = colis::find($req->id);
        $colis->paye=1;
        
        $colis->save();



        return redirect('/l-colis')->with('message','votre colis a été payé');


    }

    public function getColisPaye(){
        $dataColis=colis::where('paye',1)->get();
        return view('/l-colis-payee',['donnees'=>$dataColis]);
    }

    public function getColisIdP($id){
        $dataColisShow=colis::find($id);
        return view('/modif-colis-payee',['donnee'=>$dataColisShow]);


    }

    public function updateColisP(Request $req){
        $colis = colis::find($req->id);
        $colis->contenu=$req->contenu;
        $colis->qte=$req->qte;
        $colis->prix=$req->prix;
        $colis->nom=$req->nom;
        $colis->email=$req->email;
        $colis->adresse=$req->adresse;
        $colis->tel=$req->tel;
        $colis->save();



        return redirect('/l-colis-payee')->with('message','votre colis a bien été modifié');


    }

    public function getColisIdpaye($id){
        $dataColisShow=colis::find($id);
        return view('/bonlivpay',['donnee'=>$dataColisShow]);


    }

    public function getColisIdr($id){
        $dataColisShow=colis::find($id);
        return view('/bonlivr',['donnee'=>$dataColisShow]);


    }

    public function getColisIdc($id){
        $dataColisShow=colis::find($id);
        return view('/bonlivraison',['donnee'=>$dataColisShow]);


    }

    public function getBonLivtotal(){
        $dataColis=colis::whereDate('created_at', date('Y-m-d'))->get();
        $c=colis::whereDate('created_at', date('Y-m-d'))->count();
   
        $s=colis::whereDate('created_at', date('Y-m-d'))->sum('colis.prix');
        return view('/bonlivtotal',['donnees'=>$dataColis,'count'=>$c,'sum'=>$s]);
    }
}
