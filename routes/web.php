<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadenafuncionaleController;
use App\Http\Controllers\ObjetivoController;
use App\Http\Controllers\PoliticaController;
use App\Http\Controllers\UnidadmedidaController;
use App\Http\Controllers\HomeadminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//admin
/*Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
     Route::resource('/homeadmins',HomeadminController::class);
    //return view('homeadmins');
});*/

//user route
Route::middleware(['auth','verified','isAdmin:user'])->group(function(){
    Route::get('/home',[HomeController::class,'userHome'])-> name('home');

    Route::get('/user',[HomeController::class,'user'])-> name('user');
    //Route::get('/getAccion/', [HomeController::class, 'getAccion'])->name('getAccion'); 

    Route::post('/home/getAccion/', [HomeController::class, 'getAccion'])->name('getAccion'); //
    Route::get('/home/getejercicio/{id}', [HomeController::class,'getejercicio']);     
    Route::get('/home/getEtapa/', [HomeController::class, 'getEtapa'])->name('home/getEtapa'); // route 
    Route::get('/home/getUnidadOperativa/', [HomeController::class, 'getUnidadOperativa'])->name('getUnidadOperativa'); // route 
    Route::get('/home/selectJqgrid/{id}', [HomeController::class, 'selectJqgrid'])->name('selectJqgrid'); // route 
    //Route::get('/getUnidadOperativa/', [HomeController::class,'getUnidadOperativa']); 
    //Route::match(['get','post'], '/HomeController/formEdit/{id}', [HomeController::class, 'formEdit'] );
     Route::get('/home/formEdit/{id}', [HomeController::class, 'formEdit'])->name('formEdit'); // route formEditTarea
});

//admin route
Route::middleware(['auth','verified','isAdmin:admin'])->group(function(){
    Route::get('/admin_home',[HomeController::class,'adminHome'])-> name('home.admin');

    //
    Route::resource('/admin_home/Homeadmins',HomeadminController::class);
     //Route::resource('/admin_home/cadenafuncionales',HomeadminController::class);
    //

    Route::get('/admin',[HomeController::class,'admin'])-> name('admin');

    

    //Route::post('/getAccionA/', [HomeController::class, 'getAccion'])->name('getAccion'); //
    Route::get('/admin_home/getejercicio/{id}', [HomeController::class,'getejercicio']);     
    Route::get('/admin_home/getEtapa/', [HomeController::class, 'getEtapa'])->name('admin_home/getEtapa'); // route 
    Route::get('/admin_home/getUnidadOperativa/', [HomeController::class, 'getUnidadOperativa'])->name('admin_home/getUnidadOperativa'); // route 
    //Route::get('/admin_home/selectJqgrid/{id}', [HomeController::class, 'selectJqgrid'])->name('selectJqgrid'); // route 
     Route::get('/admin_home/addUnidadOperativa/', [HomeController::class, 'addUnidadOperativa'])->name('addUnidadOperativa'); // route 
     Route::get('/admin_home/editArea/', [HomeController::class, 'editArea'])->name('editArea'); // route admin_home/editArea
     Route::resource('/admin_home/cadenafuncionales',CadenafuncionaleController::class);
     Route::resource('/admin_home/objetivos',ObjetivoController::class);
     Route::resource('/admin_home/politicas',PoliticaController::class);
     Route::get('/admin_home/selectJqgrid/{id}', [HomeController::class, 'selectJqgrid'])->name('selectJqgrid'); // route 
     Route::get('/admin_home/formEdit/{id}', [HomeController::class, 'formEdit'])->name('formEdit'); //route
     Route::get('/admin_home/formEditcadena/{id}', [HomeController::class, 'formEditcadena'])->name('formEditcadena'); //route

     Route::get('/admin_home/getaccionadmin/{id}', [HomeController::class,'getaccionadmin']);
     Route::get('/admin_home/getlineaaccion/{id}', [HomeController::class,'getlineaaccion']);
     Route::get('/admin_home/getunidadmedida/{id}', [HomeController::class,'getunidadmedida']); //getcadena
     Route::get('/admin_home/getcadena/', [HomeController::class, 'getcadena'])->name('admin_home/getcadena'); // route 

     Route::resource('/admin_home/unidadmedidass',UnidadmedidaController::class);
     Route::get('/admin_home/insertaJqgrid/', [HomeController::class, 'insertaJqgrid'])->name('admin_home/insertaJqgrid'); // route 
     Route::get('/admin_home/formEditTarea/{id}', [HomeController::class, 'formEditTarea'])->name('formEditTarea'); //route
     //insertaJqgrid

     //Route::get('/admin_home/getUnidadOperativa/', [HomeController::class, 'getUnidadOperativa'])->name('admin_home/getUnidadOperativa'); // route 
});

//Superadmin route
Route::middleware(['auth','verified','isAdmin:superadmin'])->group(function(){
    Route::get('/superadmin_home',[HomeController::class,'superadminHome'])-> name('home.superadmin');
});



require __DIR__.'/auth.php';
