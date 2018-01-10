<?php

use Illuminate\Database\Seeder;

class NewscontentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('news_content')->insert([
			[
			'new_id' => '1',
			'text' => 'text 1',
			'img_1' => 'img_1 1',
			'img_2' => 'img_2 1',
			'img_3' => 'img_3 1',
			],
			[
			'new_id' => '2',
			'text' => 'text 2',
			'img_1' => 'img_1 2',
			'img_2' => 'img_2 2',
			'img_3' => 'img_3 2',
			],
			[
			'new_id' => '3',
			'text' => 'text 3',
			'img_1' => 'img_1 3',
			'img_2' => 'img_2 3',
			'img_3' => 'img_3 3',
			],
			[
			'new_id' => '4',
			'text' => 'text 4',
			'img_1' => 'img_1 4',
			'img_2' => 'img_2 4',
			'img_3' => 'img_3 4',
			],
			
		]);
    }
}
