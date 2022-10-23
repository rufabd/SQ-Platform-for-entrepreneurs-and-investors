<?php

namespace Database\Seeders;

use App\Models\FounderProfile;
use Illuminate\Database\Seeder;

class FounderProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FounderProfile::factory()->count(20)->create();
    }
}
