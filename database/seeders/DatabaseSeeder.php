<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'M. Novianto Anggoro',
            'username' => 'novainto',
            'email' => 'novianto@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Noviantika Anggraini',
            'username' => 'noviantika',
            'email' => 'noviantika@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur pertama',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ut
        //     nihil minima mollitia enim in nulla reiciendis totam, explicabo modi
        //     nesciunt accusantium praesentium quas a accusamus veritatis numquam eius,
        //     dolor delectus fuga nam commodi neque optio? Porro, quasi tenetur nesciunt
        //     asperiores dolore, architecto distinctio impedit cumque id enim officiis
        //     tempore.
        // </p>
        // <p>
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque optio
        //     explicabo officiis, non debitis eaque nostrum tenetur repellat quis iure
        //     aliquid, facere veniam. Eos laborum iure necessitatibus impedit amet,
        //     tenetur et corporis consectetur accusantium odio voluptate expedita quo
        //     earum reprehenderit tempora, magnam officiis voluptatem quaerat! Deleniti
        //     quisquam odio velit. Beatae?
        // </p>
        // <p>
        //     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nulla
        //     consequatur quidem magnam atque repellat et deserunt incidunt cumque unde.
        //     Blanditiis repellat magnam reprehenderit expedita voluptatibus eligendi
        //     dicta iure, nihil earum voluptatem, rerum totam. Aliquam cumque incidunt,
        //     nulla vitae explicabo similique deleniti quis id sunt, doloribus, voluptates
        //     neque distinctio eos!
        // </p>',

        // ]);
        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur kedua',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ut
        //     nihil minima mollitia enim in nulla reiciendis totam, explicabo modi
        //     nesciunt accusantium praesentium quas a accusamus veritatis numquam eius,
        //     dolor delectus fuga nam commodi neque optio? Porro, quasi tenetur nesciunt
        //     asperiores dolore, architecto distinctio impedit cumque id enim officiis
        //     tempore.
        // </p>
        // <p>
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque optio
        //     explicabo officiis, non debitis eaque nostrum tenetur repellat quis iure
        //     aliquid, facere veniam. Eos laborum iure necessitatibus impedit amet,
        //     tenetur et corporis consectetur accusantium odio voluptate expedita quo
        //     earum reprehenderit tempora, magnam officiis voluptatem quaerat! Deleniti
        //     quisquam odio velit. Beatae?
        // </p>
        // <p>
        //     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nulla
        //     consequatur quidem magnam atque repellat et deserunt incidunt cumque unde.
        //     Blanditiis repellat magnam reprehenderit expedita voluptatibus eligendi
        //     dicta iure, nihil earum voluptatem, rerum totam. Aliquam cumque incidunt,
        //     nulla vitae explicabo similique deleniti quis id sunt, doloribus, voluptates
        //     neque distinctio eos!
        // </p>',

        // ]);
        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur ketiga',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ut
        //     nihil minima mollitia enim in nulla reiciendis totam, explicabo modi
        //     nesciunt accusantium praesentium quas a accusamus veritatis numquam eius,
        //     dolor delectus fuga nam commodi neque optio? Porro, quasi tenetur nesciunt
        //     asperiores dolore, architecto distinctio impedit cumque id enim officiis
        //     tempore.
        // </p>
        // <p>
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque optio
        //     explicabo officiis, non debitis eaque nostrum tenetur repellat quis iure
        //     aliquid, facere veniam. Eos laborum iure necessitatibus impedit amet,
        //     tenetur et corporis consectetur accusantium odio voluptate expedita quo
        //     earum reprehenderit tempora, magnam officiis voluptatem quaerat! Deleniti
        //     quisquam odio velit. Beatae?
        // </p>
        // <p>
        //     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nulla
        //     consequatur quidem magnam atque repellat et deserunt incidunt cumque unde.
        //     Blanditiis repellat magnam reprehenderit expedita voluptatibus eligendi
        //     dicta iure, nihil earum voluptatem, rerum totam. Aliquam cumque incidunt,
        //     nulla vitae explicabo similique deleniti quis id sunt, doloribus, voluptates
        //     neque distinctio eos!
        // </p>',

        // ]);

        // Post::create([
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor, sit amet consectetur keempat',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ut
        //     nihil minima mollitia enim in nulla reiciendis totam, explicabo modi
        //     nesciunt accusantium praesentium quas a accusamus veritatis numquam eius,
        //     dolor delectus fuga nam commodi neque optio? Porro, quasi tenetur nesciunt
        //     asperiores dolore, architecto distinctio impedit cumque id enim officiis
        //     tempore.
        // </p>
        // <p>
        //     Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque optio
        //     explicabo officiis, non debitis eaque nostrum tenetur repellat quis iure
        //     aliquid, facere veniam. Eos laborum iure necessitatibus impedit amet,
        //     tenetur et corporis consectetur accusantium odio voluptate expedita quo
        //     earum reprehenderit tempora, magnam officiis voluptatem quaerat! Deleniti
        //     quisquam odio velit. Beatae?
        // </p>
        // <p>
        //     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, nulla
        //     consequatur quidem magnam atque repellat et deserunt incidunt cumque unde.
        //     Blanditiis repellat magnam reprehenderit expedita voluptatibus eligendi
        //     dicta iure, nihil earum voluptatem, rerum totam. Aliquam cumque incidunt,
        //     nulla vitae explicabo similique deleniti quis id sunt, doloribus, voluptates
        //     neque distinctio eos!
        // </p>',

        // ]);
    }
}