<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "METT cantik",
        "email" => "mettdoo@gmail.com",
        "image" => "akucantik.jpg"
    ]);
});


//halaman single post
// Route::get('/blog', function () {

//     $posts = [
//         [
//             "title" => "Judul Post pertama",
//             "slug" => "judul-post-pertama",
//             "author" => "METT cantik",
//             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
//             Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum."
//         ],
    
//         [
//             "title" => "Judul Post Kedua",
//             "slug" => "judul-post-kedua",
//             "author" => "Maul",
//             "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
//             Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
//             Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur soluta sequi beatae natus inventore rerum nobis eius molestias, vel repellendus cupiditate nihil ducimus pariatur, unde nostrum. Non cumque ipsum dolorum, nesciunt eos iusto molestias odio reiciendis voluptate, incidunt eligendi? Quo sed quam aut laborum! Corporis aspernatur natus amet ipsum repellendus laudantium maxime quidem quos quisquam rerum assumenda laboriosam aperiam nulla nobis minus, esse dolores. Natus tempora, cumque enim itaque deserunt facilis saepe hic ratione velit! Sunt quaerat ad dolor dicta architecto non, tenetur, incidunt saepe ex, sapiente accusantium repellendus et unde quos impedit vitae nobis optio ut suscipit ducimus tempora!"
            
//         ]
//     ];


//     return view('posts', [
//         "title" => "Posts",
//         "posts" => $posts
//     ]);
// });


Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Post categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name
    ]);
});