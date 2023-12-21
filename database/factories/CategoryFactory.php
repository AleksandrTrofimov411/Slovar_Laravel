<?php

namespace Database\Factories;

use App\Models\Category;
use App\Services\Word\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Category::class;
    private static int $id = 0;

    public function definition(): array
    {
        self::increaseIdCounter();
        $id = self::$id;
        return [
            "id" => $id,
            "letter" => Service::getCategoryId($id)
        ];
    }

    protected function increaseIdCounter(): void
    {
        self::$id++;
    }

}
