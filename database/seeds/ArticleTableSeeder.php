<?php

use Illuminate\Database\Seeder;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
	DB::table('articles')->insert([
		[
			'title' => 'first article',
			'body' => 'hello',
			'user_id' => '1',
			'created_at' => '2016-10-01 00:00:00',
			'updated_at' => '2016-10-02 00:00:00', 
		],
                [
                        'title' => 'second article',
                        'body' => 'good morning',
                        'user_id' => '1',
                        'body' => 'hello',
                        'created_at' => '2016-10-01 00:00:00',
                        'updated_at' => '2016-10-02 00:00:00',
                ],
	]);
    }
}
