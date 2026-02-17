<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    
    public function definition(): array
    {
        //1 2 ... => [1,2,....]
        $userIds  = User::pluck('id')->toArray();
        //[1,2,...] => random 1 2 ....
        $userId = collect($userIds)->random();
        return [
            "content" => $this->faker->text(50),
            "user_id" => $this->faker->$userId
        ];
    }
}
