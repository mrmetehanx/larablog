<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Author;
use App\Models\Tag;
use App\Models\About;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'address' => 'test adres / test ilçe',
            'name' => 'Metehan Kıran',
            'email' => 'iletisim@metehankiran.com',
            'fb' => 'fb.com/metehankiran',
            'tw' => 'twitter.com/metehankiran',
            'ig' => 'instagram.com/metehankiran',
            'git' => 'github.com/metehankiran'
        ]);

        Tag::create([
            'type' => 0,
            'name' => 'Technology',
            'slug' =>'technology'
        ]);
        Tag::create([
            'type' => 0,
            'name' => 'Laravel',
            'slug' =>'laravel'
        ]);
        Tag::create([
            'type' => 0,
            'name' => 'Test Title',
            'slug' =>'test-title'
        ]);
        Tag::create([
            'type' => 0,
            'name' => 'Symfony',
            'slug' =>'symfony'
        ]);
        Tag::create([
            'type' => 0,
            'name' => 'Word Wide Web',
            'slug' =>'web'
        ]);
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
                'text' => 'parent1 text',
            ]);
        Category::create([
                'name' => 'sub category 1',
                'slug' => 'sub-category-1',
                'text' => 'sub1 text',
                'parent_id' => 1
        ]);
        Category::create([
            'name' => 'sub category 2',
            'slug' => 'sub-category-2',
            'text' => 'sub2 text',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'sub category 3',
            'slug' => 'sub-category-3',
            'text' => 'sub3 text',
            'parent_id' => 1
        ]);
        Category::create([
            'name' => 'parent 2',
            'slug' => 'parent-2',
            'text' => 'parent2 text',
        ]);
        Category::create([
            'name' => 'parent 3',
            'slug' => 'parent-3',
            'text' => 'parent3 text',
        ]);
        \App\Models\Article::factory(100)->create();
    }
}
