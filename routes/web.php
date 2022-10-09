<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ColisController;
use App\Http\Controllers\msgController;
use App\Http\Controllers\QrCodeController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/wp', function () {
    return view('theme');
});
Route::get('/wpb', function () {
    return view('themeback');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/ajout-colis', function () {
    return view('ajout-colis');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashbord', function () {
    return view('dashbord');
});
Route::get('/ajout-admin', function () {
    return view('ajout-admin');
});
Route::get('/liste-admin', function () {
    return view('liste-admin');
});
Route::get('/ajout-client', function () {
    return view('ajout-client');
});
Route::get('/liste-client', function () {
    return view('liste-client');
});
Route::get('/liste-contact', function () {
    return view('liste-contact');
});
Route::get('/l-demande-colis', function () {
    return view('l-demande-colis');
});
Route::get('/a-colis', function () {
    return view('a-colis');
});
Route::get('/l-colis', function () {
    return view('l-colis');
});
Route::get('/l-colis-jour', function () {
    return view('l-colis-jour');
});
Route::get('/l-colis-livree-jour', function () {
    return view('l-colis-livree-jour');
});
Route::get('/l-colis-retour-jour', function () {
    return view('l-colis-retour-jour');
});
Route::get('/l-colis-reg', function () {
    return view('l-colis-reg');
});
Route::get('/l-colis-region', function () {
    return view('l-colis-region');
});
Route::get('/l-colis-payee', function () {
    return view('l-colis-payee');
});
Route::get('/modif-admin', function () {
    return view('modif-admin');
});
Route::get('/modif-client', function () {
    return view('modif-client');
});
Route::get('/modif-colis', function () {
    return view('modif-colis');
});
Route::get('/modif-colis-payee', function () {
    return view('modif-colis-payee');
});
Route::get('/bonlivraison', function () {
    return view('bonlivraison');
});

Route::get('/bonlivtotal', function () {
    return view('bonlivtotal');
});

Route::get('/bonretour', function () {
    return view('bonretour');
});

Route::get('/bonlivree', function () {
    return view('bonlivree');
});

Route::get('/bonlivpay', function () {
    return view('bonlivpay');
});
Route::get('/bonlivr', function () {
    return view('bonlivr');
});
Route::get('/liste-admin',[AdminController::class,'getAdmin']);
Route::get('/l-demande-colis',[ColisController::class,'getColis']);
Route::get('/l-colis',[ColisController::class,'getlisteColis']);
Route::get('/liste-client',[AdminController::class,'getClient']);
Route::get('/liste-contact',[msgController::class,'getmsg']);
Route::get('/deleteAdmin/{id}',[AdminController::class,'deleteAdmin']);
Route::get('/deleteClient/{id}',[AdminController::class,'deleteClient']);
Route::get('/deleteMsg/{id}',[msgController::class,'deletemsg']);
Route::get('/deleteColis/{id}',[ColisController::class,'deleteColis']);


Route::get('/deleteColisP/{id}',[ColisController::class,'deleteColisP']);

Route::get('/bonlivp/{id}',[ColisController::class,'getColisIdpaye']);

Route::get('/bonlivr/{id}',[ColisController::class,'getColisIdr']);


Route::get('/bonlivc/{id}',[ColisController::class,'getColisIdc']);




Route::get('/modifierAdmin/{id}',[AdminController::class,'getAdminId']);
Route::post('/editAdmin',[AdminController::class,'updateAdmin']);

Route::get('/listeparregion/{reg}',[ColisController::class,'lreg']);


Route::get('/modifierColis/{id}',[ColisController::class,'getColisId']);
Route::post('/editColis',[ColisController::class,'updateColis']);

Route::view('/a-colis','a-colis');
Route::post('addColis',[ColisController::class,'addColis']);

Route::view('/ajout-admin','ajout-admin');
Route::post('addAdmin',[AdminController::class,'addAdmin']);

Route::view('/ajout-client','ajout-client');
Route::post('addClient',[AdminController::class,'addClient']);

Route::get('/editConfirm/{id}',[ColisController::class,'updateConfirm']);

Route::get('/pickup/{id}',[ColisController::class,'updatePickup']);


Route::get('/editRetour/{id}',[ColisController::class,'updateRetour']);

Route::get('/editPaye/{id}',[ColisController::class,'updatePaye']);

Route::get('/l-colis-livree-jour',[ColisController::class,'getColisLivreParJour']);

Route::get('/l-colis-jour',[ColisController::class,'getColisParJour']);

Route::get('/l-colis-retour-jour',[ColisController::class,'getColisRetourParJour']);

Route::get('/bonlivree',[ColisController::class,'getBonLivreParJour']);

Route::get('/bonretour',[ColisController::class,'getBonRetourParJour']);

Route::get('/l-colis-payee',[ColisController::class,'getColisPaye']);

Route::get('/modifierColisP/{id}',[ColisController::class,'getColisIdP']);
Route::post('/editColisP',[ColisController::class,'updateColisP']);

Route::get('/bonlivtotal',[ColisController::class,'getBonLivtotal']);

Route::get('/qrcode', [QrCodeController::class, 'index']);


















Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
