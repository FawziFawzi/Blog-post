<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\NewsletterController;
use App\Models\Category;
use App\Models\User;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Models\post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommentsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;



Route::get('/', [PostController::class,'index'] )->name('home');

Route::get('posts/{post}', [PostController::class ,'show']);
Route::post('posts/{post:slug}/comments' , [PostCommentsController::class ,'store']);

Route::post('newsletter' , NewsletterController::class);

Route::get('register' ,[RegisterController::class ,'create'])->middleware('guest');
Route::post('register' ,[RegisterController::class ,'store'])->middleware('guest');

Route::get('login',[SessionsController::class , 'create'])->middleware('guest');
Route::post('login',[SessionsController::class , 'store'])->middleware('guest');


Route::post('logout',[SessionsController::class , 'destroy'])->middleware('auth');


//Admin
Route::middleware('can:admin')->group(function (){
    Route::resource('admin/posts' ,AdminPostController::class)->except('show');

    Route::post('admin/posts' , [AdminPostController::class, 'store']);
    Route::get('admin/posts/create' , [AdminPostController::class, 'create']);
    Route::get('admin/posts' , [AdminPostController::class, 'index']);
    Route::get('admin/posts/{post:id}/edit' , [AdminPostController::class, 'edit']);
    Route::patch('admin/posts/{post:id}' , [AdminPostController::class, 'update']);
    Route::delete('admin/posts/{post:id}' , [AdminPostController::class, 'destroy']);

});

