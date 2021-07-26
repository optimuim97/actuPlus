<?php

namespace Database\Factories;

use App\Models\Proposition;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropositionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proposition::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
        'description' => $this->faker->text,
        'images' => $this->faker->word,
        'video_url' => $this->faker->word,
        'image_urls' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
