<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DynamicController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\eCommerceModelController;
use App\Http\Controllers\ContentController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/client",[ClientController::class, "index"]) ;
Route::get("/client/{id}",[ClientController::class, "one"]) ;
Route::get("/client/firstname/{name}",[ClientController::class, "many"]) ;
Route::get("/client/email/{id}",[ClientController::class, "email"]) ;
Route::get("/client/search/order",[ClientController::class, "ord"]) ;
Route::get("/client/search/first",[ClientController::class, "first"]) ;
Route::post("/client/insert",[ClientController::class, "insert"]) ;
Route::post("/client/edit/{id}",[ClientController::class, "edit"]) ;
Route::delete("/client/delete/{id}",[ClientController::class, "delete"]) ;
Route::get("/application",[ApplicationController::class, "index"]) ;
Route::get("/application/{id}",[ApplicationController::class, "one"]) ;
Route::get("/application/targted/{name}",[ApplicationController::class, "many"]) ;
Route::get("/application/type/{id}",[ApplicationController::class, "email"]) ;
Route::get("/appplication/search/order",[ApplicationController::class, "ord"]) ;
Route::get("/application/search/first",[ApplicationController::class, "first"]) ;
Route::post("/application/insert",[ApplicationController::class, "insert"]) ;
Route::post("/application/edit/{id}",[ApplicationController::class, "edit"]) ;
Route::delete("/application/delete/{id}",[ApplicationController::class, "delete"]) ;
Route::get("/website",[WebSiteController::class, "index"]) ;
Route::get("/website/{id}",[WebSiteController::class, "one"]) ;
Route::get("/website/type/{name}",[WebSiteController::class, "many"]) ;
Route::get("/website/design/{id}",[WebSiteController::class, "email"]) ;
Route::get("/website/search/order",[WebSiteController::class, "ord"]) ;
Route::get("/website/search/first",[WebSiteController::class, "first"]) ;
Route::post("/website/insert",[WebSiteController::class, "insert"]) ;
Route::post("/website/edit/{id}",[WebSiteController::class, "edit"]) ;
Route::delete("/website/delete/{id}",[WebSiteController::class, "delete"]) ;
Route::get("/dynamic",[DynamicController::class, "index"]) ;
Route::post("/dynamic/insert",[DynamicController::class, "insert"]) ;
Route::post("/dynamic/edit/{id}",[DynamicController::class, "edit"]) ;
Route::delete("/dynamic/delete/{id}",[DynamicController::class, "delete"]) ;
Route::get("/detail",[DetailController::class, "index"]) ;
Route::post("/detail/insert",[DetailController::class, "insert"]) ;
Route::post("/detail/edit/{id}",[DetailController::class, "edit"]) ;
Route::delete("/detail/delete/{id}",[DetailController::class, "delete"]) ;
Route::get("/eCommerceModel",[eCommerceModelController::class, "index"]) ;
Route::get("/eCommerceModel/{id}",[eCommerceModelController::class, "one"]) ;
Route::get("/eCommerceModel/{id}/{id1}", [eCommerceModelController::class, "one"]);
Route::get("/eCommerceModel/product_management",[eCommerceModelController::class, "getIdsWithProductManagement"]) ;
Route::get("/eCommerceModel/order_management",[eCommerceModelController::class, "getIdsWithorderManagement"]) ;
Route::get("/eCommerceModel/basket_management",[eCommerceModelController::class, "getIdsWithbasketManagement"]) ;
Route::get("/eCommerceModel/promotion_management",[eCommerceModelController::class, "getIdsWithpromotionManagement"]) ;
Route::get("/eCommerceModel/stock_management",[eCommerceModelController::class, "getIdsWithstockManagement"]) ;
Route::get("/eCommerceModel/search_management",[eCommerceModelController::class, "getIdsWithsearchManagement"]) ;
Route::get("/eCommerceModel/online_management",[eCommerceModelController::class, "getIdsWithonlineManagement"]) ;
Route::get("/eCommerceModel/search/order",[eCommerceModelController::class, "ord"]) ;
Route::post("/eCommerceModel/insert",[eCommerceModelController::class, "insert"]) ;
Route::post("/eCommerceModel/edit/{id}",[eCommerceModelController::class, "edit"]) ;
Route::delete("/eCommerceModel/delete/{id}",[eCommerceModelController::class, "delete"]) ;
Route::get("/Content",[ContentController::class, "index"]) ;
Route::get("/Content/{id}",[ContentController::class, "one"]) ;
Route::get("/Content/{id}/{id1}", [ContentController::class, "one"]);
Route::get("/Content/landing_pages",[ContentController::class, "getIdsWithLandingPages"]) ;
Route::get("/Content/galerie",[ContentController::class, "getIdsWithGalerie"]) ;
Route::get("/Content/formulaire_de_devis",[ContentController::class, "getIdsWithFormulaireDevis"]) ;
Route::get("/Content/formulaire_de_contact",[ContentController::class, "getIdsWithFormulaireContact"]) ;
Route::get("/Content/search/order",[ContentController::class, "ord"]) ;
Route::post("/Content/insert",[ContentController::class, "insert"]) ;
Route::post("/Content/edit/{id}",[ContentController::class, "edit"]) ;
Route::delete("/Content/delete/{id}",[ContentController::class, "delete"]) ;


