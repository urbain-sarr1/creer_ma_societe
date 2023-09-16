<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\InfosController;
use App\Http\Controllers\GerantController;
use App\Http\Controllers\AssocieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocieteController;
use App\Http\Controllers\ConjointController;
use App\Http\Controllers\LeveeFondController;
use App\Http\Controllers\PermissionController;

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

require __DIR__ . '/frontend.php';
require __DIR__ . '/backend.php';
route::get('/connexion',function(){

        return view('/frontend/connexion');
});

route::get('/creer_compte', function(){
     
    return view('/frontend/creer_compte');
});

route::get('/compte',function(){

      return view('/frontend/compte');
});

route::get('/leve_de_fond', function(){

     return view('/frontend/leve_de_fond');
});
// Auth::routes(['register'=>false]);php

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::prefix('/')
//     ->middleware('auth')
//     ->group(function () {
//         Route::resource('roles', RoleController::class);
//         Route::resource('permissions', PermissionController::class);

//         Route::resource('associes', AssocieController::class);
//         Route::resource('conjoints', ConjointController::class);
//         Route::resource('gerants', GerantController::class);
//         Route::get('all-infos', [InfosController::class, 'index'])->name(
//             'all-infos.index'
//         );
//         Route::post('all-infos', [InfosController::class, 'store'])->name(
//             'all-infos.store'
//         );
//         Route::get('all-infos/create', [
//             InfosController::class,
//             'create',
//         ])->name('all-infos.create');
//         Route::get('all-infos/{infos}', [InfosController::class, 'show'])->name(
//             'all-infos.show'
//         );
//         Route::get('all-infos/{infos}/edit', [
//             InfosController::class,
//             'edit',
//         ])->name('all-infos.edit');
//         Route::put('all-infos/{infos}', [
//             InfosController::class,
//             'update',
//         ])->name('all-infos.update');
//         Route::delete('all-infos/{infos}', [
//             InfosController::class,
//             'destroy',
//         ])->name('all-infos.destroy');

//         Route::resource('levee-fonds', LeveeFondController::class);
//         Route::resource('profiles', ProfileController::class);
//         Route::resource('societes', SocieteController::class);
//         Route::resource('users', UserController::class);
//     });
