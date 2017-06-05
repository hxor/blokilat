<?php

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
    	$post = [];
        foreach (range(1, 10) as $index) {
        	$post[] = [
        		'user_id' => rand(1,2),
        		'category_id' => rand(1,3),
        		'title' => 'Title Post ' . rand(1,10),
        		'body' => 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.',
        		'status' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime
        	];
        }

        DB::table('posts')->insert($post);
    }
}
