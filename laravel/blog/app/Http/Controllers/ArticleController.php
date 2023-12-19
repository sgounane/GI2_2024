<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    public function index(Request $request) {
       
        $articles=\App\Models\Article::with("user","category")->orderBy('updated_at','desc')->paginate(4);
        
        $latest=\App\Models\Article::orderBy('updated_at','desc')->take(5)->get();
        
        return view('home',['titre'=>"Mon blog", 'articles'=>$articles, "latest"=>$latest]);
    }

    public function articleForm(){

        return view("articleForm");
    }

    public function createArticle(Request $req){
        $validator=Validator::make($req->all(),[
            'titre'=>['required','string','min:6'],
            'slug' => 'required|string|unique:articles|max:20',
            'content' => 'required|string|min:100'
        ]);
        //dd($validator);
        $validator->validated();
        //if($validator->fails())return to_route("articleForm")->with('error','Erreur de creation d\'article');
        Article::create([
            'titre'=>$req->input('titre'),
            'slug'=>$req->input('slug'),
            'content'=>$req->input('content')
        ]);
        return to_route("home")->with('success','Article créer avec succeés ');
    }
    public function editArticle(string $slug){
        $article=Article::where("slug",$slug)->get();
        dd($article);
        return view("articleForm",["article"=>$article]);
    }

    public function showArticle(string $slug,Request $request) {
        $article=\App\Models\Article::where('slug',$slug)->first();

        return view('article',['titre'=>$article->slug, 'article'=>$article]);
    }
}
