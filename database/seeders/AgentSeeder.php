<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('agents')->insert([
            [
                'name' => 'ChatGenie',
                'plan' => 'Free',
                'max_prompts' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'VisionMaster',
                'plan' => 'Pro',
                'max_prompts' => 100,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DataBot',
                'plan' => 'Enterprise',
                'max_prompts' => 1000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
