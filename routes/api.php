<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\InfosController;
use App\Http\Controllers\Api\GerantController;
use App\Http\Controllers\Api\AssocieController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\SocieteController;
use App\Http\Controllers\Api\ConjointController;
use App\Http\Controllers\Api\LeveeFondController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\ProfileUsersController;
use App\Http\Controllers\Api\SocieteAssociesController;
use App\Http\Controllers\Api\AssocieConjointsController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')
    ->get('/user', function (Request $request) {
        return $request->user();
    })
    ->name('api.user');

Route::name('api.')
    ->middleware('auth:sanctum')
    ->group(function () {
        Route::apiResource('roles', RoleController::class);
        Route::apiResource('permissions', PermissionController::class);

        Route::apiResource('associes', AssocieController::class);

        // Associe Conjoints
        Route::get('/associes/{associe}/conjoints', [
            AssocieConjointsController::class,
            'index',
        ])->name('associes.conjoints.index');
        Route::post('/associes/{associe}/conjoints', [
            AssocieConjointsController::class,
            'store',
        ])->name('associes.conjoints.store');

        Route::apiResource('conjoints', ConjointController::class);

        Route::apiResource('gerants', GerantController::class);

        Route::apiResource('all-infos', InfosController::class);

        Route::apiResource('levee-fonds', LeveeFondController::class);

        Route::apiResource('profiles', ProfileController::class);

        // Profile Users
        Route::get('/profiles/{profile}/users', [
            ProfileUsersController::class,
            'index',
        ])->name('profiles.users.index');
        Route::post('/profiles/{profile}/users', [
            ProfileUsersController::class,
            'store',
        ])->name('profiles.users.store');

        Route::apiResource('societes', SocieteController::class);

        // Societe Associes
        Route::get('/societes/{societe}/associes', [
            SocieteAssociesController::class,
            'index',
        ])->name('societes.associes.index');
        Route::post('/societes/{societe}/associes', [
            SocieteAssociesController::class,
            'store',
        ])->name('societes.associes.store');

        Route::apiResource('users', UserController::class);
    });
