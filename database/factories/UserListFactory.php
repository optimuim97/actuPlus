<?php

namespace Database\Factories;

use App\Models\UserList;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserList::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'email' => $this->faker->word,
            'image' => $this->faker->word,
            'user_type' => $this->faker->word,
            'password' => $this->faker->word,
            'created_at' => $this->faker->date('Y-m-d H:i:s'),
            'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
