<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Http\Models\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin::factory()->create();
    }
}
