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
}
