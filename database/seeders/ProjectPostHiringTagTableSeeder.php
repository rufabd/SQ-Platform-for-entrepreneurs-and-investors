<?php

namespace Database\Seeders;

use App\Models\ProjectPostHiringTag;
use Illuminate\Database\Seeder;

class ProjectPostHiringTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectPostHiringTag::factory()->count(10)->create();
    }
}
