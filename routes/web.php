<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ArtProController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignInController;
use Illuminate\Support\Facades\Route;

//middleware auth : Middleware/Authenticate
//middleware guest : Providers/RouteServiceProvider

Route::get('/', [HomeController::class, "index"])->name("home")->middleware("auth");
//Anthentication :
Route::get('/SignIn', [SignInController::class, "SignIn"])->name("SignIn")->middleware("guest");;
Route::get('/SignUp', [HomeController::class, "SignUp"])->name("SignUp")->middleware("guest");
Route::post('/Login', [SignInController::class, "Login"])->name("LoginVef");
Route::get('/LogOut', [SignInController::class, "LogOut"])->name("Logout");

// Route::delete('/Supprimer/{art}', [ArtProController::class, "Distroy"])->name("DelArticle");
// Route::get("/Articles", [ArtProController::class, "Tout"])->name("ToutArticles");
// Route::get("/Articles/{id}", [ArtProController::class, "Detail"]);
Route::post("/Add_User", [ArtProController::class, "Add_User"])->name("AddUtilusateur");
//articles par product
Route::get('/myArticle', [ArtProController::class, "myArticles"])->name("myarticle");
// Route::resource("Articles", ArticlesController::class);
Route::resource("Article", ArticlesController::class);
