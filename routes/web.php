<?php
use App\Models\Blog;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
    return view ('home', [
        "title" => "Home"
    ]);
});


Route::get('/About', function () {
    return view('about', [
        "title" => "About",
        "name" => "Nayudhe Sania Anako",
        "email"=> "nayudhesania@gmail.com",
        "image"=> "me.jpeg"

    ]);
});



Route::get('/blog', function () { 
    $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nayudhe Sania Anako",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quasi ipsa 
            praesentium ratione eligendi quo deleniti culpa eum accusamus neque assumenda, 
            kiero quod minus deserunt obcaecati non sint ipsam. Veritatis vitae rem quam magni ipsa sapiente a, 
            aliquam distinctio magnam debitis optio similique! Maxime, officiis excepturi fuga cupiditate suscipit quasi 
            neque aliquid commodi quidem fugiat ipsum! Vero cum illo neque tempore error, commodi nobis illum. 
            Corrupti molestiae ea sint vel reiciendis voluptatem sequi illo cumque dignissimos porro, enim laboriosam maiores."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Cholifatul Solihah",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit quasi ipsa 
            praesentium ratione eligendi quo deleniti culpa eum accusamus neque assumenda, 
            kiero quod minus deserunt obcaecati non sint ipsam. Veritatis vitae rem quam magni ipsa sapiente a, 
            aliquam distinctio magnam debitis optio similique! Maxime, officiis excepturi fuga cupiditate suscipit quasi 
            neque aliquid commodi quidem fugiat ipsum! Vero cum illo neque tempore error, commodi nobis illum. 
            Corrupti molestiae ea sint vel reiciendis voluptatem sequi illo cumque dignissimos porro, enim laboriosam maiores. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias magni sint tenetur voluptate veniam quam 
            ullam architecto nesciunt numquam tempora qui debitis voluptatibus explicabo assumenda placeat dolorem quia, 
            accusantium ratione sequi esse suscipit, animi vero. Laboriosam quisquam, cumque et alias, incidunt error harum
             commodi quis natus officia a praesentium! Deleniti architecto quos dolorem, inventore sed voluptates eligendi 
             vel quod molestias perspiciatis mollitia similique alias, soluta iusto maiores consectetur explicabo aut rem quidem eum voluptate accusamus. 
             Perferendis atque sunt quaerat alias facilis soluta officiis laborum temporibus quas quos, exercitationem nulla nihil quasi, praesentium ab nisi, 
             iusto molestias veniam sint esse! Excepturi."  
            ]
];
    
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});

// halaman single post
Route::get('posts/{slug}', function($slug) {
   return view('post', [
    "title" => "Single Post"
   ]);
});


Route::get('/blog', function () {
    return view('blog', [
        "title" => "Post",
        "posts" => Post::all()
    ]);
});