<?php

use Illuminate\Support\Facades\Route;

use App\Models\Post;
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



  

    // $posts = Post::all();

    return view('posts',[
        'posts' =>Post::all()
    ]);
  
});

Route::get('posts/{post}', function ($slug) {

   // Find a post by its slug and pass it to a view called "post"

   return view('post',[
    'post'=>Post::findOrFail($slug)
    
   ]);
   

});