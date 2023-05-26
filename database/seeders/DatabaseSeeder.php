<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Mett cantik',
            'email' => 'mettdo@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Araapp',
            'email' => 'arap@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Friends',
            'slug' => 'my-friend'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'my-self'
        ]);

        Post::create([
            'title' => 'First Friends',
            'slug' => 'first-friend',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit, illo ad aperiam quas eveniet quod quos necessitatibus nulla error soluta ducimus doloribus saepe quae. Temporibus, recusandae nulla facere quam, officiis in tempore, mollitia odit asperiores cum quibusdam! Quaerat placeat, enim pariatur dolor, excepturi voluptates inventore expedita laborum est assumenda corrupti cum facilis ipsa laboriosam perspiciatis. Quo corporis, asperiores cupiditate voluptatum officia consequuntur fuga beatae corrupti, alias architecto perferendis nam cum iure exercitationem nostrum deserunt similique nemo eos dolor itaque ex vel saepe temporibus! Qui, vitae adipisci? Ad placeat magni, iusto illo unde laudantium! Error veniam ipsam voluptates placeat magni.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Second Friends',
            'slug' => 'second-friend',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit, illo ad aperiam quas eveniet quod quos necessitatibus nulla error soluta ducimus doloribus saepe quae. Temporibus, recusandae nulla facere quam, officiis in tempore, mollitia odit asperiores cum quibusdam! Quaerat placeat, enim pariatur dolor, excepturi voluptates inventore expedita laborum est assumenda corrupti cum facilis ipsa laboriosam perspiciatis. Quo corporis, asperiores cupiditate voluptatum officia consequuntur fuga beatae corrupti, alias architecto perferendis nam cum iure exercitationem nostrum deserunt similique nemo eos dolor itaque ex vel saepe temporibus! Qui, vitae adipisci? Ad placeat magni, iusto illo unde laudantium! Error veniam ipsam voluptates placeat magni.',
            'category_id' => 1,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'Thrid Friends',
            'slug' => 'thrid-friend',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit, illo ad aperiam quas eveniet quod quos necessitatibus nulla error soluta ducimus doloribus saepe quae. Temporibus, recusandae nulla facere quam, officiis in tempore, mollitia odit asperiores cum quibusdam! Quaerat placeat, enim pariatur dolor, excepturi voluptates inventore expedita laborum est assumenda corrupti cum facilis ipsa laboriosam perspiciatis. Quo corporis, asperiores cupiditate voluptatum officia consequuntur fuga beatae corrupti, alias architecto perferendis nam cum iure exercitationem nostrum deserunt similique nemo eos dolor itaque ex vel saepe temporibus! Qui, vitae adipisci? Ad placeat magni, iusto illo unde laudantium! Error veniam ipsam voluptates placeat magni.',
            'category_id' => 2,
            'user_id' => 1,
        ]);

        Post::create([
            'title' => 'forth Friends',
            'slug' => 'forth-friend',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem odit, illo ad aperiam quas eveniet quod quos necessitatibus nulla error soluta ducimus doloribus saepe quae. Temporibus, recusandae nulla facere quam, officiis in tempore, mollitia odit asperiores cum quibusdam! Quaerat placeat, enim pariatur dolor, excepturi voluptates inventore expedita laborum est assumenda corrupti cum facilis ipsa laboriosam perspiciatis. Quo corporis, asperiores cupiditate voluptatum officia consequuntur fuga beatae corrupti, alias architecto perferendis nam cum iure exercitationem nostrum deserunt similique nemo eos dolor itaque ex vel saepe temporibus! Qui, vitae adipisci? Ad placeat magni, iusto illo unde laudantium! Error veniam ipsam voluptates placeat magni.',
            'category_id' => 2,
            'user_id' => 2,
        ]);
    }
}
