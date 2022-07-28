<?php

use App\Http\Controllers\DataSiswaController;
use App\Http\Controllers\LoginController;
use App\Models\DataSiswa;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function(){
    $data = [
        "jumlah"=>DataSiswa::all()->count()
    ];
    return view('user.index',$data);
});
Route::get('/register',[DataSiswaController::class,'register']);
Route::get("/login",[LoginController::class,'index'])->name("login");
Route::post("/login",[LoginController::class,'process']);

Route::get("/logout",[LoginController::class,'logout'])->name("logout");
Route::get('/siswa', [DataSiswaController::class,"index"])->name("siswa");
Route::post('/register', [DataSiswaController::class,"store"])->name("register");
Route::get('/siswa/detail/{id}', [DataSiswaController::class,"show"])->middleware('auth');
Route::get('/siswa/cetak/{id}', [DataSiswaController::class,"print"]);
