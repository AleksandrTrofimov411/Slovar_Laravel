<?php
 /// строгий мод
namespace Database\Factories;

use App\Models\Words;
use App\Services\Word\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Words>
 */
class WordsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Words::class;

    public function definition(): array
    {
        $word = $this->faker->word;
        return [
            "word" => $word,
            "context" => $this->faker->text,
            "translate" => 'Слово',
            "category_id" => Service::getCategoryId($word)
        ];
    }
}
