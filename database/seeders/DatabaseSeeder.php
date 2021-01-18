<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Faq;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //make Admin
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456')]);

        //make fake users
        User::factory()->count(10)->create();

        //Make fake tags
        Tag::factory()->count(3)->create();
        //fake Faq
        Faq::factory()->count(5)->create();
        Article::factory()->count(5)->create();
        //_____________________
        DB::table('roles')->insert([
            'id' => '1',
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id' => '2',
            'name' => 'moderator'
        ]);
        //_____________________
        DB::table('role_user')->insert([
            'user_id' => '1',
            'role_id' => '1'
        ]);
        //_____________________
        DB::table('article_tag')->insert([
            'article_id' => '1',
            'tag_id' => '1'
        ]);
        //_____________________
        DB::table('categories')->insert([
            'name' => 'Stupid Questions'
        ]);
        DB::table('categories')->insert([
            'name' => 'Simple Questions'
        ]);
        DB::table('categories')->insert([
            'name' => 'Special Questions'
        ]);
        //_____________________
        DB::table('category_faq')->insert([
            'category_id' => '1',
            'faq_id' => '1',
        ]);
        DB::table('category_faq')->insert([
            'category_id' => '1',
            'faq_id' => '2',
        ]);
        DB::table('category_faq')->insert([
            'category_id' => '2',
            'faq_id' => '3',
        ]);
        DB::table('category_faq')->insert([
            'category_id' => '3',
            'faq_id' => '4',
        ]);

    }
}
