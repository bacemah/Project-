<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;


class ContentController extends Controller
{
    public function index(){
        $contents = Content::all();
        return $contents;
    }
    public function one($id){
        $content = Content::find($id);  
        return $content;    

    }
    public function getIdsWithLandingPages()
{
    $content = Content::where('landing_pages', 1)->get();
    return $content;
}
public function getIdsWithGalerie()
{
    $content = Content::where('galerie', 1)->get();
    return $content;
}
public function getIdsWithFormulaireDevis()
{
    $content = Content::where('formulaire_de_devis', 1)->get();
    return $content;
}
public function getIdsWithFormulaireContact()
{
    $content = Content::where('formulaire_de_contact', 1)->get();
    return $content;
}

   
public function ord(){
    $content = Content::orderby("num_content", "DESC");
}
public function insert(Request $request){
    $content = new Content;
    $content->num_content = $request->num_c;
    $content->num_site = $request->num_site;
    $content->landing_pages = $request->landing_pages;
    $content->galerie = $request->galerie;
    $content->formulaire_de_devis = $request->formulaire_de_devis;
    $content->formulaire_de_contact = $request->formulaire_de_contact;
    $content->save();  
}

public function edit(Request $request, $id){
    $content = Content::where("num_ecommerce_model", $id);
    $content->update([
        "num_site"=>$request->num_site,
        "landing_pages"=>$request->landing_pages,
        "galerie" => $request->galerie,
        "formulaire_de_devis"=>$request->formulaire_de_devis,
        "formulaire_de_contact"=>$request->formulaire_de_contact,
        save()

    ]);
}
public function delete($id){
    $content = Content::where("num_content", $id);
    $content->delete();
}
}
