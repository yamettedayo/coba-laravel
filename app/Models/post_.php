<?php 

namespace App\Models;


class Post 
{
  private static $blog_posts = [
    [
        "title" => "Judul Post pertama",
        "slug" => "judul-post-pertama",
        "author" => "METT cantik",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum."
    ],

    [
        "title" => "Judul Tulisan Maul",
        "slug" => "judul-post-kedua",
        "author" => "Maul",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas ipsam ipsa vitae tempora repellat nobis qui similique voluptatibus alias, eius, blanditiis, quidem doloremque dolores architecto. Eius dolore debitis animi eum. 
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur soluta sequi beatae natus inventore rerum nobis eius molestias, vel repellendus cupiditate nihil ducimus pariatur, unde nostrum. Non cumque ipsum dolorum, nesciunt eos iusto molestias odio reiciendis voluptate, incidunt eligendi? Quo sed quam aut laborum! Corporis aspernatur natus amet ipsum repellendus laudantium maxime quidem quos quisquam rerum assumenda laboriosam aperiam nulla nobis minus, esse dolores. Natus tempora, cumque enim itaque deserunt facilis saepe hic ratione velit! Sunt quaerat ad dolor dicta architecto non, tenetur, incidunt saepe ex, sapiente accusantium repellendus et unde quos impedit vitae nobis optio ut suscipit ducimus tempora!"
        
    ],
  ];

  public static function all() {
    return collect(self::$blog_posts);
  }

  public static function find($slug){
    $posts = static::all();
    return $posts->firstWhere('slug', $slug);

  }
} 

?>