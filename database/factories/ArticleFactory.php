<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'datum'=> $this->faker->date(),
            'titel'=>$this->faker->sentence,
            'img'=>'https://source.unsplash.com/random',
            'description'=>$this->faker->paragraphs(5,true),
            'viewable'=> $this->faker->boolean,
        ];

//        App\Models\Article::factory()->count(10)->create();
    }
}
