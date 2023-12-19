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
    return \App\Models\Post::paginate(2);
})->name("home");

Route::get('/posts/create', function (Request $req) {
    //dd($req->input("id"));
    $users= ["12"=>["name"=>"Ahmed","age"=>21],"1"=>["name"=>"Mohammed", "age"=>24]];
    //dd($users);
    return $users;
})->name("posts");




Route::get('/posts/{id}/{nom?}', function (string $idd,?string $name=null) {

    return [$idd,$name];
})->name("post");

Route::get("/name", function(){
    return \route("posts");
});

Route::get("/onepost", function(){
    return \route("post",["id"=>12,"nom"=>"Yhya"]);
});

Route::get("/create/post", function(Request $req){
    $post=new \App\Models\Post();
    $post->title=$req->input("title");
    $post->slug=$req->input("slug");
    $post->content="Un contenue react .....";
    $post->save();
   
    return $post;
});