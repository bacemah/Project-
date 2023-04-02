<?php

namespace App\Http\Controllers;

use App\Models\dynamicModel;
use Illuminate\Http\Request;

class DynamicController extends Controller
{
    public function index(){
        $dynamic = dynamicModel::all()  ;
        return $dynamic;
    }
    public function insert(Request $request){
        $dynamic = new dynamicModel ;
        $dynamic->num_dynamic_model=$request->num_dynamic_model;
        $dynamic->num_s=$request->num_s; 
        $dynamic->home_page_management=$request->home_page_management ; 
        $dynamic->landing_page_management =$request->landing_page_management ; 
        $dynamic->blog =$request->blog ; 
        $dynamic->comment_management =$request->comment_management ; 
        $dynamic->category_management =$request->category_management ; 
        $data=$dynamic->save() ;
        if(!$data){
            return response()->json([
                'error'=>'nothing'
            ]);
        }else{
            return response()->json([
                'message'=>'success'
            ]);
        }
    }
    public function edit(Request $request , $id ){
        $dynamic=dynamicModel::where("num_dynamic_model" ,$id) ;
        $dynamic->update([
            "num_s"=>$request->num_s,
            "home_page_management"=>$request->home_page_management,
            "landing_page_management"=>$request->landing_page_management ,
            "blog"=>$request->blog ,
            "comment_management"=>$request->comment_management ,
            "category_management"=>$request->category_management
        ]) ;
    }
    public function delete($id){
        $dynamic = dynamicModel::where("num_dynamic_model" ,$id);
        $dynamic->delete();
    }
}