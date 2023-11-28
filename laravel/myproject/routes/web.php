<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return ["12"=>["name"=>"Ahmed","age"=>21],"1"=>["name"=>"Mohammed", "age"=>24]];
});

Route::get('/posts', function (Request $req) {
    //dd($req->input("id"));
    $users= ["12"=>["name"=>"Ahmed","age"=>21],"1"=>["name"=>"Mohammed", "age"=>24]];
    //dd($users);
    return $users;
});


Route::get('/posts/{id}/{nom?}', function (string $idd,?string $name=null) {

    return [$idd,$name];
});
