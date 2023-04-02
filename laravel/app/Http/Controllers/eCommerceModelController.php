<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\eCommerceModel;

class eCommerceModelController extends Controller
{
    public function index(){
        $ecommercemodels = eCommerceModel::all();
        return $ecommercemodels;
    }
    public function one($id){
        $ecommercemodel = eCommerceModel::find($id);
        return $ecommercemodel;
    }
    public function getIdsWithProductManagement(){
       $ecommercemodel = eCommerceModel::where('product_management', 1)->get();
       return $ecommercemodel;
    }

public function getIdsWithOrderManagement()
{
    $ecommercemodel = eCommerceModel::where('order_management', 1)->get();
    return $ecommercemodel;
}
public function getIdsWithBasketManagement()
{
    $ecommercemodel = eCommerceModel::where('basket_management', 1)->get();
    return $ecommercemodel;
}
public function getIdsWithPromotionManagement()
{
    $ecommercemodel = eCommerceModel::where('promotion_management', 1)->get();
    return $ecommercemodel;
}
public function getIdsWithStockManagement()
{
    $ecommercemodel = eCommerceModel::where('stock_management', 1)->get();
    return $ecommercemodel;
}
public function getIdsWithSearchEngine()
{
    $ecommercemodel = eCommerceModel::where('search_engine', 1)->get();
    return $ecommercemodel;
}
public function getIdsWithOnlinePayment()
{
    $ecommercemodel = eCommerceModel::where('online_payment', 1)->get();
    return $ecommercemodel;
}
public function ord(){
    $ecommercemodel = eCommerceModer::orderby("num_ecommerce_model", "DESC");
}
public function insert(Request $request){
    $ecommercemodel = new eCommerceModel;
    
    $ecommercemodel->num_ecommerce_model = $request->num_e;
    $ecommercemodel->num_s = $request->num_s;
    $ecommercemodel->product_management = $request->product_management;
    $ecommercemodel->order_management = $request->order_management;
    $ecommercemodel->basket_management = $request->basket_management;
    $ecommercemodel->promotion_management = $request->promotion_management;
    $ecommercemodel->stock_management = $request->stock_management;
    $ecommercemodel->search_engine = $request->search_management;
    $ecommercemodel->online_payment = $request->online_management;
    $ecommercemodel->save();
    //probléme avec le cle etranger est ce que on va faire une nouveau fonction referencesTable ou c'est inclut dans insert ??? et aussi est'ce que l'ajout de x_management n'est pas nécessaire car sont déclarée par defaut 0
}

public function edit(Request $request, $id){
    $ecommercemodel = eCommerceModel::where("num_ecommerce_model", $id);
    $ecommercemodel->update([
        "num_s"=>$request->num_s,
        "product_management"=>$request->product_management,
        "order_management" => $request->order_management,
        "basket_management"=>$request->basket_management,
        "promotion_management"=>$request->promotion_management,
        "stock_management"=>$request->stock_management,
        "search_management"=>$request->search_management,
        "online_management"=>$request->online_management,
        save()

    ]);
}
public function delete($id){
    $ecommercemodel = eCommerceModel::where("num_ecommerce_model", $id);
    $ecommercemodel->delete();
}
    

}
