<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index(){
        $applications = Application::all()  ;
        return $applications;
    }
    public function one($id){
        $apllication =Application::find($id) ;
        return $apllication ;
    }
    public function many($name){
        $application = Application::where("targted_devices",$name)->get();
        return $application ;
    }
    public function email($id){
        $application = Application::find($id , "type") ;
        return $application ;
    }
    public function ord(){
        $application=Application::orderBy("num_application", "DESC") 
                    ->get() ;
        return $application ;
    }
    public function first(){
        $application = Application::orderBy("num_application" , "DESC")->get()->first() ;
        return $application ;
    }
    public function insert(Request $request){
        $application = new Application ;
        $application->num_client=$request->num_client ; 
        $application->type=$request->type ; 
        $application->targted_devices =$request->targted_devices ; 
        $application->game_desgin =$request->game_design ;  
        $application->save() ;

    }
    public function edit(Request $request , $id ){
        $application=Application::where("num_application" ,$id) ;
        $application->update([
            "num_client"=>$request->num_client,
            "type"=>$request->type ,
            "targted_devices"=>$request->targted_devices ,
            "game_desgin"=>$request->game_design ,
        ]) ;

    }
    public function delete($id){
        $application=Application::where("num_application" , $id) ;
        $application->delete() ; 
        
    }
}
