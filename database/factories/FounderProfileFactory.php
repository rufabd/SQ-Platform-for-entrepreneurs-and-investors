<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class FounderProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id,
            'founder_name' => $this->faker->name(),
            'founder_surname' => $this->faker->name(),
            'founder_position' => $this->faker->word(),
            'founder_organization' => $this->faker->words(3, true),
            'founder_telephone' => $this->faker->phoneNumber(),
            'founder_insta_link' => $this->faker->url(),
            'founder_face_link' => $this->faker->url(),
            'founder_linked_link' => $this->faker->url(),
            'founder_description' => $this->faker->paragraphs(3, true),
            'founder_avatar' =>$this->faker->word()
            // 'founder_avatar' =>$this->faker->image(storage_path('public/avatars/founders',400,300, null, false))
        ];
    }
}
