<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('news')->insert([
			[
			'title' => 'title 1',
			'category' => 'category 1',
			'short_desc' => 'short_desc 1',
			'date' => 'date 1',
			'img' => 'img 1'
			],
			[
			'title' => 'title 2',
			'category' => 'category 2',
			'short_desc' => 'short_desc 2',
			'date' => 'date 2',
			'img' => 'img 2'
			],
			[
			'title' => 'title 3',
			'category' => 'category 3',
			'short_desc' => 'short_desc 3',
			'date' => 'date 3',
			'img' => 'img 3'
			],
			
		]);
    }
}
