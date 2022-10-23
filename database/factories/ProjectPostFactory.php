<?php

namespace Database\Factories;

use App\Models\FounderProfile;
use App\Models\ProjectPostHiringTag;
use App\Models\ProjectPostIndustryTag;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectPostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'founder_id' => FounderProfile::all()->random()->id,
            'hiring_tag_id' => ProjectPostHiringTag::all()->random()->id,
            'industry_tag_id' => ProjectPostIndustryTag::all()->random()->id,
            'title' => $this->faker->jobTitle(),
            'organization_description'=>$this->faker->paragraphs(3, true),
            'post_description' => $this->faker->paragraphs(4, true),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'organization' => $this->faker->company(),
            'organization_year' => $this->faker->date(),
            'project_stage'=>$this->faker->word(),
            'hours_per_week' => $this->faker->numberBetween(10, 50),
            'type_week' => $this->faker->word(),
            'investment' => $this->faker->numberBetween(1000, 3000000)
        ];
    }
}
