<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Author;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Author::create(
            [
                'name' => 'Metehan Kıran',
                'slug' => 'metehan-kiran',
                'email' => 'test@test.com',
                'title' => 'Jr. Web Delepoler',
                'about' => 'bir kaç cümle yazı',
            ]
            );
            Author::create(
                [
                    'name' => 'Mert Tanrıverdi',
                    'slug' => 'mert-tanriverdi',
                    'email' => 'test2@test2.com',
                    'title' => 'Jr. Web Designer',
                    'about' => 'bir kaç cümle yazılar bütünü',
                ]
                );
        // \App\Models\User::factory(10)->create();
        Category::create(
            [   'name' => 'parent',
                'slug' => 'parent',
            ]);
        Category::create([
                'name' => 'sub category 1',
                'slug' => 'sub-category-1',
                'parent_id' => 1
        ]);
        Category::create([
            'name' => 'sub category 2',
            'slug' => 'sub-category-2',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'sub category 3',
            'slug' => 'sub-category-3',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'parent 2',
            'slug' => 'parent-2',
        ]);
        Category::create([
            'name' => 'parent 3',
            'slug' => 'parent-3',
        ]);
        \App\Models\Article::factory(100)->create();
    }
}
