<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Irawan Group',
            'email' => 'irawangroup@gmail.com',
            'password' => bcrypt('12345')
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        Post::create([
             'title' => 'Judul Pertama',
             'category_id' => 1,
             'user_id' =>1,
             'slug' => 'judul-pertama',
             'excerpt' => 'Lorem Ipsum pertama',
             'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus assumenda dolor obcaecati ipsam, totam voluptate corporis. Minima laborum perspiciatis doloribus hic distinctio ex nam possimus, tempore ipsum ducimus ipsam ipsa quo. Cum tempora in quos id nemo possimus laudantium, dolor saepe fuga veniam numquam voluptate, necessitatibus, consectetur nulla magni natus dolorem harum sunt praesentium libero voluptatibus aliquam debitis quibusdam amet. Voluptatibus tempora voluptates aut dicta delectus vel tenetur corrupti dolorem omnis, facilis illo enim ipsa molestias recusandae iure autem ab facere accusantium quae suscipit dolorum. Neque ut iste at explicabo non laboriosam provident voluptate quaerat, consequatur, enim ex saepe dolorum.'

        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'category_id' => 2,
            'user_id' =>1,
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem Ipsum Kedua',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus assumenda dolor obcaecati ipsam, totam voluptate corporis. Minima laborum perspiciatis doloribus hic distinctio ex nam possimus, tempore ipsum ducimus ipsam ipsa quo. Cum tempora in quos id nemo possimus laudantium, dolor saepe fuga veniam numquam voluptate, necessitatibus, consectetur nulla magni natus dolorem harum sunt praesentium libero voluptatibus aliquam debitis quibusdam amet. Voluptatibus tempora voluptates aut dicta delectus vel tenetur corrupti dolorem omnis, facilis illo enim ipsa molestias recusandae iure autem ab facere accusantium quae suscipit dolorum. Neque ut iste at explicabo non laboriosam provident voluptate quaerat, consequatur, enim ex saepe dolorum.'

       ]);

       Post::create([
        'title' => 'Judul Ketiga',
        'category_id' => 3,
        'user_id' =>1,
        'slug' => 'judul-ketiga',
        'excerpt' => 'Lorem Ipsum Ketiga',
        'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus assumenda dolor obcaecati ipsam, totam voluptate corporis. Minima laborum perspiciatis doloribus hic distinctio ex nam possimus, tempore ipsum ducimus ipsam ipsa quo. Cum tempora in quos id nemo possimus laudantium, dolor saepe fuga veniam numquam voluptate, necessitatibus, consectetur nulla magni natus dolorem harum sunt praesentium libero voluptatibus aliquam debitis quibusdam amet. Voluptatibus tempora voluptates aut dicta delectus vel tenetur corrupti dolorem omnis, facilis illo enim ipsa molestias recusandae iure autem ab facere accusantium quae suscipit dolorum. Neque ut iste at explicabo non laboriosam provident voluptate quaerat, consequatur, enim ex saepe dolorum.'

   ]);

    }
}
