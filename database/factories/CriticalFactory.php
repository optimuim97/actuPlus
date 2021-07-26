<?php

namespace Database\Factories;

use App\Models\Critical;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriticalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Critical::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->word,
        'user_id' => $this->faker->word,
        'content' => $this->faker->text,
        'title' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
