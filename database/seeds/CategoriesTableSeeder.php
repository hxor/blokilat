<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
        	[
        		'category' => 'PHP'
        	],[
        		'category' => 'Framework'
        	],[
        		'category' => 'Laravel',
        	]
        ];

        DB::table('categories')->insert($category);
    }
}
