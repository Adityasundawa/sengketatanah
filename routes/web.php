<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SengketaController;
use App\Http\Controllers\SponsorDashboardController;
use App\Http\Controllers\Utama\DashboardUtamaController;
use App\Http\Controllers\Utama\KorbanController;
use App\Http\Controllers\Utama\PengacaraController;
use App\Http\Controllers\Utama\SponsorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
use App\Http\Controllers\WilayahIndoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loadsed by the RouteServiceProvider within a group which
| contains the "web" middlewaresd group. Now create something great!
  Codee xxxxs
|
*/
Route::get('/', [SengketaController::class,'index']);

Route::post('sengketa/send',[SengketaController::class,'store'])->name('sengketa.store');
Route::get('bid-sengketa',[SengketaController::class,'dataSengketa'])->name('bid-sengketa');
Route::get('bid-sengketa/podcast',[SengketaController::class,'podcastSengketa']);
Route::get('form-korban',[SengketaController::class,'formKorban']);
Route::get('form-penyelesai',[SengketaController::class,'formPenyelesai']);
Route::get('form-law-firm',[SengketaController::class,'formLawFirm']);
Route::get('layanan',[SengketaController::class,'layanan']);
Route::get('kota-prov-id',[WilayahIndoController::class,'getKotaIdProv']);
Route::get('kec-kot-id',[WilayahIndoController::class,'getKecIdKota']);
Route::get('des-kec-id',[WilayahIndoController::class,'getDesaIdKec']);
Route::get('send-email',[EmailController::class,'sendEmail']);




Route::get('tentang-pemerintah',function ()
{
   return view('sengketa.tentang-pemerintah');
 
  
});
Auth::routes();

Route::group(['middleware' => 'role:administrator', 'prefix' => 'administrator', 'as' => 'administrator.'], function () {
  Route::get('/index',[AdminController::class,'index'])->name('index');
  Route::get('/sengketa-tanah',[AdminController::class,'sengketa'])->name('sengketa');
  Route::get('/sengketa-tanah/selengkapnya/{id}',[AdminController::class,'selengkapnya'])->name('sengketa');
  Route::get('/bid_sponsor/{id}/{sengketa}',[AdminController::class,'admin_bid_sponsor'])->name('bid.sponsor');
  Route::post('/create_zoom_meeting/{sponsor}/{sengketa}',[AdminController::class,'create_zoom_meeting'])->name('create_zoom_meeting');
  Route::post('/add_meeting/{sponsor}/{sengketa}',[AdminController::class,'add_meeting'])->name('add.meeting');
  Route::get('/sengketa-tanah/proses-verif/{id}',[AdminController::class,'prosesVerif'])->name('proses-verif');
});

// Route::get('/admin',[AdminController::class,'index'])->name('admin.index');



// Route::get('/admin/hasil-bid-sengketa-tanah/',[AdminController::class,'hasil_bid_sengketa'])->name('admin.hasil-bid-sengketa');
// Route::get('/admin/bid_sponsor/{id}/{sengketa}',[AdminController::class,'admin_bid_sponsor'])->name('admin.bid.sponsor');

// Route::get('/admin/create_zoom_meeting',[AdminController::class,'create_zoom_meeting'])->name('admin.create_zoom_meeting');


Route::get('dashboard/publik',[SengketaController::class,'dashboard']);


// Route::get('/dashboard',[SponsorDashboardController::class,'index'])->name('dashboard');
// Route::get('/browse_sengketa/{id}',[SponsorDashboardController::class,'browse_sengketa'])->name('browsesengketa');
// Route::get('/dashboard/bid-sengketa-tanah/{id}',[SponsorDashboardController::class,'bid_sengketa'])->name('bid-sengketa');

// Route::get('/testLog', [App\Http\Controllers\HomeController::class, 'index'])->name('test');
// Route::get('/home', function () {
//       if (Auth::user()->role_id == 1) {
//          return redirect('/admin');
//       } else {s
//          return redirect('/dashboard');
//       }
//    })->name('home');

Route::get('/redirect', [Controller::class, 'redirect']);

// Route::get('dashboard',[DashboardUtamaController::class,'index'])->name('dashboard.index');

/// Role Utama
Route::group(['middleware' => 'role:utama', 'prefix' => 'utama', 'as' => 'utama.'], function () {
   Route::get('index',[DashboardUtamaController::class,'index'])->name('index');
   Route::post('add_korban',[DashboardUtamaController::class,'add_korban'])->name('add_korban');
   Route::post('add_sponsor',[DashboardUtamaController::class,'add_sponsor'])->name('add_sponsor');
});

/// Role Korban
Route::group(['middleware' => 'role:korban', 'prefix' => 'korban', 'as' => 'korban.'], function () {
   Route::get('index',[KorbanController::class,'index'])->name('index');
   Route::get('bidding',[KorbanController::class,'bidding'])->name('bidding');
   Route::get('tambah_sengketa',[KorbanController::class,'tambah_sengketa'])->name('tambah_sengketa');
   Route::get('list_sengketa_saya',[KorbanController::class,'list_sengketa_saya'])->name('list_sengketa_saya');
   Route::post('add_korban',[KorbanController::class,'add_korban'])->name('add_korban');
   Route::get('add_korban_file/{id}',[KorbanController::class,'add_korban_file'])->name('add_korban_file');
   Route::get('hasil_berkas_sengketa/{id}',[KorbanController::class,'hasil_berkas_sengketa'])->name('hasil_berkas_sengketa');
   Route::post('action_add_korban_file/{id}',[KorbanController::class,'action_add_korban_file'])->name('action_add_korban_file');
});

/// Role Sponsor
Route::group(['middleware' => 'role:sponsor', 'prefix' => 'sponsor', 'as' => 'sponsor.'], function () {
   Route::get('index',[SponsorController::class,'index'])->name('index');
   Route::get('bid-sengketa-tanah/{id}',[SponsorController::class,'bid_sengketa'])->name('bid-sengketa');
   Route::get('cancel-bid-sengketa-tanah/{id}',[SponsorController::class,'cancel_bid_sengketa'])->name('cancel-bid-sengketa');
   Route::post('add_sponsor',[SponsorController::class,'add_sponsor'])->name('add_sponsor');
});

/// Role Pengacara
Route::group(['middleware' => 'role:pengacara', 'prefix' => 'pengacara', 'as' => 'pengacara.'], function () {
   Route::get('index',[PengacaraController::class,'index'])->name('index');
});