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
     */
    public function run(): void
    {
        // User::truncate();
        // Category::truncate();
        // Post::truncate();
        $user = User::factory()->create([
            "name"=>'John Doe'
        ]);
        $user2 = User::factory()->create([
            "name"=>'Jane Doe'
        ]);
        $user3 = User::factory()->create([
            "name"=>'Jack Doe'
        ]);
        Post::factory(10)->create([
            'user_id'=> $user->id
        ]);
        Post::factory(5)->create([
            'user_id'=> $user2->id
        ]);
        Post::factory(2)->create([
            'user_id'=> $user3->id
        ]);
        // $user = User::factory()->create();
        // $personal =Category::create([
        //     'name'=>'Personal',
        //     'slug'=>'personal'
        // ]);
        // $family=Category::create([
        //     'name'=>'Family',
        //     'slug'=>'family'
        // ]);
        // $work=Category::create([
        //     'name'=>'Work',
        //     'slug'=>'work'
        // ]);
       
        // Post::create([
        //     'user_id' =>$user->id,
        //     'category_id'=> $family->id,
        //     'title'=> 'My Family Post',
        //     'slug'=>'my-family-post',
        //     'excerpt'=>'Lorem ipsum dolar sit amet.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi maxime, consectetur eveniet ad a ut molestias veritatis nesciunt expedita molestiae doloremque labore rerum maiores et incidunt at ipsam ea cumque?'
        // ]);
        // Post::create([
        //     'user_id' =>$user->id,
        //     'category_id'=> $work->id,
        //     'title'=> 'My Work Post',
        //     'slug'=>'my-work-post',
        //     'excerpt'=>'Lorem ipsum dolar sit amet.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi maxime, consectetur eveniet ad a ut molestias veritatis nesciunt expedita molestiae doloremque labore rerum maiores et incidunt at ipsam ea cumque?'
        // ]);
        // Post::create([
        //     'user_id' =>$user->id,
        //     'category_id'=> $personal->id,
        //     'title'=> 'My Personal Post',
        //     'slug'=>'my-Personal-post',
        //     'excerpt'=>'Lorem ipsum dolar sit amet.',
        //     'body'=> 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi maxime, consectetur eveniet ad a ut molestias veritatis nesciunt expedita molestiae doloremque labore rerum maiores et incidunt at ipsam ea cumque?'
        // ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

       
    }
}
