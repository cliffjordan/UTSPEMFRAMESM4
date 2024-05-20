<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;
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
## Login with Google

Route::middleware(['web'])->get('oauth/register', [API\LoginGoogle::class, 'authenticateGoogle']);
Route::middleware(['web'])->get('oauth/register/callback', [API\LoginGoogle::class, 'handleCallback']);

Route::get('/', function () {
    return view('welcome');
});
