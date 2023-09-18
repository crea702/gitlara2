<?php

namespace Database\Factories;

use App\Models\Teg;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TegFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Teg::class;
    public function definition()
    {
        return [
            'title' => $this->faker->word,
        ];
    }
}
