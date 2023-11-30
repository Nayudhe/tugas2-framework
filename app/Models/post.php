<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    private static $blog_posts = 
        [
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
            public static function all() {
                return collect(self::$blog_posts);
}
}