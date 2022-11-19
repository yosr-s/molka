<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\message;

class msgController extends Controller
{
    public function getmsg(){
        $datamsg=message::all();
        return view('liste-contact',['donnees'=>$datamsg]);
    }
    public function deletemsg($id){
        $dataMessageDelete=message::find($id);
        $dataMessageDelete->delete();
        return redirect('/liste-contact')->with('message','votre message a bien été supprimé');


    }
    //envoyer contact client
    public function addContact(Request $req){
        $message = new message;
        $message->nom=$req->nom;
        $message->email=$req->email;
        $message->sujet=$req->sujet;
        $message->message=$req->message;
        
        
        $message->save();
        return redirect('/contact')->with('message','votre message a été bien ajouté');


        

    }
}
