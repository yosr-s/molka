<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;


class AdminController extends Controller
{
    public function getAdmin(){
        $dataAdmin=User::all();
        return view('liste-admin',['donnees'=>$dataAdmin]);
    }
    public function getClient(){
        $dataClient=User::all();
        return view('liste-client',['donnees'=>$dataClient]);
    }
    public function deleteAdmin($id){
        $dataAdminDelete=User::find($id);
        $dataAdminDelete->delete();
        return redirect('/liste-admin')->with('message','votre admin a bien été supprimé');


    }
    
    public function deleteClient($id){
        $dataClientDelete=User::find($id);
        $dataClientDelete->delete();
        return redirect('/liste-client')->with('message','votre client a bien été supprimé');


    }

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
        $Admin->password=$req->password;
        $Admin->save();
        



        return redirect('/liste-admin')->with('message','votre admin a bien été modifié');


    }

    public function addAdmin(Request $req){

        $Admin =new User;
        $Admin->name=$req->name;
        $Admin->prenom=$req->prenom;
        $Admin->login=$req->login;
        $Admin->email=$req->email;
        $Admin->password=$req->password;
        
        if (User::where ('email',$req->email)->exists()){
            return redirect('/ajout-admin')->with('message','email déjà utilisé');
        }else{
        $Admin->save();
        return redirect('/liste-admin')->with('message','votre admin a été bien ajouté');


        }





    }

    public function addClient(Request $req){

        $client =new User;
        $client->name=$req->name;
        $client->raison_sociale=$req->raison_sociale;
        $client->adresse=$req->adresse;
        $client->matricule_fiscale=$req->matricule_fiscale;
        $client->tel=$req->tel;
        $client->email=$req->email;
        $client->password=$req->password;
        
        if (User::where ('email',$req->email)->exists()){
            return redirect('/ajout-client')->with('message','email déjà utilisé');
        }else{
        $client->save();
        return redirect('/liste-client')->with('message','votre client a été bien ajouté');


        }





    }
}
