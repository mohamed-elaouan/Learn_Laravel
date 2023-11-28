<?php

namespace App\Http\Controllers;

use App\Models\articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() {
        return view("Pages.Home");
    }

    function SignUp() {
        return view("Pages.Anth.SignUp");
    }

    function AffAct() {
        $ListArticle = articles::all();
        return view("Pages.Articles", compact("ListArticle"));
    }

}
