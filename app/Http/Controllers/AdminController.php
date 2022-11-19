<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    //afficher admin
    public function getAdmin(){
        $dataAdmin=User::where('role','admin')->orwhere('role', 'livreur')
        ->get();
        return view('liste-admin',['donnees'=>$dataAdmin]);
    }
    //afficher client
    public function getClient(){
        $dataClient=User::where('role','client')->get();
        return view('liste-client',['donnees'=>$dataClient]);
    }
    //supprim admin
    public function deleteAdmin($id){
        $dataAdminDelete=User::find($id);
        $dataAdminDelete->delete();
        return redirect('/liste-admin')->with('message','votre admin a bien été supprimé');


    }
    //supprim client
    
    public function deleteClient($id){
        $dataClientDelete=User::find($id);
        $dataClientDelete->delete();
        return redirect('/liste-client')->with('message','votre client a bien été supprimé');


    }

    //modifier admin

    public function getAdminId($id){
        $dataAdminShow=User::find($id);
        return view('/modif-admin',['donnee'=>$dataAdminShow]);


    }

    public function updateAdmin(Request $req){

        $Admin = User::find($req->id);
        $Admin->name=$req->name;
        $Admin->prenom=$req->prenom;
        $Admin->login=$req->login;
        $Admin->email=$req->email;
        $Admin->role=$req->role;
        $Admin->password=$req->password;
        $Admin->save();
        



        return redirect('/liste-admin')->with('message','votre admin a bien été modifié');


    }
    //ajouter admin/livreur

    public function addAdmin(Request $req){

        $Admin =new User;
        $Admin->name=$req->name;
        $Admin->prenom=$req->prenom;
        $Admin->login=$req->login;
        $Admin->email=$req->email;
        $Admin->role=$req->role;
        $Admin->password=Hash::make($req->password);
        
        if (User::where ('email',$req->email)->exists()){
            return redirect('/ajout-admin')->with('message','email déjà utilisé');
        }else{
        $Admin->save();
        return redirect('/liste-admin')->with('message','votre admin a été bien ajouté');


        }
    }
    //ajouter client

    public function addClient(Request $req){

        $client =new User;
        $client->name=$req->name;
        $client->raison_sociale=$req->raison_sociale;
        $client->adresse=$req->adresse;
        $client->matricule_fiscale=$req->matricule_fiscale;
        $client->tel=$req->tel;
        $client->email=$req->email;
        $client->role="client";
        $client->password=Hash::make($req->password);
        
        if (User::where ('email',$req->email)->exists()){
            return redirect('/ajout-client')->with('message','email déjà utilisé');
        }else{
        $client->save();
        return redirect('/liste-client')->with('message','votre client a été bien ajouté');


        }





    }

    //modifier client
    public function getClientId($id){
        $dataClientShow=User::find($id);
        return view('/modif-client',['donnee'=>$dataClientShow]);


    }

    public function updateClient(Request $req){

        $client =new User;
        $client->name=$req->name;
        $client->raison_sociale=$req->raison_sociale;
        $client->adresse=$req->adresse;
        $client->matricule_fiscale=$req->matricule_fiscale;
        $client->tel=$req->tel;
        $client->email=$req->email;
        $client->role="client";
        $client->password=$req->password;
        



        return redirect('/liste-client')->with('message','votre client a bien été modifié');


    }
}
