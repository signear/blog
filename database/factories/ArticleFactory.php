<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Category;
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
        $title = $this->faker->text(55);
        return [
            'category_id' => Category::inRandomOrder()->first('id'),
            'title'=>$title,
            'image'=>$this->faker->imageUrl(825,300, 'cats',true),
            'content'=>$this->faker->text(1000),
            'slug'=>Str::slug($title)
            //
        ];
    }
}
