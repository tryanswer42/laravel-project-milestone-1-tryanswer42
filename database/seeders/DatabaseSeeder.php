<?php

namespace Database\Seeders;

use App\Models\Article;
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
        Article::factory()->count(5)->create();
        DB::table('roles')->insert([
            'id'=>'1',
            'name' => 'admin'
        ]);
        DB::table('roles')->insert([
            'id'=>'2',
            'name' => 'moderator'
        ]);
        DB::table('role_user')->insert([
            'user_id'=>'1',
            'role_id' => '1'
        ]);

    }
}
