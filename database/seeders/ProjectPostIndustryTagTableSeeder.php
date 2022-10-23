<?php

namespace Database\Seeders;

use App\Models\ProjectPostIndustryTag;
use Illuminate\Database\Seeder;

class ProjectPostIndustryTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectPostIndustryTag::factory()->count(10)->create();
    }
}
