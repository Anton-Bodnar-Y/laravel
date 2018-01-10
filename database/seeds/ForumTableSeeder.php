<?php

use Illuminate\Database\Seeder;

class ForumTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('forum')->insert([
			[
			'forum_title' => 'forum_title 1',
			'date' => 'date 1',
			],
			[
			'forum_title' => 'forum_title 2',
			'date' => 'date 2',
			],
			[
			'forum_title' => 'forum_title 3',
			'date' => 'date 3',
			],
			[
			'forum_title' => 'forum_title 4',
			'date' => 'date 4',
			],
			
		]);
    }
}
