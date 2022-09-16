<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SengketaController;
use App\Http\Controllers\SponsorDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loadsed by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
  Codee xxxxs
|
*/

Route::get('/', [SengketaController::class,'index']);
Route::post('sengketa/send',[SengketaController::class,'store'])->name('sengketa.store');
Route::get('data-sengketa',[SengketaController::class,'dataSengketa']);
Route::get('form-korban',[SengketaController::class,'formKorban']);
Route::get('form-penyelesai',[SengketaController::class,'formPenyelesai']);
Route::get('form-law-firm',[SengketaController::class,'formLawFirm']);

Auth::routes();
Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
Route::get('/admin/sengketa-tanah',[AdminController::class,'sengketa'])->name('admin.sengketa');
Route::get('/admin/sengketa-tanah/selengkapnya/{id}',[AdminController::class,'selengkapnya'])->name('admin.sengketa');
Route::get('/admin/sengketa-tanah/proses-verif/{id}',[AdminController::class,'prosesVerif'])->name('admin.proses-verif');
Route::get('/admin/hasil-bid-sengketa-tanah/',[AdminController::class,'hasil_bid_sengketa'])->name('admin.hasil-bid-sengketa');
Route::get('/admin/bid_sponsor/{id}/{sengketa}',[AdminController::class,'admin_bid_sponsor'])->name('admin.bid.sponsor');
Route::post('/admin/add_meeting/{sponsor}/{sengketa}',[AdminController::class,'add_meeting'])->name('admin.add.meeting');
Route::get('/admin/create_zoom_meeting',[AdminController::class,'create_zoom_meeting'])->name('admin.create_zoom_meeting');


Route::get('dashboard/publik',[SengketaController::class,'dashboard']);


Route::get('/dashboard',[SponsorDashboardController::class,'index'])->name('dashboard');
Route::get('/browse_sengketa/{id}',[SponsorDashboardController::class,'browse_sengketa'])->name('browsesengketa');
Route::get('/dashboard/bid-sengketa-tanah/{id}',[SponsorDashboardController::class,'bid_sengketa'])->name('bid-sengketa');




Route::get('/testLog', [App\Http\Controllers\HomeController::class, 'index'])->name('test');

Route::get('/home', function ()
{
    if(Auth::user()->role_id == 1){
       return redirect('/admin');
    }else{
       return redirect('/dashboard');
    }
})->name('home');
