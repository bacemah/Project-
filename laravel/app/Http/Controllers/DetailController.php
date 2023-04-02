<?php

namespace App\Http\Controllers;

use App\Models\ExtraDetail;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function index(){
        $detail = ExtraDetail::all()  ;
        return $detail;
    }
    public function insert(Request $request){
        $detail = new ExtraDetail ;
        $detail->num_detail=$request->num_detail;
        $detail->num_site=$request->num_site; 
        $detail->newsleeter=$request->newsleeter ; 
        $detail->multilangue =$request->multilangue ; 
        $detail->google_anlytique =$request->google_anlytique ; 
        $detail->livraison_30_jour =$request->livraison_30_jour ; 
        $detail->save() ;
    }
    public function edit(Request $request , $id ){
        $detail=ExtraDetail::where("num_detail" ,$id) ;
        $detail->update([
            "num_site"=>$request->num_site,
            "newsleeter"=>$request->newsleeter,
            "multilangue"=>$request->multilangue ,
            "google_anlytique"=>$request->google_anlytique ,
            "livraison_30_jour"=>$request->livraison_30_jour 
        ]) ;
    }
    public function delete($id){
        $detail = ExtraDetail::where("num_detail" ,$id);
        $detail->delete();
    }
}