<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create([
            'name'=>'John doe'
        ]);
        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name'=>'personal',
//            'slug'=>'personal'
//        ]);
//        $family = Category::create([
//            'name'=>'family',
//            'slug'=>'family'
//        ]);
//        $work =Category::create([
//            'name'=>'work',
//            'slug'=>'work'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$personal->id,
//            'slug'=>'my pesronal',
//            'title'=>'My personal post',
//            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$family->id,
//            'slug'=>'my family',
//            'title'=>'My family post',
//            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
//        ]);
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'slug'=>'my work',
//            'title'=>'My work post',
//            'excerpt'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
//            'body'=>'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'
//        ]);
    }
}
