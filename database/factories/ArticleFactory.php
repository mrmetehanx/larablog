<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(rand(5,9));
        $rand = rand(1,6);
        $rand2 = rand(300,500);
        return [
            'category_id' => $rand,
            'author_id' => rand(1,2),
            'title' => $title,
            'slug' => Str::slug($title,'-'),
            'body' => $this->faker->sentence(rand(10,300)),
            'img' => 'https://picsum.photos/200/'.$rand2,
        ];
    }
}
