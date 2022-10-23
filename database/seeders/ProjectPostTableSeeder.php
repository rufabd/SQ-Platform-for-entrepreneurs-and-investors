<?php

namespace Database\Seeders;

use App\Models\ProjectPost;
use Illuminate\Database\Seeder;

class ProjectPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectPost::factory()->count(15)->create();
    }
}
