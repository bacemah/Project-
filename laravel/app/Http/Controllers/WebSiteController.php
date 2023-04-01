<?php

namespace App\Http\Controllers;

use App\Models\WebSite;
use Illuminate\Http\Request;

class WebSiteController extends Controller
{
    public function index(){
        $websites = WebSite::All()  ;
        return $websites;
    }
    public function one($id){
        $website =WebSite::find($id) ;
        return $website ;
    }
    public function many($name){
        $website = WebSite::where("type",$name)->get();
        return  $website ;
    }
    public function email($id){
        $website = WebSite::find($id , "desgin") ;
        return $website ;
    }
    public function ord(){
        $website=WebSite::orderBy("num_s", "DESC") 
                    ->get() ;
        return $website ;
    }
    public function first(){
        $website = WebSite::orderBy("num_s" , "DESC")->get()->first() ;
        return $website ;
    }
    public function insert(Request $request){
        $website = new WebSite ;
        $website->num_client=$request->num_client ; 
        $website->type=$request->type ; 
        $website->desgin =$request->design ;  
        $website->logo =0 ; 
        $website->save() ;

    }
    public function edit(Request $request , $id ){
        $website=WebSite::where("num_s" ,$id) ;
        $website->update([
            "num_client"=>$request->num_client,
            "type"=>$request->type ,
            "desgin"=>$request->design ,
            "logo"=>0 ,
        ]) ;

    }
    public function delete($id){
        $website=WebSite::where("num_s" , $id) ;
        $website->delete() ; 
        
    }
}
