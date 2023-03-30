<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $clients = Client::all()  ;
        return $clients;
    }
    public function one($id){
        $client =Client::find($id) ;
        return $client ;
    }
    public function many($name){
        $client = Client::where("first_name",$name)->get();
        return $client ;
    }
    public function email($id){
        $client = Client::find($id , "email") ;
        return $client ;
    }
    public function ord(){
        $client=Client::orderBy("num_client", "DESC") 
                    ->get() ;
        return $client ;
    }
    public function first(){
        $client = Client::orderBy("num_client" , "DESC")->get()->first() ;
        return $client ;
    }
    public function insert(Request $request){
        $client = new Client ;
        $client->email=$request->email ; 
        $client->first_name =$request->first_name ; 
        $client->last_name =$request->last_name ; 
        $client->number =$request->number ; 
        $client->messge =$request->message ; 
        $client->save() ;

    }
    public function edit(Request $request , $id ){
        $client=Client::where("num_client" ,$id) ;
        $client->update([
            "email"=>$request->email,
            "first_name"=>$request->first_name ,
            "last_name"=>$request->last_name ,
            "number"=>$request->number ,
            "messge"=>$request->message
        ]) ;

    }
    public function delete($id){
        $client=Client::where("num_client" , $id) ;
        $client->delete() ; 
        
    }
}
