<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::create([
            'post_id' => 4,
            'reply' => 'This is reply one'
        ]);

        Comment::create([
            'post_id' => 1,
            'reply' => 'This is reply two'
        ]);

    }
}
