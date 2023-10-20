<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;

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
    // $files =  File::files(resource_path("posts/"));

    // $posts = collect($files)
    //     ->map(function($file){
    //         return YamlFrontMatter::parseFile($file);
    //     })
    //     ->map(function($document) {
    //         return new Post(
    //             $document->title,
    //             $document->excerpt,
    //             $document->date,
    //             $document->body(),
    //             $document->slug
    //         );
    //     });

    // $posts = array_map(function ($file){
    //     $document=YamlFrontMatter::parseFile($file);
    //     return new Post(
    //         $document->title,
    //         $document->excerpt,
    //         $document->date,
    //         $document->body(),
    //         $document->slug
    //     );
    // },$files);

    return view('posts',[
        'posts' =>Post::latest()->with('category','author')->get()
    ]);
  
});

Route::get('posts/{post}', function (Post $post) {

   // Find a post by its slug and pass it to a view called "post"

   return view('post',[
    'post'=>$post
    
   ]);
   

});

Route::get('categories/{category:slug}',function (Category $category){
    return view('posts',[
        'posts' =>$category->posts
    ]);
});

Route::get('authors/{author:username}',function (User $author){
    return view('posts',[
        'posts' =>$author->posts->load('category','author')
    ]);
});