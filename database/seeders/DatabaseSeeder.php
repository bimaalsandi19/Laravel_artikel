<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
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
        // User::create([
        //     'name' => 'Bima Al Sandi',
        //     'email' => 'bimaalsandi19@gmail.com',
        //     'password' => md5('12345')
        // ]);
        User::factory()->count(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad laboriosam sequi earum fugit iure aut!',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ut harum fugit numquam id, dignissimos quasi illo maiores quo est? Asperiores magnam, eligendi adipisci quos eveniet natus tenetur doloremque quas rem, repellendus fugit ipsum quia. Ab incidunt, voluptate exercitationem quam numquam repellendus sit officia voluptatem fugit quasi omnis deserunt veniam.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, at quos saepe dolorem accusantium magni dicta eligendi. Dignissimos, voluptatibus? Deserunt earum, accusamus, maiores quasi tempora unde laborum, commodi modi quas voluptatem suscipit? Ex provident obcaecati, a, voluptatibus dolorem ab, pariatur voluptatum odit recusandae perspiciatis maiores magni! Culpa reprehenderit at sit officiis recusandae, minima eum perspiciatis deserunt enim, laboriosam, maxime distinctio?</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad laboriosam sequi earum fugit iure aut!',
            'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam ut harum fugit numquam id, dignissimos quasi illo maiores quo est? Asperiores magnam, eligendi adipisci quos eveniet natus tenetur doloremque quas rem, repellendus fugit ipsum quia. Ab incidunt, voluptate exercitationem quam numquam repellendus sit officia voluptatem fugit quasi omnis deserunt veniam.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sed, at quos saepe dolorem accusantium magni dicta eligendi. Dignissimos, voluptatibus? Deserunt earum, accusamus, maiores quasi tempora unde laborum, commodi modi quas voluptatem suscipit? Ex provident obcaecati, a, voluptatibus dolorem ab, pariatur voluptatum odit recusandae perspiciatis maiores magni! Culpa reprehenderit at sit officiis recusandae, minima eum perspiciatis deserunt enim, laboriosam, maxime distinctio?</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);
    }
}
