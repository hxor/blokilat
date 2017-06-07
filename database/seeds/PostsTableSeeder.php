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
      $category = [
        ['category' => 'Uncategorized'],
        ['category' => 'Trend'],
        ['category' => 'Hot News']
      ];

      DB::table('categories')->insert($category);

      $faker = Faker\Factory::create();
      $faker->addProvider(new BlogArticleFaker\FakerProvider($faker));

      for ($i=0; $i < 50; $i++) {
        $title = $faker->articleTitle;
        $content = $faker->articleContent;
        App\Post::create([
          'user_id' => rand(1,2),
          'category_id' => rand(1,3),
          'title' => $title,
          'body' => $content,
          'status' => 1
        ]);
      }
    }
}
