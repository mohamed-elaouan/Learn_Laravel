<?php

namespace App\Http\Controllers;

use App\Http\Requests\utulisateurRequest;
use App\Models\articles;
use App\Models\User;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ArtProController extends Controller
{
    public function myArticles() {
        $user_uti=utilisateur::find(Auth::id());//->where('Profile_id',"==",Auth::id());
        //get tout les articles de l'utilasateur Auth
        //$Test = utilisateur::find(Auth::id())->Articles;
        return view("Pages.Profil",compact("user_uti"));
    }
    public function Tout()
    {
        $ListArticle = articles::all();
        return view("Pages.Articles", compact("ListArticle"));
    }
    public function Add_User(utulisateurRequest $req)
    {
        $req->validated();
        //methode 1 :
        //utilisateur::create($req->post());
        //methode 2 :
        utilisateur::create([
            'name' => $req->Name,
            'email' => $req->email,
            "password" => Hash::make($req->psw),
            'PhotoURL' => "https://firebasestorage.googleapis.com/v0/b/pourresoudreproblem.appspot.com/o/images%2F4x4.jpg?alt=media&token=27a6c514-4039-4a65-ab04-dd51c9e4d137&_gl=1*1mgyrz*_ga*MTc5NjgzNjQyMi4xNjgwOTUzMDU2*_ga_CW55HF8NVT*MTY5OTExMjA0NS4zMzkuMS4xNjk5MTEyMDk0LjExLjAuMA..",
            'bio' => $req->bio,
        ]);
        return redirect()->route("home")->with('Success', "Bienvenue M.{$req->Name}");
    }
    public function Detail(Request $req)
    {
        $id = $req->id;
        $Art = articles::find($id);
        return view("Pages.Detail", compact("Art"));
    }
    public function Distroy(Request $req)
    {
        articles::destroy($req->art);
        return to_route("ToutArticles");
    }
}
