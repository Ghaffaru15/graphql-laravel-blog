<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Post::create([
            'title' => 'Post One',
            'content' => 'This is the content of post one',
            'user_id' => 5
        ]);

        Post::create([
            'title' => 'Post Two',
            'content' => 'This is the content of post two',
            'user_id' => 7
        ]);

        Post::create([
            'title' => 'Post Three',
            'content' => 'This is the content of post three',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Post Four',
            'content' => 'This is the content of post four',
            'user_id' => 8
        ]);
    }
}
