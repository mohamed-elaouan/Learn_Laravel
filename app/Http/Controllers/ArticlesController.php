<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use App\Http\Requests\ArticlRequest;
use App\Http\Requests\StorearticlesRequest;
use App\Http\Requests\UpdatearticlesRequest;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth')->only("name_Méthode");
        $this->middleware('auth')->except("index");
        //$this->middleware('auth'); //For all methodes
    }
    public function index()
    {
        //$ListArticle = articles::paginate(2);
        $ListArticle = articles::all();
        //dd(Auth::id()); // get id user
        return view("Pages.Articles", compact("ListArticle"));
    }
    public function create()
    {
        return view("Pages.AjtArt");
    }
    public function store(ArticlRequest $request) //StorearticlesRequest $request
    {
        $formField = $request->validated();
        if ($request->hasFile('Photo_Url')) {
            $formField['Photo_Url'] = $request->file('Photo_Url')->store("articles", "public");
        } else {
            $formField['Photo_Url'] = "not found";
        }
        $formField["Profile_id"] = Auth::id();
        articles::create($formField);
        return to_route("Article.index")->with('Success', "Ajoutée bien Succee");
    }
    public function show($id)
    {
        $Art = articles::find($id);
        return view("Pages.Detail", compact("Art"));
    }

    public function edit($id)
    {
        $article = articles::find($id);
        return view("Pages.EditArt", compact("article"));
    }
    //UpdatearticlesRequest
    public function update(ArticlRequest $request)
    {
        $formField = $request->validated();
        if ($request->hasFile('Photo_Url')) {
            $formField['Photo_Url'] = $request->file('Photo_Url')->store("articles", "public");
        } else {
            $formField['Photo_Url'] = "not found";
        }

        $arti = articles::find($request->id);
        $arti->Nom = $formField['Nom'];
        $arti->Prix = $formField['Prix'];
        $arti->Photo_Url = $formField['Photo_Url'];
        $arti->description = $formField['description'];
        $arti->save();
        return to_route("Article.index")->with('Success', "Bien Modifier");
    }


    //!!!!!!!!!!!!!!!!!!!!!!!!!!!
    /*remarque ne oublier pas mettre ça en model
        protected $fillable = [
            'name',
            'email',
            "password",
            'PhotoURL',
            'bio',
        ];*/
    public function destroy($id)
    {
        $article = articles::find($id);
        $article->delete();
        return redirect()->route("Article.index");
    }
}
